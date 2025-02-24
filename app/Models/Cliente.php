<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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
 * )
 */
class Cliente extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $guarded = ['id', 'activo'];

    public function compras(): HasMany{
        return $this->hasMany(Compra::class, 'email_cliente', 'email');
    }

}
