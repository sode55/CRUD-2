@extends('master')
@section('content')
 <!-- show article -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h2>{{ $article->title }}</h2>
                    <div class="message-item">
                        <div class="message-item-content">  
                            <p>{{ $article->content }}</p>
                        </div>
                        <span class="time small text-muted font-italic">
                            <h>تاریخ ایجاد</h>  
                            <h>{{ $article->created_at }} </h>
                            <br>
                            <h>توسط</h>
                            <h>{{ $article->user->name }}</h>
                        </span> 
                 </div>             
            </div>
        </div>
     </div>
 </div>  
  <!-- show comments of a article -->
 <div class="page-header">      
 <h5>نظرات</h5> 
  </div>  
 @foreach ($comments as $comment )
 <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">   
                <div class="message-item">
                    <div class="message-item-content">  
                        <p>{{ !empty($comment->content) ? $comment->content: '' }}</p>
                    </div> 
                    <span class="time small text-muted font-italic">
                         <h>{{ !empty($comment->user) ? $comment->user->name: '' }}</h>
                        <p>{{ !empty($comment->created_at) ? $comment->created_at: '' }}</p>
                    </span> 
                 </div>    
            </div>
        </div>
     </div>
 </div>
@endforeach  
<!-- begin::comment footer -->
<div class="chat-footer border-top">
    <form class="d-flex"action="{{ route('comment.store', $article->id) }}" method="POST">@csrf
     @if ($message = Session::get('success'))   
        <div class="alert alert-success" role="alert">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($errors->any())
    <ul> @foreach ($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            <li>{{ $error }}</li>
        </div>
    @endforeach
    </ul>
    @endif
        <button class="btn btn-outline-light mr-2" type="button" title="شکلک" data-toggle="tooltip">
            <i data-feather="smile" class="width-15 height-15"></i>
        </button>
        <div class="flex-grow-1">
            <input type="text" name="content" class="form-control" placeholder="نظر خود را بنویسید">
            <input type="hidden" name="article_id" value="{{ $article->id }}">
        </div>
        <div class="chat-footer-buttons d-flex">
            <button class="btn btn-primary" type="submit" name="submit">
                <i data-feather="send" class="width-15 height-15"></i>
            </button>
            <button class="btn btn-outline-light" type="button" title="الحاق فایل" data-toggle="tooltip">
                <i data-feather="paperclip" class="width-15 height-15"></i>
            </button>
        </div>
    </form>
</div>
<!-- end::comment footer -->
@stop