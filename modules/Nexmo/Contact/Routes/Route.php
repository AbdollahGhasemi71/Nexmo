<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'adminstrator', 'namespace' => 'Nexmo\Contact\Http\Controllers', 'middleware' => ['web', 'auth']], function ($router) {
    Route::resource('contact', 'ContactController');

});
