<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/usuarios');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/posts/{usuario_id}', function () {
    return view('posts_usuario');
});

Route::resource("usuarios","UsuarioController");
Route::resource("posts","PostsController");
