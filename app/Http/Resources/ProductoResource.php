<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Categoria;

class ProductoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $toReturn = [];

        if($this->activo){
            $toReturn = [
                'id' => $this->id,
                'nombre' => $this->nombre,
                'descripcion' => $this->descripcion,
                'precio' => $this->precio,
                'categoria' => Categoria::select('id','nombre')
                    ->where('id', $this->categoria)
                    ->first()
            ];
        }
        
        return $toReturn;
    }
}
