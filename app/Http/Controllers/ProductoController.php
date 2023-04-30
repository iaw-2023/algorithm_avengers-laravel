<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index(){
        $datos['productos'] = Producto::where('activo', true)->get();
        return view('productos.index', $datos);
    }

    public function create(){
        return view('productos.create');
    }

    public function store(Request $request){
        $datos = $request->except('_token');
        Producto::insert($datos);
        
        return redirect('productos');
    }

    public function destroy(Producto $producto){
        $elemento = Producto::where('id', $producto->id)->first();
        $elemento->activo = false;
        $elemento->save();

        return redirect('productos');
    }

    public function edit($id){
        $producto = Producto::findOrFail($id);

        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, $id){
        $datos = request()->except(['_token', '_method']);
        Producto::where('id', '=', $id)->update($datos);

        return redirect('productos');
    }
}
