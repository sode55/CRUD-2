@extends('master')
@section('content')
<script src="{{url('https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js')}}"></script>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">                  
<form method="post" action="{{route('article.update')}}">@csrf  @method('PUT')
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
    <label for="id"></label>
    <input type="hidden" name="id" value="{{ $article->id }}">
    <label for="text-field-hero-input" >عنوان</label>
    <div class="form-group">
    <input type="text" name="title" id="text-field-hero-input" value="{{ $article->title }}"
    class="form-control text-left">
</div>
    <label for="editor" class="mdc-floating-label">محتوا</label>
    <textarea  id="editor" name="content" cols="80" rows="100">
    <div id="editor">
        <p>{{ $article->content }}</p>
    </div>
    </textarea>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <br><br>
    <script>CKEDITOR.replace('editor');</script>
    <button type="submit" name="submit" class="btn btn-info btn-rounded">ویرایش مقاله</button>
</form>
            </div>
        </div>
    </div>
 </div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            </div>
        </div>
     </div>
 </div>
 @stop