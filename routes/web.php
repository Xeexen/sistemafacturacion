<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('login');
});


Route::get('/registro', [RegisterController::class,'index']);
Route::post('/registro', [RegisterController::class,'store']);

Route::post('/dashboard', [PostController::class,'index']);
Route::get('/dashboard', [PostController::class,'index']);
Route::post('/logout', [LogoutController::class,'store']); 

Route::get('/{user:nombre}', [PostController::class,'index']);