<?php

use Illuminate\Support\Facades\Auth;
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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('orders', App\Http\Controllers\OrderController::class);
Route::resource('patients', App\Http\Controllers\PatientController::class);
Route::resource('doctors', App\Http\Controllers\DoctorController::class);
// Route::resource('users', App\Http\Controllers\UserController::class);


