<?php

use Illuminate\Http\Request;
use App\Meal;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware("cors")->get('/meals',function (){
   return Meal::all();
});

Route::middleware("cors")->get('/meals/random',function (){
    $meals = Meal::all();
    $randomMeal= $meals[rand(0,count($meals)-1)];

    return $randomMeal;
});
