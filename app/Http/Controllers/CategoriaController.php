<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\ProdCat;

class CategoriaController extends Controller
{
    public function index(){
        $datos['categorias'] = Categoria::where('activo', true)->get();
        $datos['cantidades'] = array();

        $categorias = Categoria::select('id')->where('activo', true)->get();
        
        foreach ($categorias->toArray() as $cat ){
            $cantidad = ProdCat::where('id_categoria', $cat['id'])->count();
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

