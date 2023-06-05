<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *      schema="Categoria",
 *      type="object",
 *          @OA\Property(
 *              property="id",
 *              type="integer",
 *              example=3
 *          ),
 *          @OA\Property(
 *              property="nombre",
 *              type="string",
 *              example="Masculinidades"
 *          ),
 *          @OA\Property(
 *              property="descripcion",
 *              type="string",
 *              example="Ropa diseñada para masculinidades"
 *          )
 * )
 */

class Categoria extends Model
{
    use HasFactory;
}
