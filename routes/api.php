<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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


// Route::apiresource('/vehicles','App\Http\Controllers\ApiController');



Route::get('vehicles', 'App\Http\Controllers\ApiController@getAllVehicle');
Route::get('vehicles/{id}', 'App\Http\Controllers\ApiController@getVehicle');
Route::post('vehicles', 'App\Http\Controllers\ApiController@createVehicle');
Route::put('vehicles/{id}', 'App\Http\Controllers\ApiController@updateVehicle');
Route::delete('vehicles/{id}','App\Http\Controllers\ApiController@deleteVehicle');