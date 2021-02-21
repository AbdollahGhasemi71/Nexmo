<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'adminstrator', 'namespace' => 'Nexmo\Info\Http\Controllers', 'middleware' => ['web', 'auth']], function ($router) {
    Route::resource('info', 'InfoController');

});
