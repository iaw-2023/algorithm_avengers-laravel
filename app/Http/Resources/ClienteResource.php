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
     *          @OA\JsonContent(
     *              @OA\Property(
     *                  property="data",
     *                  type="array",
     *                  @OA\Items(
     *                      ref="#/components/schemas/Cliente"
     *                  )
     *              )
     *          )
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
     *                @OA\Property(
     *                     property="email",
     *                     type="string",
     *                     format="email"
     *                ),
     *                @OA\Property(
     *                     property="contrasena",
     *                     type="string",
     *                     description="Contraseña codificada en md5"
     *                 ),
     *                 @OA\Property(
     *                     property="nombre",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="telefono",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="domicilio",
     *                     type="string"
     *                 ),
     *                 example={"email":"juan_gonzález@example.com","contrasena":"2af329f4923f1ccde3cbaeb949e3fe32","nombre":"Juan González","telefono":"+54 1 111 111 1111","domicilio":"San Martín 1810"}
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
     * ),
     * 
     * @OA\Get(
     *      tags={"clientes"},
     *      path="/rest/clientes/{id}",
     *      summary="Devuelve el cliente con el id especificado",
     *      description="Dado un id, devuelve el cliente correspondiente a ese id",
     *      @OA\Parameter(
     *          description="ID del cliente buscado",
     *          in="path",
     *          name="id",
     *          required=true,
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Operación realizada con éxito",
     *          @OA\JsonContent(ref="#/components/schemas/Cliente")
     *      ),
     *      @OA\Response(
     *          response="404",
     *          description="ID no encontrado. Probablemente se haya ingresado un ID no válido."
     *      ),
     *      @OA\Response(
     *          response="default",
     *          description="Error inesperado"
     *      )
     * ),
     * 
     * @OA\Put(
     *      tags={"clientes"},
     *      path="/rest/clientes/{id}",
     *      summary="Modifica los datos del cliente con el id especificado",
     *      description="Dado un id, modifica los datos del cliente correspondiente a ese id y lo retorna",
     *      @OA\Parameter(
     *          description="ID del cliente a modificar",
     *          in="path",
     *          name="id",
     *          required=true,
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                @OA\Property(
     *                     property="email",
     *                     type="string",
     *                     format="email"
     *                ),
     *                @OA\Property(
     *                     property="contrasena",
     *                     type="string",
     *                     description="Contraseña codificada en md5"
     *                 ),
     *                 @OA\Property(
     *                     property="nombre",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="telefono",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="domicilio",
     *                     type="string"
     *                 ),
     *                 example={"email":"juan_gonzález@example.com","contrasena":"2af329f4923f1ccde3cbaeb949e3fe32","nombre":"Juan González","telefono":"+54 1 111 111 1111","domicilio":"San Martín 1810"}
     *             )
     *          )
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Operación realizada con éxito",
     *          @OA\JsonContent(ref="#/components/schemas/Cliente")
     *      ),
     *      @OA\Response(
     *          response="404",
     *          description="ID no encontrado. Probablemente se haya ingresado un ID no válido."
     *      ),
     *      @OA\Response(
     *          response="default",
     *          description="Error inesperado"
     *      )
     * ),
     * 
     * @OA\Delete(
     *      tags={"clientes"},
     *      path="/rest/clientes/{id}",
     *      summary="Elimina el cliente con el id especificado",
     *      description="Dado un id, elimina el cliente correspondiente a ese id",
     *      @OA\Parameter(
     *          description="ID del cliente a eliminar",
     *          in="path",
     *          name="id",
     *          required=true,
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Operación realizada con éxito"
     *      ),
     *      @OA\Response(
     *          response="404",
     *          description="ID no encontrado. Probablemente se haya ingresado un ID no válido."
     *      ),
     *      @OA\Response(
     *          response="default",
     *          description="Error inesperado"
     *      )
     * )
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
