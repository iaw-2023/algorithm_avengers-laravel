<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @OA\Schema(
 *      schema="DetalleOrden",
 *      type="object",
 *          @OA\Property(
 *              property="id",
 *              type="integer",
 *              example=4
 *          ),
 *          @OA\Property(
 *              property="producto_id",
 *              ref="#/components/schemas/Producto/properties/id"
 *          ),
 *          @OA\Property(
 *              property="cantidad",
 *              type="integer",
 *              example=2
 *          ),
 *          @OA\Property(
 *              property="nombre_producto",
 *              ref="#/components/schemas/Producto/properties/nombre"
 *          )
 * )
 */

class DetalleOrden extends Model
{
    use HasFactory;

    protected $table = 'detalle_orden';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function producto(): hasOne{
        return $this->hasOne(Producto::class, 'id', 'producto_id');
    }

}
