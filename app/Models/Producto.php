<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected static $TALLES_VALIDOS = ['XS','S','M','L','XL','XXL','XXXL','XXXXL','XXXXXL'];

    public static function getTallesValidos(){
        return self::$TALLES_VALIDOS;
    }
}
