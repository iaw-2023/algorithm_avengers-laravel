<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoController extends Controller
{
    public function index(){
        $datos['productos'] = Producto::where('activo', true)->orderBy('id', 'ASC')->get();
        $datos['categorias'] = array();

        /*
            A cada producto le adjunto el nombre de su categoría en un
            arreglo $categorias donde el nombre de la categoría para el
            elemento x se encuentra en $categorias[x]
        */
        foreach($datos['productos']->toArray() as $prod){
            $categoria = Categoria::select('nombre')->where('id', $prod['categoria'])->first();
            $datos['categorias'][$prod['id']] = $categoria['nombre'];
        }

        return view('productos.index', $datos);
    }

    public function create(){
        $datos['total_categorias'] = Categoria::where('activo', true)->get();
        $datos['talles_validos'] = Producto::getTallesValidos();
        return view('productos.create', $datos);
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
        $datos['producto'] = Producto::findOrFail($id);
        $datos['talles_validos'] = Producto::getTallesValidos();
        $producto = $datos['producto'];

        $datos['categoria'] = Categoria::select('nombre')->where('id', $producto['categoria'])->first();
        $datos['total_categorias'] = Categoria::where('activo', true)->get();

        return view('productos.edit', $datos);
    }

    public function update(Request $request, $id){
        $datos = request()->except(['_token', '_method']);
        Producto::where('id', '=', $id)->update($datos);

        return redirect('productos');
    }
}
