<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function (Article $article) {
    $articles = Article::all()->last()->paginate(5);
    return view('dashboard')
    ->with('articles', $articles)
    ->with('i', (request()->input('page', 1) - 1) * 5);
});

Route::get('register/create', [RegisterController::class, 'create'])->name('register.create');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::get('login/create', [LoginController::class, 'create'])->name('login.create');
Route::post('login', [LoginController::class, 'store'])->name('login.store');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('article/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('article/show/{article}', [ArticleController::class, 'show'])->name('article.show'); 
Route::get('article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');   
Route::put('article/update', [ArticleController::class, 'update'])->name('article.update');
Route::get('article/delete/{article}', [ArticleController::class, 'destroy'])->name('article.delete');

Route::post('comment/store/{id}', [CommentController::class, 'store'])->name('comment.store');
