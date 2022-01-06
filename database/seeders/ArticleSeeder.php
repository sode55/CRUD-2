<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();
        $articles = [
            ['title' => 'first post', 'content' => 'write your first content', 'user_id' => 2,
                'created_at' => '2021-10-08', 'updated_at' => '2021-10-08'],
            ['title' => 'trial post', 'content' => 'write trial content', 'user_id' => 2,
                'created_at' => '2021-10-09', 'updated_at' => '2021-10-09'],
            ['title' => 'photo', 'content' => 'How to take a photo', 'user_id' => 2,
                'created_at' => '2021-10-10', 'updated_at' => '2021-10-10'],
            ['title' => 'writing', 'content' => 'writing  something about yourself', 'user_id' => 1,
                'created_at' => '2021-10-11', 'updated_at' => '2021-10-11'],
            ['title' => 'listening', 'content' => 'listen to this music', 'user_id' => 1,
                'created_at' => '2021-10-16', 'updated_at' => '2021-10-16'],
            ];

            Article::insert($articles);
    }
}
