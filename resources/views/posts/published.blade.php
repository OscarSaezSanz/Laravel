@extends('layout.app_oss')

@section('title', 'Publicaciones Publicadas - OSS')

@section('styles')
<style>
    .published-post {
        background: #f3f4f6;
        padding: 15px;
        border-radius: 4px;
        margin-bottom: 15px;
        border: 1px solid #d1d5db;
    }
    .published-post h3 {
        color: #333;
        font-size: 1.5em;
        margin-bottom: 10px;
    }
    .published-post p {
        color: #555;
        line-height: 1.7;
        margin-bottom: 15px;
    }
    .author-tag {
        background: white;
        padding: 4px 12px;
        border-radius: 3px;
        display: inline-block;
        color: #6b7280;
        font-weight: 500;
        margin-right: 10px;
        border: 1px solid #d1d5db;
    }
</style>
@endsection

@section('content')
<h2 style="color: #333; margin-bottom: 25px; text-align: center;">Publicaciones Publicadas (Consulta Compleja)</h2>

<div style="background: #6b7280; color: white; padding: 20px; border-radius: 10px; margin-bottom: 25px; text-align: center;">
    <h3 style="margin-bottom: 10px;">Resumen OSS</h3>
    <p><strong>Total de publicaciones publicadas:</strong> {{ $publishedPosts->count() }}</p>
    <p><strong>Ordenadas por:</strong> Fecha de publicación (más recientes primero)</p>
</div>

@forelse($publishedPosts as $post)
    <div class="published-post">
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->content }}</p>
        <div>
            <span class="author-tag">{{ $post->user->name }}</span>
            <span style="color: #999;">{{ $post->published_at->format('d/m/Y H:i') }}</span>
        </div>
    </div>
@empty
    <p style="text-align: center; color: #999; padding: 40px;">No hay publicaciones publicadas</p>
@endforelse
@endsection
