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
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
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
