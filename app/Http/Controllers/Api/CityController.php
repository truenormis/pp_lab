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
    /**
     * @OA\Get(
     *      path="/cities",
     *      operationId="getCitiesList",
     *      tags={"Cities"},
     *      summary="Get list of cities",
     *      description="Returns list of cities",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/CityCollection")
     *       )
     * )
     */
    public function index()
    {
        return new CityCollection(City::all());
    }

    /**
     * @OA\Post(
     *      path="/cities",
     *      operationId="storeCity",
     *      tags={"Cities"},
     *      summary="Create a new city",
     *      description="Stores a new city",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(
     *              @OA\Property(property="name", type="string", example="New York")
     *          )
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="City created successfully"
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Validation error"
     *      ),
     *      security={{ "bearerAuth":{} }}
     * )
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
        City::create($validated);
    }

    /**
     * @OA\Get(
     *      path="/cities/{id}",
     *      operationId="getCityById",
     *      tags={"Cities"},
     *      summary="Get a specific city",
     *      description="Returns a single city",
     *      @OA\Parameter(
     *          name="id",
     *          description="City ID",
     *          required=true,
     *          in="path",
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/CityResource")
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="City not found"
     *      )
     * )
     */
    public function show(City $city)
    {
        return new CityResource($city);
    }

    /**
     * @OA\Put(
     *      path="/cities/{id}",
     *      operationId="updateCity",
     *      tags={"Cities"},
     *      summary="Update an existing city",
     *      description="Updates the details of an existing city",
     *      security={{ "bearerAuth":{} }},
     *      @OA\Parameter(
     *          name="id",
     *          description="City ID",
     *          required=true,
     *          in="path",
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(
     *              @OA\Property(property="name", type="string", example="San Francisco")
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="City updated successfully"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="City not found"
     *      ),
     *      @OA\Response(
     *          response=422,
     *          description="Validation error"
     *      )
     * )
     */
    public function update(Request $request, City $city)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
        $city->update($validated);
    }

    /**
     * @OA\Delete(
     *      path="/cities/{id}",
     *      operationId="deleteCity",
     *      tags={"Cities"},
     *      summary="Delete a city",
     *      security={{ "bearerAuth":{} }},
     *      description="Deletes a city by ID",
     *      @OA\Parameter(
     *          name="id",
     *          description="City ID",
     *          required=true,
     *          in="path",
     *          @OA\Schema(type="integer")
     *      ),
     *      @OA\Response(
     *          response=204,
     *          description="City deleted successfully"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="City not found"
     *      )
     * )
     */
    public function destroy(City $city)
    {
        $city->delete();
    }

    public function stores(City $city)
    {
        return new StoreCollection($city->stores()->get());
    }
}
