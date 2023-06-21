<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\isAdminMiddleware;
use Inertia\Inertia;

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

Route::get('/', [LandingController::class, 'index']);
Route::get('/auth', function () {
    return Inertia::render('Auth/Login', []);
});
Route::get('/auth/login', [UserController::class, 'login']);

Route::group(['middleware' => [isAdminMiddleware::class]], function () {
    Route::get('/admin/products', [ProductController::class, 'index']);
    Route::get('/admin/products/add', function () {
        return Inertia::render('Product/Create', []);
    });
    Route::post('/admin/products/add', [ProductController::class, 'create']);
    Route::get('/admin/products/delete/{product}', [ProductController::class, 'destroy']);
    Route::get('/admin/products/{product}', [ProductController::class, 'show']);
    Route::post('/admin/products/{product}', [ProductController::class, 'update']);
});
