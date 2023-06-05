<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *      schema="Cliente",
 *      type="object",
 *          @OA\Property(
 *              property="id",
 *              type="integer",
 *              example=2
 *          ),
 *          @OA\Property(
 *              property="email",
 *              type="string",
 *              format="email",
 *              example="juan_gonzález@example.com"
 *          ),
 *          @OA\Property(
 *              property="nombre",
 *              type="string",
 *              example="Juan González"
 *          ),
 *          @OA\Property(
 *              property="telefono",
 *              type="string",
 *              example="+54 1 111 111 1111"
 *          ),
 *          @OA\Property(
 *              property="domicilio",
 *              type="string",
 *              example="San Martín 1810"
 *          )
 * ),
 * 
 * @OA\Schema(
 *      schema="ClientePut",
 *      type="object",
 *          @OA\Property(
 *              property="id",
 *              type="integer",
 *              example=2
 *          ),
 *          @OA\Property(
 *              property="email",
 *              type="string",
 *              format="email",
 *              example="juan_gonzález@example.com"
 *          ),
 *          @OA\Property(
 *              property="contrasena",
 *              type="string",
 *              example="2af329f4923f1ccde3cbaeb949e3fe32",
 *              description="Contraseña codificada en md5"
 *          ),
 *          @OA\Property(
 *              property="nombre",
 *              type="string",
 *              example="Juan González"
 *          ),
 *          @OA\Property(
 *              property="telefono",
 *              type="string",
 *              example="+54 1 111 111 1111"
 *          ),
 *          @OA\Property(
 *              property="domicilio",
 *              type="string",
 *              example="San Martín 1810"
 *          )
 * )
 */
class Cliente extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'activo'];

}
