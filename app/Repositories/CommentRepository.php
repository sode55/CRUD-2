<?php

namespace App\Repositories;

use App\Models\Article;
use App\Models\Comment;

class CommentRepository
{
    public function save($request, $userId)
    {
        $comment = Comment::create([
            'content' => $request->content,
            'user_id' => $userId,
            'article_id' => $request->route('id'),
        ]);

        return $comment;
    }
}
