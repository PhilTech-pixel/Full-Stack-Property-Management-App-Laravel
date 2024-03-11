<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\TenantController;

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
    return view('login2');
})->name('login2');
Route::get('/dash', function () {
    return view('dash2');
})->name('dash');;
Route::get('/profile', function () {
    return view('profile');
})->name('userprof');;

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');
Route::get('logout', [AuthManager::class, 'logout'])->name('logout');
Route::resource('tenants', TenantController::class);
Route::get('/tenants', [TenantController::class, 'tables'])->name('tenant');
