<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
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

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('login');
    })->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
});

Route::middleware('auth')->group(function () {
    // Logout Route
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    // Dashboard Route
    Route::get('/dashboard', [ProductController::class, 'index'])->name('dashboard');

    // Product Management Routes
    Route::get('/dashboard/create-product', [ProductController::class, 'create'])->name('dashboard.product.create');
    Route::post('/dashboard/products', [ProductController::class, 'store'])->name('dashboard.product.store');
    Route::get('/dashboard/edit-product/{id}', [ProductController::class, 'edit'])->name('dashboard.edit-product');
    Route::put('/dashboard/update-product/{id}', [ProductController::class, 'update'])->name('dashboard.product.update');
    Route::delete('/dashboard/delete-product/{id}', [ProductController::class, 'destroy'])->name('dashboard.product.destroy');

    // Profile Route
    Route::get('/profile', function () {
        return view('dashboard.profil');
    })->name('dashboard.profile');

    Route::get('/dashboard/products/export', [ProductController::class, 'export'])->name('dashboard.product.export');


});
