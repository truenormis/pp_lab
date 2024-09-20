<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CityCollection;
use App\Http\Resources\CityResource;
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
}
