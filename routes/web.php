<?php

use App\Http\Controllers\AdiminController;
use App\Http\Controllers\CadastroUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[WelcomeController::class,'index'])->name('welcome');
Route::get('/home',[HomeController::class,'home'])->name('home');


Route::get('/cadastro',[CadastroUserController::class,'index'])->name('cadastro');
Route::post('/store-user',[CadastroUserController::class,'store'])->name('store-user');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/auth',[LoginController::class,'authenticate'])->name('user-login');
Route::post('/logout',[LoginController::class,'logout'])->name('user-logout');

Route::prefix('admin')->group(function(){
    Route::get('/dashboard',[AdiminController::class,'dashboard'])->name('adm.dashboard');
    Route::get('/clients',[AdiminController::class,'clients'])->name('adm.clients');
    Route::get('/pets',[AdiminController::class,'pets'])->name('adm.pets');
    Route::get('/services',[AdiminController::class,'service'])->name('adm.service');
    Route::get('/mensage',[AdiminController::class,'mensage'])->name('adm.mensage');
    Route::get('/doctors',[AdiminController::class,'doctors'])->name('adm.doctors');
    Route::get('/finance',[AdiminController::class,'finance'])->name('adm.finance');
});








