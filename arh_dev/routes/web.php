<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class)
    ->name('home');

Route::get('/galeria/{product_name}', [GalleryController::class, 'show']);

Route::post('/messages/validate', [MessagesController::class, 'validateMessageRequest'])
    ->name('message.validate.request');

Route::post('/login/authenticate', [LoginController::class, 'authenticate'])
    ->name('login.authenticate');

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard')
        ->middleware('auth');

