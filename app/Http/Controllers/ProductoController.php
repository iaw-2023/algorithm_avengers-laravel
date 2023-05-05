<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoController extends Controller
{
    public function index(){
        $datos['productos'] = Producto::addSelect(['categoria_nombre' => Categoria::select('nombre')
                ->whereColumn('categoria', 'categorias.id')])
            ->where('activo', true)
            ->orderBy('id', 'ASC')
            ->get();

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

        $datos['categoria'] = Categoria::select('nombre')
            ->where('id', $producto['categoria'])
            ->first();
        $datos['total_categorias'] = Categoria::where('activo', true)
            ->get();

        return view('productos.edit', $datos);
    }

    public function update(Request $request, $id){
        $datos = request()->except(['_token', '_method']);
        Producto::where('id', '=', $id)->update($datos);

        return redirect('productos');
    }
}
