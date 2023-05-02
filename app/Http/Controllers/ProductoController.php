<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\ProdCat;
use App\Models\Categoria;

class ProductoController extends Controller
{
    public function index(){
        $datos['productos'] = Producto::where('activo', true)->get();
        $datos['categorias'] = array();

        $productos = Producto::select('id')->where('activo', true)->get();
        // falta de eficiencia en esta consulta? 
        foreach($productos->toArray() as $prod){
            $categorias = ProdCat::select('id_categoria')->where('id_producto', $prod['id'])->get();
            $datos['categorias'][$prod['id']] = array();
            $i = 0;

            foreach($categorias->toArray() as $cat){
                $nombre = Categoria::select('nombre')->where('id', $cat['id_categoria'])->first();
                $datos['categorias'][$prod['id']][$i++] = $nombre['nombre'];
            }
        }

        return view('productos.index', $datos);
    }

    public function create(){
        $datos['total_categorias'] = Categoria::where('activo', true)->get();
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
        //$producto = Producto::findOrFail($id);

        //return view('productos.edit', compact('producto'));
        $datos['producto'] = Producto::findOrFail($id);
        $datos['total_categorias'] = Categoria::where('activo', true)->get();
        $datos['categorias'] = array();
        $categorias = ProdCat::select('id_categoria')->where('id_producto', $id)->get();
        $i = 0;
        
        foreach($categorias->toArray() as $cat){
            $consulta = Categoria::select('nombre')->where('id', $cat['id_categoria'])->first();
            $datos['categorias'][$i++] = $consulta['nombre'];
        }

        return view('productos.edit', $datos);
    }

    public function update(Request $request, $id){
        $datos = request()->except(['_token', '_method']);
        Producto::where('id', '=', $id)->update($datos);

        return redirect('productos');
    }
}
