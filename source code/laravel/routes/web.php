<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MakeController;

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

Route::get('/', [HomeController::class, 'index']) 
    ->name('home');

Route::get('/make', [MakeController::class, 'index']) 
    ->name('Make');

Route::get('/login', [LoginController::class, 'index'])
    ->name('login');

Route::get('/register', [RegisterController::class, 'index'])
    ->name('register');

Route::resource('home',  App\Http\Controllers\JadwalBelajarController::class);


Auth::routes();
