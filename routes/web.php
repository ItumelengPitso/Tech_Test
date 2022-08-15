<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegisterController;
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
    return view('auth.login');
});

Auth::routes();

Route::resource('/Dashboard', App\Http\Controllers\HomeController::class);

Route::resource('UserRegistrations', App\Http\Controllers\UserRegisterController::class)->except(['show']);
Route::post('/UpdatedUser/{id}', [App\Http\Controllers\UserRegisterController::class, 'update'])->name('update');
Route::get('/DeleteUser/{id}', [App\Http\Controllers\UserRegisterController::class, 'destroy'])->name('destroy');

