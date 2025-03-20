<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, 'index'])->name('user.index');

Route::get('/create-user', [UserController::class, 'create'])->name('user.create'); 
#create-user é nome da url e user.create é o endereço no código fonte.
#para criar o metodo UserController vc segura o ctrl+click do mouse

Route::get('/sobre', [UserController::class, 'sobre'])->name('user.sobre'); 
#Os dados do formulario estão sendo enviados para user-store pelo action="user-store"
Route::post('/store', [UserController::class, 'store'])->name('user-store'); 


 