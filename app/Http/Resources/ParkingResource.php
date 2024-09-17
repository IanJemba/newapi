<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ParkingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            'user_id'    => $this->user_id,
            'vehicle_id' => $this->vehicle_id,
            'zone_id' => $this->zone_id,
            'start_time' => $this->start_time,
            'stop_time' => $this->stop_time,
            'total_price'  => $this->total_price,
            // 'color' => $this->color,
            // 'type'  => $this->type,
        ];
    }
}
