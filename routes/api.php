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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('add', 'App\Http\Controllers\MathController@add');

Route::post('subtract', 'App\Http\Controllers\MathController@subtract');

Route::post('multiply', 'App\Http\Controllers\MathController@multiply');

Route::post('divide', 'App\Http\Controllers\MathController@divide');


Route::get('ReturnHistory', 'App\Http\Controllers\ResponseController@ReturnHistory');
