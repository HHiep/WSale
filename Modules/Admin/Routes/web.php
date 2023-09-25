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
Route::prefix('admin')->name('admin.')->group(function () {
    Route::prefix('authenticate')->name('authenticate.')->group(function () {
        Route::get('login', 'AuthenticateController@login')->name('login');
        Route::post('handle-login', 'AuthenticateController@handleLogin')->name('handle-login');
    });

    Route::get('', 'DashboadController@index')->name('home');
});
