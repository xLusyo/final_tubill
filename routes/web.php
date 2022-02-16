<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Web View
Route::get('login', [AdminController::class, 'login']);
Route::get('register', [AdminController::class, 'register']);
Route::get('dashboard', [AdminController::class, 'dashboard']);
Route::get('management', [AdminController::class, 'management']);
Route::get('account', [AdminController::class, 'account']);
Route::get('client', [AdminController::class, 'client']);
Route::get('clientreg', [AdminController::class, 'clientreg']);
Route::get('bill', [AdminController::class, 'bill']);

//Backend Routes
Route::post('create', [AdminController::class, 'create'])->name('auth.create');
Route::post('check', [AdminController::class, 'check'])->name('auth.check');
