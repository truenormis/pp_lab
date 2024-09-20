<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductCollection;
use App\Http\Resources\Store\StoreResource;
use App\Models\Store;

class StoreController extends Controller
{
    public function show(Store $store)
    {
        return new StoreResource($store);
    }
    public function products(Store $store)
    {
        return new ProductCollection($store->products);
    }
}
