<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


//route for login and register
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [LoginAuthController::class, 'login']);

Route::group(['middleware' => ['auth', 'check_role:user']], function () {
    Route::get('user', fn() => 'Halaman User');
});


Route::group(['middleware' => ['auth', 'check_role:admin,user']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
});

//route for dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
//route for logout
Route::get('/logout', [LoginAuthController::class, 'logout'])->name('logout');



Route::get('/register', function () {
    return view('auth.register');
})->name('register');
