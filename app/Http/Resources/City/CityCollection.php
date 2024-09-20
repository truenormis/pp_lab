<?php

namespace App\Http\Resources\City;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
/**
 * @OA\Schema(
 *     schema="CityCollection",
 *     type="array",
 *     @OA\Items(ref="#/components/schemas/City")
 * )
 */
class CityCollection extends ResourceCollection
{

    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection,
        ];
    }
}
