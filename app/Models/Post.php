<?php

namespace App\Models;

use App\Enum\PostStatus;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $fillable = [
        'category_id',
        'user_id',
        'title',
        'slug',
        'resume',
        'thumbnail',
        'content',
        'status',
    ];

    protected $casts = [
        'status' => PostStatus::class,
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getUrl(): string
    {
        return route('blog.post', ['post' => $this->slug]);
    }

    public function scopePublished(Builder $query): void
    {
        $query->where('status', PostStatus::PUBLISH);
    }

    public function isPrivate(): bool
    {
        return now() < $this->published_at
            || $this->status === PostStatus::PRIVATE
            || $this->status === PostStatus::DRAFT;
    }
}
