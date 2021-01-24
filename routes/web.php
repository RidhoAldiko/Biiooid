<?php

use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('landingpage');
});

Route::get('/harga', function () {
    return view('price');
});

Auth::routes(['verify' => true]);

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

//Route Group with users login access
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'], function () {
    })->name('dashboard');
});
