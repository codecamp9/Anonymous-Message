<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('login', [LoginController::class, 'login']);
Route::post('login', [LoginController::class, 'authenticate']);
Route::get('register', [LoginController::class, 'register_form']);
Route::post('register', [LoginController::class, 'register']);
Route::get('logout', [LoginController::class, 'logout']);

Route::get('profil/{id}', [UserController::class, 'show']);
Route::delete('profil/{id}', [UserController::class, 'destroy']);

Route::get('tambah', [PostsController::class, 'create']);
Route::post('/', [PostsController::class, 'store']);
Route::get('/', [PostsController::class, 'index']);
Route::get('posts/{id}', [PostsController::class, 'show']);
Route::get('posts/{id}/edit', [PostsController::class, 'edit']);
Route::patch('posts/{id}', [PostsController::class, 'update']);
Route::delete('posts/{id}', [PostsController::class, 'destroy']);

Route::post('comment/{id}', [CommentController::class, 'store']);