<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->name('dashboard_profile');
Route::get('/dashboard/post', [DashboardController::class, 'post'])->name('dashboard_post');

Route::post('/dashboard', [DashboardController::class, 'store_post'])->name('store_post');

// Route::post('/dashboard', [DashboardController::class, 'update_user'])->name('update_user');



Route::post('/logout', [LogoutController::class, 'store'])->name('logout');


Route::get('/posts', [PostController::class, 'index'])->name('posts');


