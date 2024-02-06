<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
 
Route::get('/', function() {
    return view('home');
})->name('home');

 
Route::get('/about', function() {
    return view('about');
})->name('about');

 
Route::get('/services', function() {
    return view('services');
})->name('services');

Route::get('/pricing', function() {
    return view('pricing');
})->name('pricing');

Route::get('/contact', function() {
    return view('contacts');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/posts', function () {
    return view('posts.index');
});
