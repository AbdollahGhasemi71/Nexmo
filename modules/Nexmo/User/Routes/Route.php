<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Nexmo\User\Http\Controllers\HomeController;
use Nexmo\User\Http\Controllers\Auth\VerificationController;
use Nexmo\User\Http\Controllers\Auth\RegisterController;
use Nexmo\User\Http\Controllers\Auth\LoginController;
use Nexmo\User\Http\Controllers\Auth\ForgotPasswordController;
use Nexmo\User\Http\Controllers\Auth\ResetPasswordController;


Route::group(['namespace' => 'Nexmo\User\Http\Controllers', 'middleware' => 'web'], function () {


//   verify Code email
    Route::post('email/verify', [VerificationController::class, 'verify'])->name('verification.verify');
    Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
    Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');

//  reset password code
    Route::get('password/reset', [ForgotPasswordController::class, 'showVerifyCodeRequestForm'])
        ->name('password.request');
    Route::get('password/reset/send', [ForgotPasswordController::class, 'sendVerifyCodeEmail'])
        ->name('password.sendVerifyCodeEmail');
    Route::post('password/reset/check/verify-code', [ForgotPasswordController::class, 'checkVerifyCodeMail'])
        ->name('password.checkVerifyCodeMail')->middleware('throttle:5,1');
    Route::get('password/change', [ResetPasswordController::class, 'showResetForm'])
        ->name('password.showResetForm')->middleware('auth');
    Route::post('password/change', [ResetPasswordController::class, 'reset'])
        ->name('password.update');

//register
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);

//    login

    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);

//    logout
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');


//   home
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
