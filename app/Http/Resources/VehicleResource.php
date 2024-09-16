<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);

        return [
            'id'    => $this->id,
            'brand' => $this->brand,
            'model' => $this->model,
            // 'year'  => $this->year,
            // 'color' => $this->color,
            // 'type'  => $this->type,
        ];
    }
}
