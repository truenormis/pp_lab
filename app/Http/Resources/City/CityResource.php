<?php

namespace App\Http\Resources\City;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
{
    /**
     * @OA\Schema(
     *     schema="CityResource",
     *     type="object",
     *     allOf={
     *         @OA\Schema(ref="#/components/schemas/City")
     *     }
     * )
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}
