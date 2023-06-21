<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoriaResource extends JsonResource
{
    /**
     * @OA\Get(
     *      tags={"categorías"},
     *      path="/rest/categorias",
     *      summary="Devuelve todas las categorías",
     *      description="Devuelve todas las categorías posibles para los productos",
     *      @OA\Response(
     *          response="200",
     *          description="Operación realizada con éxito",
     *          @OA\JsonContent(
     *              @OA\Property(
     *                  property="data",
     *                  type="array",
     *                  @OA\Items(
     *                      ref="#/components/schemas/Categoria"
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
     *      tags={"categorías"},
     *      path="/rest/categorias/{id}",
     *      summary="Devuelve la categoría con el id especificado",
     *      description="Dado un id, devuelve la categoría correspondiente a ese id",
     *      @OA\Parameter(
     *          description="ID de la categoría buscada",
     *          in="path",
     *          name="id",
     *          required=true,
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Operación realizada con éxito",
     *          @OA\JsonContent(ref="#/components/schemas/Categoria")
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
        $toReturn = [];

        if($this->activo){
            $toReturn = [
                'id' => $this->id,
                'nombre' => $this->nombre,
                'descripcion' => $this->descripcion
            ];
        }

        return $toReturn;
    }
}
