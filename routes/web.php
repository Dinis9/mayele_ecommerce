<?php

use Illuminate\Support\Facades\Route;
//Above code was added by Eng. Dinis Graça Pedro
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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


//Frontend
Route::get('/', [HomeController::class, 'index']);



//Backend
Route::get('/backend', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'dashboard']);
