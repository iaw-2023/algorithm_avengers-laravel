<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClienteResource extends JsonResource
{
    /**
     *
     * @OA\Components(
     *     @OA\Schema(
     *         schema="TokenBearer",
     *         type="object",
     *         @OA\Property(
     *             property="token",
     *             type="string",
     *             example="146|UvgdE5fWpMoRTyTT8IpzSANxLS86wwqztYf2srx8b9217403",
     *             description="Token Bearer de autenticación"
     *         )
     *     )
     * )
     *
     * @OA\Get(
     *      tags={"clientes"},
     *      path="/rest/clientes/compras",
     *      summary="Devuelve las compras del cliente",
     *      description="Devuelve todas las compras realizadas por el cliente actual",
     *      @OA\Response(
     *          response="200",
     *          description="Operación realizada con éxito",
     *          @OA\JsonContent(
     *              @OA\Property(
     *                  property="data",
     *                  type="array",
     *                  @OA\Items(
     *                      ref="#/components/schemas/Compra"
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
     * @OA\Get(
     *      tags={"clientes"},
     *      path="/rest/clientes/perfil",
     *      summary="Devuelve el perfil del cliente",
     *      description="Devuelve los datos del cliente actual",
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
     *      path="/rest/clientes/registrar",
     *      summary="Registra un nuevo cliente en el sistema",
     *      description="Registra un nuevo cliente en el sistema y retorna su Token Bearer de autorización",
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
     *                 example={"email":"juan_gonzález@example.com","contrasena":"12345","nombre":"Juan González","telefono":"+54 1 111 111 1111","domicilio":"San Martín 1810"}
     *             )
     *          )
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Operación realizada con éxito",
     *          @OA\JsonContent(ref="#/components/schemas/TokenBearer")
     *      ),
     *      @OA\Response(
     *          response="default",
     *          description="Error inesperado"
     *      )
     * ),
     * 
     * @OA\Post(
     *      tags={"clientes"},
     *      path="/rest/clientes/login",
     *      summary="Inicia sesión de un cliente",
     *      description="Inicia sesión de un cliente previamente registrado y retorna su Token Bearer",
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
     *                 example={"email":"test@mail.com","contrasena":"12345"}
     *             )
     *          )
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Operación realizada con éxito",
     *          @OA\JsonContent(ref="#/components/schemas/TokenBearer")
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
     * @OA\Post(
     *      tags={"clientes"},
     *      path="/rest/clientes/logout",
     *      summary="Cierra sesión de un cliente",
     *      description="Cierra sesión de un cliente con su sesión previamente iniciada",
     *      @OA\Response(
     *          response="200",
     *          description="Operación realizada con éxito",
     *          @OA\JsonContent(ref="#/components/schemas/TokenBearer")
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
