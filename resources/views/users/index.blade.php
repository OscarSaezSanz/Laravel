@extends('layout.app_oss')

@section('title', 'Todos los Usuarios - OSS')

@section('styles')
<style>
    .user-card {
        background: #f3f4f6;
        border-radius: 4px;
        padding: 20px;
        margin-bottom: 15px;
        border: 1px solid #d1d5db;
    }
    .user-header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #d1d5db;
    }
    .user-avatar {
        width: 50px;
        height: 50px;
        border-radius: 3px;
        background: #6b7280;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        font-weight: bold;
    }
    .user-info h3 {
        color: #333;
        font-size: 1.5em;
        margin-bottom: 5px;
    }
    .user-email {
        color: #666;
        font-size: 0.9em;
    }
    .posts-section {
        margin-top: 15px;
    }
    .posts-count {
        display: inline-block;
        background: #6b7280;
        color: white;
        padding: 4px 12px;
        border-radius: 3px;
        font-size: 0.85em;
        font-weight: 500;
        margin-bottom: 10px;
    }
    .post-item {
        background: white;
        padding: 12px;
        border-radius: 3px;
        margin-bottom: 8px;
        border-left: 3px solid #9ca3af;
    }
    .post-title {
        font-weight: 600;
        color: #333;
        margin-bottom: 5px;
    }
    .post-content {
        color: #666;
        font-size: 0.9em;
        line-height: 1.5;
    }
    .no-posts {
        color: #999;
        font-style: italic;
        padding: 15px;
        background: white;
        border-radius: 8px;
    }
    .stats {
        background: #6b7280;
        color: white;
        padding: 15px;
        border-radius: 4px;
        margin-bottom: 20px;
        text-align: center;
    }
    .stats h2 {
        font-size: 1.5em;
        margin-bottom: 8px;
    }
</style>
@endsection

@section('content')
<div class="stats">
    <h2>Estadísticas OSS</h2>
    <p><strong>Total de Usuarios:</strong> {{ $users->count() }}</p>
    <p><strong>Usuarios con Posts:</strong> {{ $users->filter(fn($u) => $u->posts->count() > 0)->count() }}</p>
    <p><strong>Total de Publicaciones:</strong> {{ $users->sum(fn($u) => $u->posts->count()) }}</p>
</div>

<h2 style="color: #333; margin-bottom: 25px; font-size: 2em;">Todos los Usuarios</h2>

@foreach($users as $user)
    <div class="user-card">
        <div class="user-header">
            <div class="user-avatar">
                {{ strtoupper(substr($user->name, 0, 1)) }}
            </div>
            <div class="user-info">
                <h3>{{ $user->name }}</h3>
                <p class="user-email">{{ $user->email }}</p>
            </div>
        </div>

        <div class="posts-section">
            @if($user->posts->count() > 0)
                <span class="posts-count">{{ $user->posts->count() }} {{ $user->posts->count() == 1 ? 'Publicación' : 'Publicaciones' }}</span>
                
                @foreach($user->posts as $post)
                    <div class="post-item">
                        <div class="post-title">{{ $post->title }}</div>
                        <div class="post-content">{{ Str::limit($post->content, 100) }}</div>
                        <small style="color: #999;">{{ $post->published_at->format('d/m/Y H:i') }}</small>
                    </div>
                @endforeach
            @else
                <div class="no-posts">
                    Este usuario aún no tiene publicaciones
                </div>
            @endif
        </div>
    </div>
@endforeach
@endsection
