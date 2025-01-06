<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
 *              property="imagen",
 *              type="string",
 *              example="www.sitio.com/imagen.jpg"
 *          ),
 *          @OA\Property(
 *              property="precio",
 *              type="number",
 *              example=1234.56
 *          ),
 *          @OA\Property(
 *              property="talles",
 *              type="string",
 *              example="XS,S,M,L,XL,XXL,XXXL,XXXXL,XXXXXL"
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
 * ),
 * 
 * @OA\Schema(
 *      schema="ProductoByCategoria",
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
 *              property="imagen",
 *              type="string",
 *              example="www.sitio.com/imagen.jpg"
 *          ),
 *          @OA\Property(
 *              property="talles",
 *              type="string",
 *              example="XS,S,M,L,XL,XXL,XXXL,XXXXL,XXXXXL"
 *          )
 * )
 */

class Producto extends Model
{
    use HasFactory;

    protected static $TALLES_VALIDOS = ['XS','S','M','L','XL','XXL','XXXL','XXXXL','XXXXXL'];
    protected $fillable = ['nombre','descripcion','precio','imagen','imagen_public_id','talles','categoria_id'];

    public static function getTallesValidos(){
        return self::$TALLES_VALIDOS;
    }

    public function categoria(): BelongsTo {
        return $this->belongsTo(Categoria::class);
    }
}
