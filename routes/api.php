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

Route::group(["namespace" => "Api", "as" => "api."], function () {

    Route::post('login', 'AuthController@login')->name('login');

    Route::group(['middleware' => ['apiJwt']], function(){

        Route::post('logout', 'AuthController@logout')->name('logout');
        Route::apiResource("/product", "ProductController");

    });

});
