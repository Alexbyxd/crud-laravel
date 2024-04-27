<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//Route::get('/', function () {
  //  return view('welcome');
//});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');

Route::get('/users', [UserController::class, 'index'])->name('users.index')->middleware('auth');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create')->middleware('auth');
Route::post('/users',[UserController::class,'store'])->name('users.store')->middleware('auth');
Route::get('/users/{id}',[UserController::class,'show'])->name('users.show')->middleware('auth');