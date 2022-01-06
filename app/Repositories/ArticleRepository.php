<?php

namespace App\Repositories;

use App\Models\Article;

class ArticleRepository
{
    public function list()
    {
        $article = Article::latest()->paginate(5);

        return $article;
    }
    public function save($request, $userId)
    {
        $article = Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => $userId
        ]);

        return $article;
    }
        public function comment($id)
        {
            $comment = Article::find($id)->comments;

            return $comment;
        }
    public function article($id)
    {
        $article = Article::find($id);

        return $article;
    }
    public function edit($request)
    {
        $article = Article::find($request->id);
        $input = $request->all();
        $article->title = $input['title'];
        $article->content = $input['content'];
        $article->save();

        return $article;
    }
    public function delete($id)
    {
        $article = Article::find($id);
        $article->delete();

        return $article;
    }
}
