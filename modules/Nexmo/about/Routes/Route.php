<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'adminstrator', 'namespace' => 'Nexmo\about\Http\Controllers', 'middleware' => ['web', 'auth']], function ($router) {
    Route::resource('about', 'AboutController');

});
