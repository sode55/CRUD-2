<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleStoreRequest;
use App\Repositories\ArticleRepository;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('dashboard')
            ->with('articles', $articles)
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function store(ArticleStoreRequest $request)
    {
        $this->articleRepository->save($request, Auth::id());
        return redirect('/')->with('message', 'مقاله شما با موفقیت ثبت شد.');
    }
    public function show($id)
    {
        $comments = $this->articleRepository->comment($id);
        $article = $this->articleRepository->article($id);
        return view('article')
            ->with('article', $article)
            ->with('comments', $comments);
    }
    public function edit($id)
    {
        $article = $this->articleRepository->article($id);
        return view('edit')->with('article', $article);
    }
    public function update(ArticleStoreRequest $request)
    {
         $this->articleRepository->edit($request);
        return redirect('/')->with('message', 'مقاله شما با موفقیت ویرایش شد.');
    }
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return back()->with('message', 'مقاله شما با موفقیت حذف شد.');
    }
}
