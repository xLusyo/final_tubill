<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminControl;

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
Route::get('clientreg', [AdminController::class, 'clientreg']);
Route::get('dashboard', [AdminController::class, 'dashboard']);
Route::get('management', [AdminControl::class, 'management']);
Route::get('account', [AdminController::class, 'account']);
Route::get('client', [AdminController::class, 'client']);
<<<<<<< HEAD
Route::get('clientreg', [AdminController::class, 'clientreg']);
Route::get('bill', [AdminController::class, 'bill']);

//Backend Routes
Route::post('create', [AdminController::class, 'create'])->name('auth.create');
Route::post('check', [AdminController::class, 'check'])->name('auth.check');
=======
Route::get('create', [AdminControl::class, 'create']);
Route::get('edit', [AdminControl::class, 'edit']);

//Backend Routes
Route::post('clients', [AdminControl::class])->name('clients.store');
Route::resource('clients', AdminControl::class);
>>>>>>> 11ae30fa8687f0fd04c2635f439488e526a3d8f5
