<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'adminstrator', 'namespace' => 'Nexmo\Slider\Http\Controllers', 'middleware' => ['web', 'auth']], function ($router) {
    Route::resource('slider', 'SliderController');

});
