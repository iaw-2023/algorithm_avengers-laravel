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
        // creo la nueva compra
        $compra = Compra::create([
            'precio' => -1,
            'fecha' => date('Y-m-d'),
            'direccion_entrega' => $request->input('direccion_entrega'),
            'id_cliente' => $request->input('id_cliente'),
        ]);
        $id_compra = $compra['id'];
        
        $detalle = $request->input('detalle');
        
        // calculo el precio de la compra en base a los productos que la componen
        $precio = 0.0;
        foreach($detalle as $item){
            $precio_producto = Producto::select('precio')->where('id', $item['id_producto'])->first();
            $precio += (float) $precio_producto['precio'] * $item['cantidad'];
        
            $detalle_orden = DetalleOrden::create(
                [
                'id_compra' => $id_compra,
                'id_producto' => $item['id_producto'],
                'cantidad' => $item['cantidad'],
                ]
            );
            
        }

        // actualizo la compra con su precio
        Compra::where('id', $id_compra)->update(['precio' => $precio]);
        
        return response()->json(['message' => 'Compra creada correctamente'], 201);
    }
}
