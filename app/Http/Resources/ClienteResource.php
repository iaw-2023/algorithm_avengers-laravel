<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClienteResource extends JsonResource
{
    /**
     * @OA\Get(
     *      tags={"clientes"},
     *      path="/rest/clientes",
     *      summary="Devuelve todos los clientes",
     *      description="Devuelve todos los clientes registrados en el sistema",
     *      @OA\Response(
     *          response="200",
     *          description="Operación realizada con éxito",
     *          @OA\JsonContent(ref="#/components/schemas/Cliente")
     *      ),
     *      @OA\Response(
     *          response="default",
     *          description="Error inesperado"
     *      )
     * ),
     * 
     * @OA\Post(
     *      tags={"clientes"},
     *      path="/rest/clientes",
     *      summary="Almacena un nuevo cliente en el sistema",
     *      description="Almacena un nuevo cliente en el sistema y lo retorna",
     *      @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="id",
     *                     type="integer",
     *                     example=2
     *                ),
     *                @OA\Property(
     *                     property="email",
     *                     type="string",
     *                     format="email",
     *                     example="juan_gonzález@example.com"
     *                ),
     *                @OA\Property(
     *                     property="contrasena",
     *                     type="string",
     *                     example="2af329f4923f1ccde3cbaeb949e3fe32",
     *                     description="Contraseña codificada en md5"
     *                 ),
     *                 @OA\Property(
     *                     property="nombre",
     *                     type="string",
     *                     example="Juan González"
     *                 ),
     *                 @OA\Property(
     *                     property="telefono",
     *                     type="string",
     *                     example="+54 1 111 111 1111"
     *                 ),
     *                 @OA\Property(
     *                     property="domicilio",
     *                     type="string",
     *                     example="San Martín 1810"
     *                 )  
     *             )
     *          )
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Operación realizada con éxito",
     *          @OA\JsonContent(ref="#/components/schemas/Cliente")
     *      ),
     *      @OA\Response(
     *          response="default",
     *          description="Error inesperado"
     *      )
     * )
     * 
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'email' => $this->email,
            'nombre' => $this->nombre,
            'telefono' => $this->telefono,
            'domicilio' => $this->domicilio
        ];
    }
}
