<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoriaResource extends JsonResource
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
                'descripcion' => $this->descripcion
            ];
        }

        return $toReturn;
    }
}
