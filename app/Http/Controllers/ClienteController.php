<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Compra;

class ClienteController extends Controller
{
    public function index(){
        $datos['clientes'] = Cliente::select('id','email', 'nombre', 'telefono','domicilio')
            ->orderBy('nombre', 'ASC')
            ->get();
        $datos['cant_compras'] = array();

        /*
            En el arreglo 'cant_compras' almaceno la candidad de compras hechas por cada cliente
        */
        foreach($datos['clientes']->toArray() as $cliente){
            $cantidad_compras = Compra::where('id_cliente', $cliente['id'])->count();
            $datos['cant_compras'][$cliente['id']] = $cantidad_compras;
        }

        return view('clientes.index', $datos);
    }

}
