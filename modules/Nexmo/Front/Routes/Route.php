<?php

use Illuminate\Support\Facades\Route;
use Nexmo\Front\Http\Controllers\HomeController;

Route::group(['namespace' => 'Nexmo\Front\Http\Controllers', 'middleware' => 'web'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.page');
    Route::get('/product/{id}', [HomeController::class, 'product'])->name('home.product');
    Route::get('/post/{id}', [HomeController::class, 'post'])->name('home.post');
    Route::post('/contect', [HomeController::class, 'contact'])->name('contect.ajax');

});
