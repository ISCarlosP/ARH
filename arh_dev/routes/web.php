<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductsImagesController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\UsersController;

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

Route::post('/check/message', [DashboardController::class, 'checkMessage'])
    ->name('check.message');

Route::get('/loggout', function (Request $request) {
    $cookie1 = Cookie::forget('session_token');
    return response('Cookie eliminada')->withCookie($cookie1);
})
    ->name('session.loggout');

Route::post('/users/create', [UsersController::class, 'create'])
    ->name('users.create');

Route::post('/users/destroy', [UsersController::class, 'destroy'])
    ->name('users.destroy');

Route::post('/users/update', [UsersController::class, 'update'])
    ->name('users.update');

Route::post('/banner/update', [DashboardController::class, 'updateBannerImage'])
    ->name('banner.update');

Route::post('/product/update', [ProductsController::class, 'updateProductImage'])
    ->name('product.update');

Route::post('/gallery/delete', [ProductsImagesController::class, 'delete'])
    ->name('gallery.delete');

Route::post('/gallery/create', [ProductsImagesController::class, 'create'])
    ->name('gallery.create');


