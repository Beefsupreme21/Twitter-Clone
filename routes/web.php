<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;


Route::get('/', function () {
    $posts = Post::all();
    return view('posts.index', ['posts' => $posts]);
});

Route::get('/register', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/posts', [PostsController::class, 'index']);
Route::post('/posts', [PostsController::class, 'store']);
Route::get('/posts/create', [PostsController::class, 'create']);
Route::get('/posts/{post}/edit', [PostsController::class, 'edit']);
Route::put('/posts/{post}', [PostsController::class, 'update']);
Route::delete('/posts/{post}', [PostsController::class, 'destroy']);

Route::get('/{user:name}', function (User $user) {
    return view('posts.index', [
        'posts' => $user->posts
    ]);
});