<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//Route::get('/', function () {
  //  return view('welcome');
//});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');
//Rutas para los usuarios
Route::get('/users', [UserController::class, 'index'])->name('users.index')->middleware('auth');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create')->middleware('auth');
Route::post('/users',[UserController::class,'store'])->name('users.store')->middleware('auth');
Route::get('/users/{id}',[UserController::class,'show'])->name('users.show')->middleware('auth');
Route::get('/users/{id}/update',[UserController::class,'edit'])->name('users.edit')->middleware('auth');
//put es para actualizar datos
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update')->middleware('auth');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('auth');
Route::get('/register', [UserController::class, 'register'])->name('users.register');
Route::post('/register', [UserController::class, 'register_create'])->name('register.store');

//Rutas para los archivos de "my_unit"

Route::get('/my_unit',[FolderController::class,'index'])->name('my_unit.index')->middleware('auth');
Route::post('/my_unit',[FolderController::class,'store'])->name('my_unit.create')->middleware('auth');