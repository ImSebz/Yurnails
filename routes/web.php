<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormResponseController;

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
});

Route::get('/form', [FormResponseController::class, 'create']);
Route::post('/form', [FormResponseController::class, 'store']);