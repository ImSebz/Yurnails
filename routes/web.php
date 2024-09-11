<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormResponseController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminDashboardController;

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
    return view('landing');
})->name('home');

Route::get('/form', [FormResponseController::class, 'create']);
Route::post('/form', [FormResponseController::class, 'store']);

Route::get('/admin/register', function () {
    return view('admin.register');
});
Route::post('/admin/register', [AdminRegisterController::class, 'register'])->name('admin.register.submit');

Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');

Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->middleware('admin.auth')->name('admin.dashboard');
