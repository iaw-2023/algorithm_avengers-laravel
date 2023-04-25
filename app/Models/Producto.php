<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function getAll(): View{
        $productos = DB::table('productos')->get();

        return view('productos.index', ['productos' => $productos]);
    }
}
