<?php

use Illuminate\Support\Facades\Route;
use Nexmo\Admin\Http\Controllers\PanelController;

Route::group(['prefix' => 'adminstrator', 'namespace' => 'Nexmo\Admin\Http\Controllers', 'middleware' => ['web', 'auth']], function ($router) {
    Route::resource('panel', 'PanelController');
    Route::get('panel/show/data', [PanelController::class, 'allData'])->name('panel.allData');
  

});

