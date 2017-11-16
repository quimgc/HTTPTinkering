<?php

use Illuminate\Http\Request;

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


Route::get('/user', function (Request $request) {
    return [
        'headers' =>['PROVA' => $request->header('PROVA'), 'HEADER1' => $request->header('HEADER1')],
        'name' => 'pepe',
        'email' => 'pepe@pepe.com'

    ];
})->middleware('auth:api');

Route::get('/passport/user', function (Request $request) {
    return [
        'headers' =>['PROVA' => $request->header('PROVA'), 'HEADER1' => $request->header('HEADER1')],
        'name' => 'pepe',
        'email' => 'pepe@pepe.com'

    ];
})->middleware('auth:api_passport');
