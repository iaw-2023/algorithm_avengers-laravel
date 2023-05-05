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
}
