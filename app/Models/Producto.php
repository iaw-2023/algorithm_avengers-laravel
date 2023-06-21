<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *      schema="Producto",
 *      type="object",
 *          @OA\Property(
 *              property="id",
 *              type="integer",
 *              example=1
 *          ),
 *          @OA\Property(
 *              property="nombre",
 *              type="string",
 *              example="Buzo Rebelde"
 *          ),
 *          @OA\Property(
 *              property="descripcion",
 *              type="string",
 *              example="Buzo estampado en la espalda"
 *          ),
 *          @OA\Property(
 *              property="precio",
 *              type="number",
 *              example=1234.56
 *          ),
 *          @OA\Property(
 *              property="categoria",
 *              type="object",
 *                  @OA\Property(
 *                      property="id",
 *                      ref="#/components/schemas/Categoria/properties/id"
 *                  ),
 *                  @OA\Property(
 *                      property="nombre",
 *                      ref="#/components/schemas/Categoria/properties/nombre"
 *                  )
 *          )
 * )
 */

class Producto extends Model
{
    use HasFactory;

    protected static $TALLES_VALIDOS = ['XS','S','M','L','XL','XXL','XXXL','XXXXL','XXXXXL'];

    public static function getTallesValidos(){
        return self::$TALLES_VALIDOS;
    }
}
