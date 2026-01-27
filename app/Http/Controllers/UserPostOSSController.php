<?php

namespace App\Http\Controllers;

use App\Models\UserOSS;
use App\Models\PostOSS;
use Illuminate\Http\Request;

class UserPostOSSController extends Controller
{
    /**
     * Mostrar todos los usuarios con sus publicaciones (con carga ansiosa)
     * CE 7b: Utiliza métodos de Eloquent para consultas
     * CE 7c: Optimiza con carga ansiosa
     */
    public function index()
    {
        // Carga ansiosa con with() para evitar problema N+1
        $users = UserOSS::with('posts')->get();
        
        return view('users.index', compact('users'));
    }

    /**
     * Mostrar un usuario específico con sus publicaciones
     * CE 7b: Utiliza métodos de Eloquent para consultas
     */
    public function show($id)
    {
        $user = UserOSS::with('posts')->findOrFail($id);
        
        return view('users.show', compact('user'));
    }

    /**
     * Consulta compleja: Usuarios que tienen al menos una publicación
     * CE 7b: Utiliza métodos de Eloquent para consultas
     * CE 7d: Utiliza relaciones en consultas complejas
     */
    public function usersWithPosts()
    {
        $usersWithPosts = UserOSS::has('posts')->with('posts')->get();
        
        return view('users.with-posts', compact('usersWithPosts'));
    }

    /**
     * Consulta compleja: Todas las publicaciones con el nombre del autor
     * CE 7b: Utiliza métodos de Eloquent para consultas
     * CE 7c: Optimiza con carga ansiosa
     * CE 7d: Utiliza relaciones en consultas complejas
     */
    public function postsWithAuthors()
    {
        $posts = PostOSS::with('user')->get();
        
        return view('posts.index', compact('posts'));
    }

    /**
     * Consulta compleja: Publicaciones publicadas ordenadas por fecha
     * CE 7d: Utiliza relaciones en consultas complejas
     */
    public function publishedPosts()
    {
        $publishedPosts = PostOSS::with('user')
            ->where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->get();
        
        return view('posts.published', compact('publishedPosts'));
    }
}

