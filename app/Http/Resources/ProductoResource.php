<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Categoria;

/**
 * @OA\Info(title="API Manos Argentinas - Tienda Online", version="1.0")
 * 
 * @OA\Server(url="https://algorithm-avengers-laravel.vercel.app")
 */

class ProductoResource extends JsonResource
{
    /**
     * @OA\Get(
     *      tags={"productos"},
     *      path="/rest/productos",
     *      summary="Muestra todos los productos",
     *      description="Muestra la información de todos los productos junto con la información de su categoría asociada",
     *      @OA\Response(
     *          response="200",
     *          description="Operación realizada con éxito",
     *          @OA\JsonContent(
     *                  @OA\Property(
     *                      property="data",
     *                      type="array",
     *                      @OA\Items(
     *                          ref="#/components/schemas/Producto")
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
     *      tags={"productos"},
     *      path="/rest/productos/{id}",
     *      summary="Muestra la información de un producto",
     *      description="Dado un id válido de un producto, muestra la información de este producto junto con la información de su categoría asociada",
     *      @OA\Parameter(
     *          description="ID del producto buscado",
     *          in="path",
     *          name="id",
     *          required=true,
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Operación realizada con éxito",
     *          @OA\JsonContent(ref="#/components/schemas/Producto")
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
                'descripcion' => $this->descripcion,
                'imagen' => $this->imagen,
                'precio' => $this->precio,
                'talles' => $this->talles,
                /* 
                    en esta consulta no hice uso de la relaciones de Eloquent
                    porque quiero que en la API el la categoría sea un objeto con
                    las columnas seleccionadas
                */
                'categoria' => Categoria::select('id','nombre')
                    ->where('id', $this->categoria_id)
                    ->first()
            ];
        }
        
        return $toReturn;
    }
}
