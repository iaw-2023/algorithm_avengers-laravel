<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ProductoController extends Controller
{
    public function index(){
        $datos['productos'] = Producto::where('activo', true)
            ->orderBy('id', 'ASC')
            ->paginate(10);

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
            'imagen' => 'required|image|max:2048',
            'talles' => ['required','string','regex:/('.implode(')?,?(', $talles_validos).')?/'],
            'categoria_id' => 'required|integer'
        ];

        $mensaje = [
            'required' => 'El atributo :attribute es requerido',
            'min' => 'El precio debe ser un número positivo',
            'active_url' => 'La URL de la imagen debe ser una URL activa'
        ];

        $this->validate($request, $campos, $mensaje);

        $cloudinaryImage = $request->file('image')->sotreInCloudinary('productos');
        $cloudinaryUrl = $cloudinaryImage->getSecurePath();
        $cloudinaryPublicId = $cloudinaryImage->getPublicId();

        Producto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'imagen' => $cloudinaryUrl,
            'imagen_public_id' => $cloudinaryPublicId,
            'talles' => $request->talles,
            'categoria_id' => $request->categoria_id
        ]);
        
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

    public function update(Request $request, Product $product){
        $datos = request()->except(['_token', '_method']);

        if($request->hasFile('imagen')){
            Cloudinary::destroy($product->imagen_public_id);
            $cloudinaryImage = $request->file('imagen')->storeInCloudinary('productos');
            $cloudinaryUrl = $cloudinaryImage->getSecurePath();
            $cloudinaryPublicId = $cloudinaryImage->getPublicId();

            $product->update([
                'imagen' => $cloudinaryUrl,
                'imagen_public_id' => $cloudinaryPublicId
            ]);
        }

        $product->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'talles' => $request->talles,
            'categoria_id' => $request->categoria_id
        ]);

        return redirect('productos');
    }
}
