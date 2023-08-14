<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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

Route::post('/auth/create', [AuthController::class, 'create'])
    ->name('auth.create');

Route::get('/dashboard', [DashboardController::class, 'show'])
    ->name('dashboard');

Route::get('/clear/cookies', function(Request $request){
    $cookieName = 'session_token'; // Reemplaza con el nombre de la cookie que deseas eliminar

    $cookie1 = Cookie::forget($cookieName);

    return response('Cookie eliminada')->withCookie($cookie1);
});


