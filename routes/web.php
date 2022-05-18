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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

//Octa Login routes
Route::get('login/okta', [App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider'])->name('login-okta');
Route::get('login/okta/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);

// Routes accessible after login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/personal-home', [App\Http\Controllers\HomeController::class, 'personal'])->name('personal-home');

