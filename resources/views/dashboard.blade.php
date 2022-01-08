@extends('master')
@section('content')
<script src="{{url('https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js')}}"></script>
 <!-- sorting -->
<form method="get" action="{{route('article.create')}}">
    <div class="row">
     <div class="col-md-8">
        <div class="form-group">
             <select class="js-example-basic-single" name="sortBy" id="sortBy">
                <option>انتخاب</option>
                 <option value="id">شماره مقاله</option>
                 <option value="user_id">نویسنده</option>
                <option value="title">عنوان</option>
                <option value="created_at">تاریخ</option> 
            </select>          
        </div>      
    </div>
 </div>   
   <button type="submit" name="submit" class="btn btn-info btn-rounded">مرتب سازی</button>   
  </form>
 <!-- show article -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">لیست مقالات</h6>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">ردیف</th>
                                <th scope="col">شماره مقاله</th>
                                <th scope="col"> عنوان</th>
                                <th scope="col">نویسنده</th>
                                <th scope="col">تاریخ</th>
                                </tr>
                                </thead>
                                <tbody>  
                                @foreach ($articles as $article)
                                <tr>
                                    <th scope="row">{{ ++$i }}</th>   
                                    <td>{{ $article->id}}</td>
                                    <td>{{ $article->title }}</td>
                                    <td>{{ $article->user->name }}</td>
                                    <td>{{ $article->created_at }}</td>
                                    <td>
                                        <a href="{{ route('article.show',$article->id) }}" class="btn btn-success btn-rounded"> نمایش</a>
                                        <a  href="{{ route('article.edit', $article->id) }}" class="btn btn-warning btn-rounded">ویرایش</a>
                                    <a href="{{ route('article.delete',$article->id) }}" class="btn btn-danger btn-rounded">حذف</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>               
                    </div>
            </div>
        </div>
    </div>
</div>
 <!--create articles -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

    <form  action="{{route('article.store')}}" method="POST">@csrf
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
             <label for="text-field-hero-input" >عنوان</label>
            <div class="form-group">
                    <input type="text" name="title" id="text-field-hero-input" class="form-control text-left">
                </div>     
            <label for="editor" class="mdc-floating-label">محتوا</label>
            <br>
            <textarea  id="editor" name="content" cols="80" rows="100">
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
         
            <button type="submit" name="submit" class="btn btn-info btn-rounded"> ایجاد مقاله</button>
        </form>
        </div>
        </div>
    </div>
</div>
@stop
