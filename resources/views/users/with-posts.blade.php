@extends('layout.app_oss')

@section('title', 'Usuarios con Publicaciones - OSS')

@section('styles')
<style>
    .author-card {
        background: #f3f4f6;
        padding: 15px;
        border-radius: 4px;
        margin-bottom: 15px;
        border: 1px solid #d1d5db;
    }
    .author-card h3 {
        color: #333;
        margin-bottom: 10px;
        font-size: 1.5em;
    }
    .post-list {
        list-style: none;
        padding-left: 0;
    }
    .post-list li {
        background: white;
        padding: 10px;
        margin-bottom: 8px;
        border-radius: 3px;
        border-left: 3px solid #9ca3af;
    }
</style>
@endsection

@section('content')
<h2 style="color: #333; margin-bottom: 25px; text-align: center;">Usuarios con Publicaciones (Consulta Compleja)</h2>

<div style="background: #6b7280; color: white; padding: 15px; border-radius: 8px; margin-bottom: 25px; text-align: center;">
    <p><strong>Total de autores activos:</strong> {{ $usersWithPosts->count() }} usuarios</p>
</div>

@foreach($usersWithPosts as $user)
    <div class="author-card">
        <h3>{{ $user->name }}</h3>
        <p style="color: #666; margin-bottom: 15px;">{{ $user->email }} | {{ $user->posts->count() }} publicaciones</p>
        
        <ul class="post-list">
            @foreach($user->posts as $post)
                <li>
                    <strong>{{ $post->title }}</strong>
                    <p style="color: #666; margin: 5px 0 0 0;">{{ Str::limit($post->content, 80) }}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endforeach
@endsection
