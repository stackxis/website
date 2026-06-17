<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'slug',
    'title',
    'excerpt',
    'category',
    'published_at',
    'read_time',
    'author',
    'image',
    'image_alt',
    'content',
    'is_published',
    'sort_order',
])]
class BlogPost extends Model
{
    protected function casts(): array
    {
        return [
            'published_at' => 'date',
            'is_published' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderByDesc('published_at')->orderBy('sort_order');
    }

    /**
     * @return array<string, mixed>
     */
    public function toPublicArray(): array
    {
        return [
            'slug' => $this->slug,
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'category' => $this->category,
            'date' => $this->published_at->format('Y-m-d'),
            'read_time' => $this->read_time,
            'author' => $this->author,
            'image' => $this->image,
            'image_alt' => $this->image_alt,
            'content' => $this->content,
        ];
    }
}
