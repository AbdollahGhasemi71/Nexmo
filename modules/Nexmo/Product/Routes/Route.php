<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'adminstrator', 'namespace' => 'Nexmo\Product\Http\Controllers', 'middleware' => ['web', 'auth']], function ($router) {
    Route::resource('product', 'ProductController');

});
