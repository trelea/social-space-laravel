<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostImage extends Model
{
    protected $table = 'posts_images';
    protected $fillable = ['path', 'original_name', 'mime_type', 'size', 'post_id'];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
