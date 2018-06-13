<?php

Route::group(['middleware' => 'web', 'prefix' => 'outside', 'namespace' => 'Modules\Outside\Http\Controllers'], function()
{
    Route::get('/index', 'OutsideController@index');
    Route::get('/about','OutsideController@about');
    Route::get('/product','OutsideController@product');
    Route::get('/product-detail','OutsideController@productDetail');
});
