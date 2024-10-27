<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // Pastikan 'index' merujuk ke file 'index.blade.php'
})->name('home');


Route::get('/login', function () {
    return view('index'); // Tampilkan halaman form login dan register
})->name('login.form'); // Route GET untuk menampilkan form

Route::get('/register', function () {
    return view('register'); // pastikan ada file `register.blade.php` di `resources/views`
})->name('register.form');


Route::post('/login', [AuthController::class, 'login'])->name('login'); // Route POST untuk memproses login
Route::post('/register', [AuthController::class, 'register'])->name('register'); // Route POST untuk memproses register
