<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleStoreRequest;
use App\Repositories\ArticleRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public $user;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
        $this->user = Auth::user();
    }
    public function create(Request $request)
    {
        $articles = $this->articleRepository->list()->sortBy($request->sortBy);
        return redirect('/')
            ->with('articles', $articles)
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function store(ArticleStoreRequest $request)
    {
        $this->articleRepository->save($request, Auth::id());
        return redirect('/')->with('message', 'مقاله شما با موفقیت ثبت شد.');
    }
    public function show(Article $article)
    {
        $article = $article->first();
        $comments = $article->comments;  
        return view('article')
            ->with('article', $article)
            ->with('comments', $comments);
    }
    public function edit(Article $article)
    {
        return view('edit')->with('article', $article);
    }
    public function update(ArticleStoreRequest $request)
    {
         $this->articleRepository->edit($request);
        return redirect('/')->with('success', 'مقاله شما با موفقیت ویرایش شد.');
    }
    public function destroy(Article $article)
    {
        if ( $article->first()) {
            $article->delete();
        }
        return back()->with('success', 'مقاله شما با موفقیت حذف شد.');
    }
}
