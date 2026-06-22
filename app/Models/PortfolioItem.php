<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'is_featured',
    'categories',
    'label',
    'headline',
    'title',
    'industry',
    'deployment_type',
    'year',
    'metric',
    'summary',
    'stack',
    'url',
    'is_published',
    'sort_order',
])]
class PortfolioItem extends Model
{
    protected function casts(): array
    {
        return [
            'is_featured' => 'boolean',
            'categories' => 'array',
            'stack' => 'array',
            'is_published' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true);
    }

    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('is_featured', true);
    }

    public function scopeCards(Builder $query): Builder
    {
        return $query->where('is_featured', false);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('sort_order');
    }

    public function resolvedUrl(): ?string
    {
        $url = trim((string) $this->url);

        if ($url === '') {
            return null;
        }

        if (preg_match('#^https?://(localhost|127\.0\.0\.1)(:\d+)?#i', $url)) {
            return null;
        }

        if (str_starts_with($url, '/')) {
            return url($url);
        }

        return $url;
    }

    /**
     * @return array<string, mixed>
     */
    public function toCardArray(): array
    {
        return [
            'categories' => $this->categories ?? [],
            'industry' => $this->industry,
            'type' => $this->deployment_type,
            'year' => $this->year,
            'metric' => $this->metric,
            'summary' => $this->summary,
            'stack' => $this->stack,
            'url' => $this->resolvedUrl(),
        ];
    }
}
