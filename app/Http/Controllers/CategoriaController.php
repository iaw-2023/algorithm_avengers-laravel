<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

class CategoriaController extends Controller
{
    public function index(){
        $datos['categorias'] = Categoria::where('activo', true)
            ->orderBy('nombre')
            ->paginate(10);

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

        // elimino todos los productos pertenecientes a esa categoría
        $productos = Producto::where('categoria_id', $categoria->id)->get();
        foreach ($productos as $producto){
            $producto->activo = false;
            $producto->save();
        }

        return redirect('categorias');
    }

    public function getProductos($id){        
        return Producto::select('id', 'nombre', 'descripcion', 'precio', 'imagen', 'talles')
            ->where('categoria_id', $id)
            ->where('activo', true)
            ->get();
    }
}

