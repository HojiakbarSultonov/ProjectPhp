<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

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
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('service', [PageController::class, 'service'])->name('service');
Route::get('project', [PageController::class, 'project'])->name('project');
Route::get('contact', [PageController::class, 'contact'])->name('contact');

//Route::get('index', [PostController::class, 'index'])->name('posts.index');
//Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
//Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
//Route::post('posts/create', [PostController::class, 'store'])->name('posts.store');
//Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
//Route::put('posts/{post}/edit', [PostController::class, 'update'])->name('posts.update');
//Route::delete('posts/{post}/delete', [PostController::class, 'delete'])->name('posts.delete');

Route::resource('posts', PostController::class);


//Route::get('/welcome', [PageController::class, 'welcome']);
//Route::view('salom', 'salom');
//
//Route::get('/users',[UserController::class, 'index']);
//Route::get('/users/create',[UserController::class, 'create']);
//Route::get('/users/{user}',[UserController::class, 'show']);
//Route::get('/users/{user}/edit',[UserController::class, 'edit']);
//Route::post('/user-create', [UserController::class, 'store']);




