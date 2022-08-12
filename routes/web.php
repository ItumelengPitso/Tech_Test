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

Route::get('/Dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::post('/createUser', [App\Http\Controllers\UserRegisterController::class, 'store'])->name('store');
Route::get('/RegisterUser', [App\Http\Controllers\UserRegisterController::class, 'create'])->name('create');
Route::get('/EditUser/{id}', [App\Http\Controllers\UserRegisterController::class, 'edit'])->name('edit');
Route::post('/UpdatedUser/{id}', [App\Http\Controllers\UserRegisterController::class, 'update'])->name('update');
Route::post('/DeleteUser/{id}', [App\Http\Controllers\UserRegisterController::class, 'destroy'])->name('destroy');


Route::get('sendUserRegistration',[App\Http\Controllers\UserRegisterController::class, 'sendEmailNotification']);
