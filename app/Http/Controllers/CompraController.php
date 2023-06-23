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
        $datos['compras'] = Compra::orderBy('fecha')
        ->get();

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
            $precio_producto = Producto::select('precio')->where('id', $item['producto_id'])->first();
            $precio += (float) $precio_producto['precio'] * $item['cantidad'];
        
            $detalle_orden = DetalleOrden::create(
                [
                'compra_id' => $id_compra,
                'producto_id' => $item['producto_id'],
                'cantidad' => $item['cantidad'],
                ]
            );
            
        }

        // actualizo la compra con su precio
        Compra::where('id', $id_compra)->update(['precio' => $precio]);
        
        return Compra::select('id', 'fecha', 'precio', 'cliente_id', 'direccion_entrega')
            ->where('id', $id_compra)
            ->first();
    }
}
