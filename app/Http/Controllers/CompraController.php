<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use App\Models\Cliente;
use App\Models\DetalleOrden;
use App\Models\Producto;

class CompraController extends Controller
{
    public function index(){
        $datos['compras'] = Compra::addSelect(['email_cliente' => Cliente::select('email')
            ->whereColumn('id_cliente', 'clientes.id')])
        ->orderBy('fecha')
        ->get();
        $datos['productos_compra'] = array();
        
        foreach($datos['compras']->toArray() as $compra){
            $productos = DetalleOrden::addSelect(['nombre_producto' => Producto::select('nombre')
                ->whereColumn('id_producto', 'productos.id')])
            ->where('id_compra', $compra['id'])
            ->orderBy('nombre_producto')
            ->get();

            $datos['productos_compra'][$compra['id']] = $productos;
        }

        return view('compras.index', $datos);
    }

    public function storeAPI(Request $request){
        $compra = Compra::create($request->except('detalle'));
        $id_compra = $compra['id'];
        
        $detalle = $request->input('detalle');
        
        $precio = 0.0;
        foreach($detalle as $item){
            $precio_producto = Producto::select('precio')->where('id', $item['id_producto'])->first();
            $precio += $precio_producto['precio'] * $item['cantidad'];
        
            $detalle_orden = DetalleOrden::create([
                'id_compra' => $id_compra,
                'id_producto' => $item['id_producto'],
                'cantidad' => $item['cantidad'],
            ]);
            $detalle_orden->save();
        }

        Compra::where('id', $id_compra)->update(['precio' => $precio]);
        
        dd(Compra::where('id', $id_compra));

        return response()->json(['message' => 'Compra creada correctamente'], 201);
    }
}
