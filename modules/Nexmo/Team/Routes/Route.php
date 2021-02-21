<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'adminstrator', 'namespace' => 'Nexmo\Team\Http\Controllers', 'middleware' => ['web', 'auth']], function ($router) {
    Route::resource('team', 'TeamController');

});
