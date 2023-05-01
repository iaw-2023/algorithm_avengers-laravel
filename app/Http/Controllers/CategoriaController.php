<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index(){
        $datos['categorias'] = Categoria::where('activo', true)->get();
        return view('categorias.index', $datos);
    }

    public function edit(Request $request): View
    {
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
    }

    public function destroy(Request $request): RedirectResponse
    {

    }
}

