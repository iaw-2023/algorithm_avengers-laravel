<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @OA\Schema(
 *      schema="Compra",
 *      type="object",
 *          @OA\Property(
 *              property="id",
 *              type="integer",
 *              example=1
 *          ),
 *          @OA\Property(
 *              property="precio",
 *              type="number",
 *              example=12345.67
 *          ),
 *          @OA\Property(
 *              property="fecha",
 *              type="string",
 *              format="date"
 *          ),
 *          @OA\Property(
 *              property="email_cliente",
 *              type="string",
 *              example="jose_sanmartin@example.com"
 *          ),
 *          @OA\Property(
 *              property="detalle_orden",
 *              type="array",
 *              @OA\Items(ref="#/components/schemas/DetalleOrden")
 *          )
 * )
 * 
 * @OA\Schema(
 *      schema="CompraPost",
 *      type="object",
 *          @OA\Property(
 *              property="id",
 *              type="integer",
 *              example=1
 *          ),
 *          @OA\Property(
 *              property="precio",
 *              type="number",
 *              example=12345.67
 *          ),
 *          @OA\Property(
 *              property="fecha",
 *              type="string",
 *              format="date"
 *          ),
 *          @OA\Property(
 *              property="email_cliente",
 *              type="string",
 *              example="jose_sanmartin@example.com"
 *          )
 * )
 * 
 */

class Compra extends Model
{
    use HasFactory;
    
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function detalles(): hasMany{
        return $this->hasMany(DetalleOrden::class);
    }


}
