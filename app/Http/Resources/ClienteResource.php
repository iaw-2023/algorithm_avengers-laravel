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
