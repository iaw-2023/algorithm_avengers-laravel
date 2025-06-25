<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Cliente;
use App\Models\DetalleOrden;
use App\Models\Producto;

class CompraResource extends JsonResource
{
    /**
     * 
     * @OA\Post(
     *      tags={"compras"},
     *      path="/rest/compras",
     *      summary="Almacena una nueva compra en el sistema",
     *      description="Almacena una nueva compra en el sistema y la retorna",
     *      @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                @OA\Property(
     *                     property="email_cliente",
     *                     type="string",
     *                     example="jose_sanmartin@example.com"
     *                 ),
     *                 @OA\Property(
     *                     property="detalle",
     *                     type="array",
     *                     @OA\Items(
     *                          type="object",
     *                          @OA\Property(
     *                                property="producto_id",
     *                                ref="#/components/schemas/Producto/properties/id",
     *                                example=2
     *                          ),
     *                          @OA\Property(
     *                              property="talle",
     *                              type="string",
     *                              example="XL",
     *                              description="Talles válidos: 'XS','S','M','L','XL','XXL','XXXL','XXXXL','XXXXXL'"
     *                          ),
     *                          @OA\Property(
     *                               property="cantidad",
     *                               type="integer",
     *                               example=3
     *                          )
     *                      )
     *                 )
     *             )
     *          )
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Operación realizada con éxito",
     *          @OA\JsonContent(ref="#/components/schemas/CompraPost")
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
            'precio' => $this->precio,
            'fecha' => $this->fecha,
            'email_cliente' => $this->email_cliente,
            /* 
                en esta consulta no hice uso de la relaciones de Eloquent
                porque quiero que en la API el detalle sea un objeto con las
                columnas seleccionadas
            */
            'detalle' => DetalleOrden::select('id', 'producto_id', 'talle', 'cantidad')
            ->addSelect(
                ['nombre_producto' => Producto::select('nombre')
                    ->whereColumn('producto_id', 'productos.id')])
                ->where('compra_id',$this->id)
                ->orderBy('nombre_producto')
                ->get()
        ];
    }
}
