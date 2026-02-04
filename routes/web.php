<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () { return view('admin.dashboard'); });
});

Route::middleware(['auth', 'role:petugas'])->group(function () {
    Route::get('/kasir', function () { return view('kasir.dashboard'); });
});
