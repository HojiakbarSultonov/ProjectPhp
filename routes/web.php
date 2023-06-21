<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'main']);
//
//Route::get('/users',[UserController::class, 'index']);
//Route::get('/users/create',[UserController::class, 'create']);
//Route::get('/users/{user}',[UserController::class, 'show']);
//Route::get('/users/{user}/edit',[UserController::class, 'edit']);
//Route::post('/user-create', [UserController::class, 'store']);




