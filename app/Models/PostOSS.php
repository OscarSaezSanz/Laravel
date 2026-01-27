<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Modelo PostOSS - Proyecto RA7 OSS
 * Autor: Oscar Saez Sanz (OSS)
 * Gestión de publicaciones con relación belongsTo a UserOSS
 */
class PostOSS extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'published_at',
        'is_published',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_published' => 'boolean',
    ];

    /**
     * Relación belongsTo: Una publicación pertenece a un usuario
     * Implementado por: OSS (Oscar Saez Sanz)
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(UserOSS::class, 'user_id');
    }
}
