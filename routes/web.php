<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('public.main');
})->name('index');

Route::prefix('auth')->group(function (){
    Route::get('login', [UserController::class, 'ShowLogin'])->name('ShowLogin');
    Route::post('login', [UserController::class, 'login'])->name('login');
    Route::get('register', [UserController::class, 'ShowRegister'])->name('ShowRegister');
    Route::post('register', [UserController::class, 'register'])->name('register');
    Route::get('logout', [UserController::class, 'Logout'])->name('logout');
});

// Dashboard routes
Route::prefix('dashboard')->middleware('CheckAuth')->group(function() {
    Route::get('/', [UserController::class, 'welcome'])->name('dashboard');
    Route::get('/users', [UserController::class, 'index'])->name('dashboard.users');
    Route::get('/messages', [MessageController::class, 'index'])->name('dashboard.messages');
    Route::get('/new-message', [MessageController::class, 'create'])->name('dashboard.new-message');
    Route::post('/send-message', [MessageController::class, 'store'])->name('dashboard.send-message');
});
