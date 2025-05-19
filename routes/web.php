<?php

use App\Http\Controllers\CadastroUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::get('/cadastro',[CadastroUserControllerr::class,'create'])->name('cadastro');
