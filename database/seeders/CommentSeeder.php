<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::truncate();
        $comments = [
            ['content' => 'write your first comment', 'article_id' => 1,'user_id' => 1,
                'created_at' => '2021-10-08', 'updated_at' => '2021-10-08'],
            ['content' => 'write trial content', 'article_id' => 2, 'user_id' => 1,
                'created_at' => '2021-10-09', 'updated_at' => '2021-10-09'],
            ['content' => 'How to take a photo', 'article_id' => 1,'user_id' => 2,
                'created_at' => '2021-10-10', 'updated_at' => '2021-10-10'],
            ['content' => 'writing  something about yourself', 'article_id' => 1, 'user_id' => 1,
                'created_at' => '2021-10-11', 'updated_at' => '2021-10-11'],
            ['content' => 'listen to this music', 'article_id' => 4, 'user_id' => 2,
                'created_at' => '2021-10-16', 'updated_at' => '2021-10-16'],
                ];
            Comment::insert($comments);
    }
}
