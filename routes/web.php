<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\WarrantyController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;


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

// Public routes
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Registration Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Password Reset Routes
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// Authentication routes
Auth::routes();

// Routes for Admin
Route::middleware(['auth', 'admin'])->group(function () {
    // Admin-only pages
    Route::middleware(['auth'])->get('/home', function () {
        return view('pages.home');
    })->name('home');
    Route::get('/stock', [StockController::class, 'index'])->name('stock.index');
    Route::get('/stock/create', [StockController::class, 'create'])->name('stock.create');
    Route::post('/stock', [StockController::class, 'store'])->name('stock.store');
    Route::get('/stock/{productCode}/edit', [StockController::class, 'edit'])->name('stock.edit');
    Route::put('/stock/{productCode}', [StockController::class, 'update'])->name('stock.update');
    Route::delete('/stock/{productCode}', [StockController::class, 'destroy'])->name('stock.destroy');        
    Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');
    Route::get('/warranty', [WarrantyController::class, 'index'])->name('warranty.index');
});

// Routes for authenticated users
Route::middleware(['auth'])->group(function () {
    // Shared functionality for authenticated users
    Route::get('/shop', [PagesController::class, 'shop'])->name('shop');
    Route::get('/home', function () {
        return view('pages.home');
    });
});
