<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserPostOSSController;

// Ruta principal redirige a usuarios
Route::get('/', function () {
    return redirect()->route('users.index');
});

// CE 7b, 7c: Mostrar todos los usuarios con sus publicaciones (con carga ansiosa)
Route::get('/users', [UserPostOSSController::class, 'index'])->name('users.index');

// CE 7b: Mostrar un usuario específico con sus publicaciones
Route::get('/users/{id}', [UserPostOSSController::class, 'show'])->name('users.show');

// CE 7b, 7d: Consulta compleja - Usuarios que tienen al menos una publicación
Route::get('/users-with-posts', [UserPostOSSController::class, 'usersWithPosts'])->name('users.with-posts');

// CE 7b, 7c, 7d: Consulta compleja - Todas las publicaciones con el nombre del autor
Route::get('/posts', [UserPostOSSController::class, 'postsWithAuthors'])->name('posts.index');

// CE 7d: Consulta compleja - Publicaciones publicadas ordenadas por fecha
Route::get('/posts/published', [UserPostOSSController::class, 'publishedPosts'])->name('posts.published');

