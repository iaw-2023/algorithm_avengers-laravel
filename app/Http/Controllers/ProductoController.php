<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoController extends Controller
{
    public function index(){
        $datos['productos'] = Producto::where('activo', true)
            ->orderBy('id', 'ASC')
            ->paginate(5);

        return view('productos.index', $datos);
    }

    public function create(){
        $datos['total_categorias'] = Categoria::where('activo', true)->get();
        $datos['talles_validos'] = Producto::getTallesValidos();
        return view('productos.create', $datos);
    }

    public function store(Request $request){
        $talles_validos = Producto::getTallesValidos();

        $campos = [
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'precio' => 'required|min:0',
            'imagen' => 'required|active_url|',
            'talles' => ['required','string','regex:/('.implode(')?,?(', $talles_validos).')?/'],
            'categoria_id' => 'required|integer'
        ];

        $mensaje = [
            'required' => 'El atributo :attribute es requerido',
            'min' => 'El precio debe ser un número positivo',
            'active_url' => 'La URL de la imagen debe ser una URL activa'
        ];

        $this->validate($request, $campos, $mensaje);

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
