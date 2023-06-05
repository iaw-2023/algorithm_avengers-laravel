<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
 *              property="direccion_entrega",
 *              type="string",
 *              example="Belgrano 1812"
 *          ),
 *          @OA\Property(
 *              property="detalle_orden",
 *              type="array",
 *              @OA\Items(ref="#/components/schemas/DetalleOrden")
 *          ),
 *          @OA\Property(
 *              property="cliente",
 *              type="object",
 *                  @OA\Property(
 *                      property="id",
 *                      ref="#/components/schemas/Cliente/properties/id"
 *                  ),
 *                  @OA\Property(
 *                      property="email",
 *                      ref="#/components/schemas/Cliente/properties/email"
 *                  ),
 *                  @OA\Property(
 *                      property="nombre",
 *                      ref="#/components/schemas/Cliente/properties/nombre"
 *                  )
 *          )
 * ),
 * 
 * @OA\Schema(
 *      schema="CompraPost",
 *      type="object",
 *          @OA\Property(
 *              property="id_cliente",
 *              ref="#/components/schemas/Cliente/properties/id"
 *          ),
 *          @OA\Property(
 *              property="direccion_entrega",
 *              type="string",
 *              example="Juan Manuel de Rosas 1845"
 *          ),
 *          @OA\Property(
 *              property="detalle",
 *              type="array",
 *              @OA\Items(
 *                  type="object",
 *                  @OA\Property(
 *                      property="id_producto",
 *                      ref="#/components/schemas/Producto/properties/id"
 *                  ),
 *                  @OA\Property(
 *                      property="cantidad",
 *                      type="integer",
 *                      example=3
 *                  )
 *              ) 
 *          )           
 * )
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
}
