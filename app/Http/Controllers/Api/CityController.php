<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\City\CityCollection;
use App\Http\Resources\City\CityResource;
use App\Http\Resources\Store\StoreCollection;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        return new CityCollection(City::all());
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
        City::create($validated);
    }
    public function show(City $city){
        return new CityResource($city);
    }
    public function update(Request $request, City $city){
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
        $city->update($validated);
    }
    public function destroy(City $city){
        $city->delete();
    }

    public function stores(City $city)
    {
        return new StoreCollection($city->stores()->get());
    }
}
