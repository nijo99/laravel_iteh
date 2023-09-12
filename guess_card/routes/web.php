<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Display the login form
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Handle the form submission
Route::post('/login', [LoginController::class, 'login'])->name('login.attempt');

// Handle logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
