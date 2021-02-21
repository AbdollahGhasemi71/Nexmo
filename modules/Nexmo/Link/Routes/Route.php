<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'adminstrator', 'namespace' => 'Nexmo\Link\Http\Controllers', 'middleware' => ['web', 'auth']], function ($router) {
    Route::resource('link', 'LinkController');

});
