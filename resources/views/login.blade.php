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

    <h5>ورود</h5>

    <!-- form -->
    @if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
        <p>{{ $message }}</p>
    </div>
@endif
  
    <form action="{{route('login.store')}}" method="POST">@csrf
     @if ($errors->any())
                <ul> @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                        <li>{{ $error }}</li>
                        </div>
                    @endforeach
                </ul>
            @endif
        <div class="form-group">
            <input type="email" name="email" class="form-control text-left" placeholder="ایمیل" dir="ltr" required autofocus>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control text-left" placeholder="رمز عبور" dir="ltr" required>
        </div>
        <div class="form-group text-left d-sm-flex justify-content-between mb-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked id="customCheck1">
                <label class="custom-control-label" for="customCheck1">به خاطر سپاری</label>
            </div>
            <a href="recover-password.html" class="line-height-28">بازنشانی رمز عبور</a>
        </div>
        <button class="btn btn-primary btn-block">ورود</button>
        <hr>
        <p class="text-muted">با حساب شبکه اجتماعی خود وارد شوید.</p>
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-facebook">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-twitter">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-dribbble">
                    <i class="fa fa-dribbble"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-linkedin">
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-google">
                    <i class="fa fa-google"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-behance">
                    <i class="fa fa-behance"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-floating btn-instagram">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
        </ul>
        <hr>
        <p class="text-muted">حسابی ندارید؟</p>
        <a href="{{route('register.create')}}" class="btn btn-outline-light btn-sm">هم اکنون ثبت نام کنید!</a>
    </form>
    <!-- ./ form -->

</div>

<!-- Plugin scripts -->
<script src="{{url('vendors/bundle.js')}}"></script>

<!-- App scripts -->
<script src="{{url('assets/js/app.js')}}"></script>
</body>
</html>