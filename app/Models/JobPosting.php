<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'title',
    'tags',
    'description',
    'apply_url',
    'date_posted',
    'valid_through',
    'employment_type',
    'identifier',
    'is_published',
    'sort_order',
])]
class JobPosting extends Model
{
    protected function casts(): array
    {
        return [
            'date_posted' => 'date',
            'valid_through' => 'date',
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
        return $query->orderBy('sort_order');
    }
}
