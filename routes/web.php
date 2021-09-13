<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//
Auth::routes();

/**
 * Verify User Email Message Page
 * @name 'verification.notice'
 */
Route::get('/email/verify', [App\Http\Controllers\Auth\VerificationController::class, 'notice'])
    ->name('verification.notice');

/**
 * Resend User Email Verification    
 * @name
 */
Route::post('/email/verification-notification', [App\Http\Controllers\Auth\VerificationController::class, 'resend'])
    ->name('verification.resend');

/**
 * Verify User Email Verification
 * @name 'verification.verify'
 * @params int:$id, string:$hash
 */
Route::get('/email/verify/{id}/{hash}', [App\Http\Controllers\Auth\VerificationController::class, 'verifyEmail'])
    ->name('verification.verify');

/**
* Homepage
* @name 'home'
*/
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/**
* Profile
* @name 'dashboard'
*/
Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'index'])
    ->middleware('verified')
    ->name('dashboard');

/**
* Account
* @prefix 'account'
* @middleware 'auth'
* @as 'account'.
*/
Route::group(['prefix'=>'account', 'middleware'=>['verified'], 'as'=>'account.'],function(){

    /**
    * Account Overview
    * @name 'account.index'
    */
    Route::get('/',[App\Http\Controllers\Account\OverviewController::class, 'index'])
        ->name('index');

    /**
    * Profile
    * @name 'account.profile.index'
    */
    Route::get('profile',[App\Http\Controllers\Account\ProfileController::class, 'index'])
        ->name('profile.index');

    /**
    * Profile Update
    * @name 'account.profile.update'
    */
    Route::post('profile',[App\Http\Controllers\Account\ProfileController::class, 'store'])
        ->name('profile.store');


    /**
    * Password
    * @name 'account.password.index'
    */
    Route::get('password',[App\Http\Controllers\Account\PasswordController::class, 'index'])
        ->name('password.index');

    /**
    * Password Update
    * @name 'account.password.update'
    */
    Route::post('password',[App\Http\Controllers\Account\PasswordController::class, 'store'])
        ->name('password.store');           
});