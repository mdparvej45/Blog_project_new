<?php

use App\Http\Controllers\frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Frontend Home route 
Route::get('/',[FrontendHomeController::class, 'index'])->name('frontend.index');
Route::get('/login-page',[FrontendHomeController::class, 'login'])->name('backend.login');

Auth::routes();
//Backend Homecontroller
Route::post('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('login');
