<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FacebookSocialiteController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::group(['prefix' => '{language}'], function () {
    Route::get('/home', function () {
        return view('layouts.app');
    })->name('home');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth', 'admin');

    // // Show Create Form
    Route::get('/dashboard/products/create', [DashboardController::class, 'showCreate'])->name('dashboard.createProduct')->middleware('auth', 'admin');
    Route::get('/dashboard/products', [DashboardController::class, 'showAllProducts'])->name('dashboard.products')->middleware('auth','admin');
    Route::get('/dashboard/products/{id}', [DashboardController::class, 'edit'])->name('dashboard.editProduct')->middleware('auth','admin');
    Route::put('/dashboard/products/{id}', [ProductsController::class, 'update'])->name('dashboard.updateProduct')->middleware('auth','admin');
    Route::delete('/dashboard/products/{id}', [ProductsController::class, 'destroy'])->name('dashboard.deleteProduct')->middleware('auth','admin');

    // auth 
    Route::get('/account', [UserController::class, 'index'])->name('account');
    Route::get('/register', [UserController::class, 'create'])->name('register')->middleware('guest');
    Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
    Route::post('/users', [UserController::class, 'store'])->name('create.user');
    Route::post('/users/authenticate', [UserController::class, 'authenticate'])->name('login.user');

    Route::get('auth/facebook', [FacebookSocialiteController::class, 'redirectToFB'])->name('login.facebook');
    Route::get('callback/facebook', [FacebookSocialiteController::class, 'handleCallback']);
    // Log User Out
    Route::post('/logout', [UserController::class, 'logout'])->name('logout.user')->middleware('auth');

    Route::post('/products', [ProductsController::class, 'store'])->name('product.create');
    Route::get('/products', [ProductsController::class, 'index'])->name('products');
});
