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
    return view('welcome');
});

Route::get('/user',[App\Http\Controllers\UserController::class,'index'])->name('/user');
Route::post('/storeuser',[App\Http\Controllers\UserController::class,'storeuser'])->name('/storeuser');

Route::get('/alluser',[App\Http\Controllers\AdminController::class,'alluser'])->name('/alluser');
Route::get('/edituser',[App\Http\Controllers\AdminController::class,'edituser'])->name('/edituser');
Route::post('/deleteuser',[App\Http\Controllers\AdminController::class,'deleteuser'])->name('/deleteuser');