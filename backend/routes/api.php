<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('api')->get('/sets', 'Api\SetController@index');
// Route::middleware('api')->patch('/sets/{set}/sound/{sound}/volume', 'Api\SoundController@changeVolume');
Route::middleware('api')->patch('/sound/change-volume', 'Api\SoundController@changeVolume');
