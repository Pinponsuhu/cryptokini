<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/contact', function () {
    return view('contact-us');
});
Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'process']);
Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'process']);
Route::post('/logout',LogoutController::class)->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/start-trade', function () {
    return view('Dashboard.start-trade');
})->name('trade');
Route::get('/transactions', function () {
    return view('Dashboard.transaction');
})->name('transactions');
Route::get('/wallet', [DashboardController::class,'wallet'])->name('wallet');
Route::get('/calculator', function () {
    return view('Dashboard.calculator');
})->name('calculator');
Route::get('/settings', function () {
    return view('Dashboard.settings');
})->name('settings');
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});