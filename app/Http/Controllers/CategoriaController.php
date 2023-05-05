<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

class CategoriaController extends Controller
{
    public function index(){
        $datos['categorias'] = Categoria::where('activo', true)->get();
        $datos['cantidades'] = array();
        
        /*
            En el arreglo 'cantidades' guardo la cantidad de productos asociados a cada categoría
        */
        foreach ($datos['categorias']->toArray() as $cat ){
            $cantidad = Producto::where('categoria', $cat['id'])->count();
            $datos['cantidades'][$cat['id']] = $cantidad;
        }

        return view('categorias.index', $datos);
    }

    public function create(){
        return view('categorias.create');
    }

    public function edit($id){
        $categoria = Categoria::findOrFail($id);

        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, $id){
        $datos = request()->except(['_token', '_method']);
        Categoria::where('id', '=', $id)->update($datos);

        return redirect('categorias');
    }

    public function store(Request $request){
        $datos = $request->except('_token');
        Categoria::insert($datos);
        
        return redirect('categorias');
    }

    public function destroy(Categoria $categoria){
        $elemento = Categoria::where('id', $categoria->id)->first();
        $elemento->activo = false;
        $elemento->save();

        return redirect('categorias');
    }
}

