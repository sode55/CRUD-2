<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentStoreRequest;
use App\Repositories\CommentRepository;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public $user;

    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
        $this->user = Auth::user();
    }


    public function store(CommentStoreRequest $request)
    {
        $this->commentRepository->save($request, Auth::id());
        return back()->with('message', 'نظر شما با موفقیت ثبت شد.');
    }
}
