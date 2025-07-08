<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\LoginAuthController;
use App\Http\Controllers\VerificationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


//route for login and register
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', [LoginAuthController::class, 'login']);

//route for dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

//route for dashboard admin
Route::group(['middleware' => ['auth', 'check_role:admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
});

//route for dashboard user
Route::group(['middleware' => ['auth', 'check_role:user', 'check_status']], function () {
    Route::get('/dashboard_user', [DashboardUserController::class, 'index']);
});

//route for verify
Route::group(['middleware' => ['auth', 'check_role:user']], function () {
    Route::get('/verify', [VerificationController::class, 'index']);
    Route::post('/verify', [VerificationController::class, 'store']);
    Route::get('/verify/{unique_id}', [VerificationController::class, 'show']);
    Route::put('/verify/{unique_id}', [VerificationController::class, 'update']);
});

//route for logout
Route::get('/logout', [LoginAuthController::class, 'logout'])->name('logout');



Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', [LoginAuthController::class, 'register']);


Route::get('/auth-google-redirect', [LoginAuthController::class, 'google_redirect']);
Route::get('/auth-google-callback', [LoginAuthController::class, 'google_callback']);
