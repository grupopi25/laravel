<?php

use App\Http\Controllers\CadastroUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/home',[HomeController::class,'home'])->name('home');

Route::get('/',[WelcomeController::class,'index'])->name('welcome');

Route::get('/cadastro',[CadastroUserController::class,'index'])->name('cadastro');
Route::post('/store-user',[CadastroUserController::class,'store'])->name('store-user');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/auth',[LoginController::class,'authenticate'])->name('user-login');
Route::post('/logout',[LoginController::class,'logout'])->name('user-logout');





