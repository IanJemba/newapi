<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ZoneResource extends JsonResource
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
            'name' => $this->name,
            'price_per_hour' => $this->price_per_hour,
            // 'year'  => $this->year,
            // 'color' => $this->color,
            // 'type'  => $this->type,
        ];
    }
}
