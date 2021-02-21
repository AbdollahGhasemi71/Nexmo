<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'adminstrator', 'namespace' => 'Nexmo\Social\Http\Controllers', 'middleware' => ['web', 'auth']], function ($router) {
    Route::resource('social', 'SocialController');

});
