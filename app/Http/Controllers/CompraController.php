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
        ->paginate(10);

        return view('compras.index', $datos);
    }

    public function storeAPI(Request $request){
        // creo la nueva compra
        $compra = Compra::create([
            'precio' => -1,
            'fecha' => date('Y-m-d'),
            'email_cliente' => $request->input('email_cliente'),
        ]);
        $compra_id = $compra['id'];
        
        $detalle = $request->input('detalle');
        
        // calculo el precio de la compra en base a los productos que la componen
        $precio_compra = 0.0;
        foreach($detalle as $item){
            $precio_producto = Producto::select('precio')
                ->where('id', $item['producto_id'])
                ->first();
            $precio_compra += (float) $precio_producto['precio'] * $item['cantidad'];
        
            $detalle_orden = new DetalleOrden(
                [
                'producto_id' => $item['producto_id'],
                'talle' => $item['talle'],
                'cantidad' => $item['cantidad'],
                ]
            );

            $compra->detalles()->save($detalle_orden);
            
        }

        // actualizo la compra con su precio
        $compra->precio = $precio_compra;
        $compra->save();
        
        return Compra::select('id', 'fecha', 'precio', 'email_cliente')
            ->where('id', $compra_id)
            ->first();
    }
}
