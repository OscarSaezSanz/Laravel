@extends('layout.app_oss')

@section('title', $user->name . ' - OSS')

@section('styles')
<style>
    .user-profile {
        background: #6b7280;
        color: white;
        padding: 20px;
        border-radius: 4px;
        margin-bottom: 20px;
        text-align: center;
    }
    .user-profile h2 {
        font-size: 2em;
        margin-bottom: 8px;
    }
    .post-card {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 4px;
        margin-bottom: 15px;
        border-left: 3px solid #9ca3af;
    }
    .post-card h3 {
        color: #333;
        margin-bottom: 15px;
    }
    .post-card p {
        color: #666;
        line-height: 1.6;
    }
</style>
@endsection

@section('content')
<div class="user-profile">
    <h2>{{ $user->name }}</h2>
    <p>{{ $user->email }}</p>
    <p>{{ $user->posts->count() }} Publicaciones</p>
</div>

<h3 style="color: #333; margin-bottom: 20px;">Publicaciones de {{ $user->name }}</h3>

@forelse($user->posts as $post)
    <div class="post-card">
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->content }}</p>
        <small style="color: #999;">Publicado: {{ $post->published_at->format('d/m/Y H:i') }}</small>
    </div>
@empty
    <p style="text-align: center; color: #999; padding: 40px;">No hay publicaciones para mostrar</p>
@endforelse
@endsection
