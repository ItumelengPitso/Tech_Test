<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/user_register', [App\Http\Controllers\HomeController::class, 'index'])->name('user_register');
Route::post('/createUser', [App\Http\Controllers\UserRegisterController::class, 'store'])->name('store');

