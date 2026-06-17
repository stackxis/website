<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use App\Support\BlogPosts;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    public function run(): void
    {
        foreach (BlogPosts::all() as $index => $post) {
            BlogPost::query()->updateOrCreate(
                ['slug' => $post['slug']],
                [
                    'title' => $post['title'],
                    'excerpt' => $post['excerpt'],
                    'category' => $post['category'],
                    'published_at' => $post['date'],
                    'read_time' => $post['read_time'],
                    'author' => $post['author'],
                    'image' => $post['image'],
                    'image_alt' => $post['image_alt'],
                    'content' => $post['content'],
                    'is_published' => true,
                    'sort_order' => $index,
                ],
            );
        }
    }
}
