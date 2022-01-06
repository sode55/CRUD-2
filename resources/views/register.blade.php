<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>قالب Protable - قالب پنل مدیریت</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/media/image/favicon.png')}}">

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{asset('vendors/bundle.css')}}" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" type="text/css">
</head>
<body class="form-membership semi-dark">

<!-- begin::preloader-->
<div class="preloader">
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50px" height="50px" viewbox="0 0 128 128" xml:space="preserve">
        <rect x="0" y="0" width="100%" height="100%" fill="#FFFFFF" />
        <g>
            <path d="M75.4 126.63a11.43 11.43 0 0 1-2.1-22.65 40.9 40.9 0 0 0 30.5-30.6 11.4 11.4 0 1 1 22.27 4.87h.02a63.77 63.77 0 0 1-47.8 48.05v-.02a11.38 11.38 0 0 1-2.93.37z" fill="#000000" fill-opacity="1" />
        </g>
    </svg>
</div>
<!-- end::preloader -->

<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">
        <img class="logo" src="assets/media/image/logo.png" alt="image">
        <img class="logo-dark" src="assets/media/image/logo-dark.png" alt="image">
    </div>
    <!-- ./ logo -->

    <h5>ایجاد حساب</h5>


    <!-- form -->
    <form action="{{route('register.store')}}" method="POST">@csrf
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
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="نام" required autofocus>
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder=" ایمیل" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control text-left" placeholder="رمز عبور" dir="ltr" required>
        </div>
        <div class="form-group">
            <input type="password" name="confirmPassword" class="form-control text-left" placeholder=" تکرار رمز عبور " dir="ltr" required>
        </div>
        <button class="btn btn-primary btn-block">ثبت نام</button>
        <hr>
        <p class="text-muted">حساب کاربری دارید؟</p>
        <a href="{{route('login.create')}}" class="btn btn-outline-light btn-sm">وارد شوید!</a>
    </form>
    <!-- ./ form -->

</div>
<!-- Plugin scripts -->
<script src="{{url('vendors/bundle.js')}}"></script>

<!-- App scripts -->
<script src="{{url('assets/js/app.js')}}"></script>
</body>
</html>