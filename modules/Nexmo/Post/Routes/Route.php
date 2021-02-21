<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'adminstrator', 'namespace' => 'Nexmo\Post\Http\Controllers', 'middleware' => ['web', 'auth']], function ($router) {
    Route::resource('post', 'PostController');

});
