<?php

Route::group(['middleware' => 'web', 'prefix' => 'inside', 'namespace' => 'Modules\Inside\Http\Controllers'], function()
{
    Route::get('/index', 'InsideController@index');
});
