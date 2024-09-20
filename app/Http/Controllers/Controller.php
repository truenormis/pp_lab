<?php

namespace App\Http\Controllers;
/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="RGR Doc",
 *      description="RGR Doc",
 *      @OA\Contact(
 *          url="https://t.me/true_normis"
 *      ),

 * )
 *
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="Demo API Server"
 * )
 *
 * @OA\Tag(
 *     name="Cities",
 *     description="API Endpoints of Cities"
 * )
 * @OA\SecurityScheme(
 *    securityScheme="bearerAuth",
 *    type="http",
 *    scheme="bearer",
 *    bearerFormat="JWT",
 *    description="JWT Authorization header using the Bearer scheme."
 *  )
 */
abstract class Controller
{

}
