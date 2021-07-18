<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();




Route::middleware(['auth'])->group(function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//crud Usuarios
Route::get('users', [UserController::class, 'index'])->name('user.index');
Route::get('users/create', [UserController::class, 'create'])->name('user.create');
Route::post('users/store', [UserController::class, 'store'])->name('user.store');
Route::get('users/{id?}/edit',  [UserController::class, 'edit'])->name('users.edit');
Route::put('users/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('users/{id}', [UserController::class, 'destroy'])->name('user.destroy');

//crud Usuarios






});
