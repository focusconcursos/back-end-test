<?php

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

Route::group(['prefix' => "v1.0"], function ()
{
    Route::resource('product', 'ProductController');

    Route::group(["prefix" => 'product', "as" => "product."], function ()
    {
        Route::get("/{product}/calcular-frete/{origem}/para/{destino}/quantidade/{quantidade}", 'ProductController@getFreight');
    });

});
