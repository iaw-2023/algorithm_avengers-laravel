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
     * @OA\Get(
     *      tags={"compras"},
     *      path="/rest/compras",
     *      summary="Devuelve todos las compras",
     *      description="Devuelve todas las compras efectuadas hasta el momento",
     *      @OA\Response(
     *          response="200",
     *          description="Operación realizada con éxito",
     *          @OA\JsonContent(ref="#/components/schemas/Compra")
     *      ),
     *      @OA\Response(
     *          response="default",
     *          description="Error inesperado"
     *      )
     * ),
     * 
     * @OA\Get(
     *      tags={"compras"},
     *      path="/rest/compras/{id}",
     *      summary="Devuelve la compra con el id especificado",
     *      description="Dado un id, devuelve la compra correspondiente a ese id",
     *      @OA\Parameter(
     *          description="ID de la compra buscada",
     *          in="path",
     *          name="id",
     *          required=true,
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\Response(
     *          response="200",
     *          description="Operación realizada con éxito",
     *          @OA\JsonContent(ref="#/components/schemas/Compra")
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
            'precio' => $this->precio,
            'fecha' => $this->fecha,
            'direccion_entrega' => $this->direccion_entrega,
            'detalle' => DetalleOrden::select('id', 'id_producto', 'cantidad')
            ->addSelect(
                ['nombre_producto' => Producto::select('nombre')
                    ->whereColumn('id_producto', 'productos.id')])
                ->where('id_compra',$this->id)
                ->orderBy('nombre_producto')
                ->get(),
            'cliente' => Cliente::select('id','email', 'nombre')
                ->where('id', $this->id_cliente)->first()
        ];;
    }
}
