<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;


Route::get('/', function () {
    $posts = Post::latest()->get();
    return view('posts.index', ['posts' => $posts]);
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/register', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);

Route::get('/users/{user}/edit', [UserController::class, 'edit']);
Route::put('/users/{user}', [UserController::class, 'update']);


Route::get('/posts', [PostsController::class, 'index']);
Route::post('/', [PostsController::class, 'store']);
Route::get('/posts/create', [PostsController::class, 'create']);
Route::get('/posts/{post}/edit', [PostsController::class, 'edit']);
Route::put('/posts/{post}', [PostsController::class, 'update']);
Route::delete('/posts/{post}', [PostsController::class, 'destroy']);
Route::get('/posts/{post}', [PostsController::class, 'show']);


Route::get('/{user:name}', function (User $user) {

    return view('users.show', [
        'posts' => $user->posts, 
        'user' => $user, 

    ]);
});

