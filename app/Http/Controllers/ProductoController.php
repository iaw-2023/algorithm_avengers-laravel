<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index(){
        $datos['productos'] = Producto::all();
        return view('productos.index', $datos);
    }
}
