<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
Route::get('/detail/{id}', [App\Http\Controllers\DetailController::class, 'index'])->name('detail');
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::get('/success', [App\Http\Controllers\CartController::class, 'success'])->name('success');
Route::get('/register/success', [App\Http\Controllers\Auth\RegisterController::class, 'success'])->name('register-success');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/product', [App\Http\Controllers\DashboardProductController::class, 'index'])->name('dashboard-product');
Route::get('/dashboard/product/create', [App\Http\Controllers\DashboardCreateProductController::class, 'index'])->name('dashboard-create-product');
Route::get('/dashboard/product/{id}', [App\Http\Controllers\DashboardProductController::class, 'detail'])->name('dashboard-product-detail');
Route::get('/dashboard/transactions', [App\Http\Controllers\DashboardTransactionsController::class, 'index'])->name('dashboard-transactions');
Route::get('/dashboard/transactions/{id}', [App\Http\Controllers\DashboardTransactionsController::class, 'detail'])->name('dashboard-transactions-detail');
Route::get('/dashboard/settings', [App\Http\Controllers\DashboardSettingsController::class, 'index'])->name('dashboard-settings-store');
Route::get('/dashboard/account', [App\Http\Controllers\DashboardAccountController::class, 'index'])->name('dashboard-account');

// ->middleware(['auth', 'admin'])
Route::prefix('admin')
    ->namespace('App\Http\Controllers\Admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin-dashboard');
        Route::resource('category', CategoryController::class);
    });

Auth::routes();

