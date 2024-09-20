<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductCollection;
use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Store\StoreResource;
use App\Models\Product;
use App\Models\Store;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        return new ProductResource($product);
    }

}
