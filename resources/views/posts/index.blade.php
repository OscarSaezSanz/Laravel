@extends('layout.app_oss')

@section('title', 'Todas las Publicaciones - OSS')

@section('styles')
<style>
    .post-card {
        background: white;
        border: 1px solid #d1d5db;
        border-radius: 4px;
        padding: 15px;
        margin-bottom: 15px;
    }
    .post-header {
        border-bottom: 1px solid #e5e7eb;
        padding-bottom: 10px;
        margin-bottom: 10px;
    }
    .post-title {
        color: #333;
        font-size: 1.5em;
        margin-bottom: 8px;
    }
    .author-info {
        color: #6b7280;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .author-badge {
        background: #6b7280;
        color: white;
        padding: 4px 12px;
        border-radius: 3px;
        font-size: 0.85em;
    }
    .post-content {
        color: #666;
        line-height: 1.8;
        margin-bottom: 15px;
    }
    .post-meta {
        display: flex;
        gap: 20px;
        color: #999;
        font-size: 0.9em;
    }
</style>
@endsection

@section('content')
<h2 style="color: #333; margin-bottom: 25px; text-align: center;">Todas las Publicaciones con Autores (Consulta Compleja)</h2>

<div style="background: #6b7280; color: white; padding: 15px; border-radius: 8px; margin-bottom: 25px; text-align: center;">
    <p><strong>Total de publicaciones:</strong> {{ $posts->count() }}</p>
</div>

@foreach($posts as $post)
    <div class="post-card">
        <div class="post-header">
            <h3 class="post-title">{{ $post->title }}</h3>
            <div class="author-info">
                <span>Autor:</span>
                <span class="author-badge">{{ $post->user->name }}</span>
            </div>
        </div>
        
        <div class="post-content">
            {{ $post->content }}
        </div>
        
        <div class="post-meta">
            <span>{{ $post->user->email }}</span>
            <span>{{ $post->published_at->format('d/m/Y H:i') }}</span>
            <span>{{ $post->is_published ? 'Publicado' : 'Borrador' }}</span>
        </div>
    </div>
@endforeach
@endsection
