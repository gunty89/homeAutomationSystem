<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\DeviceController;
use App\Models\Device;

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
    return view('auth.login');
});

Route::get('/signIn', [LoginController::class, 'index'])->name('signIn');

Route::get('/signUp', [RegisterController::class, 'index'])->name('signUp');

//Dashboard Route
Route::resource('/dashboard', DashboardController::class)->middleware(['auth', 'verified']);

//User Route
Route::resource('/user', UserController::class);

//Device Route
Route::resource('/device', DeviceController::class);







































