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

     <!-- Prism -->
     <link rel="stylesheet" href="{{asset('vendors/prism/prism.css')}}" type="text/css">
      <!-- Select2 -->
     <link rel="stylesheet" href="{{asset('vendors/select2/css/select2.min.css')}}" type="text/css">

<!-- Range slider -->
<link rel="stylesheet" href="{[asset('vendors/range-slider/css/ion.rangeSlider.min.css')}}" type="text/css">

<!-- Tagsinput -->
<link rel="stylesheet" href="{{('vendors/tagsinput/bootstrap-tagsinput.css')}}" type="text/css">


    <!-- App styles -->
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" type="text/css">
</head>
<body class="semi-dark">

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

<!-- begin::navigation -->
<div class="navigation">

    <!-- begin::logo -->
    <div id="logo">
        <a href="index.html">
            <img class="logo" src="assets/media/image/logo.png" alt="logo">
            <img class="logo-sm" src="assets/media/image/logo-sm.png" alt="small logo">
            <img class="logo-dark" src="assets/media/image/logo-dark.png" alt="dark logo">
        </a>
    </div>
    <!-- end::logo -->

    <!-- begin::navigation header -->
    <header class="navigation-header">
        <figure class="avatar avatar-state-success">
            <!-- <img src="assets/media/image/user/man_avatar3.jpg" class="rounded-circle" alt="image"> -->
        </figure>
        <div>
            <h5> </h5>
            <p class="text-muted line-height-20 m-b-25"> </p>
            <ul class="nav">
                <li class="nav-item">
                    <a href="profile.html" class="btn nav-link bg-info-bright" title="پروفایل" data-toggle="tooltip">
                        <i data-feather="user"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn nav-link bg-success-bright" title="تنظیمات" data-toggle="tooltip">
                        <i data-feather="settings"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('logout')}}" class="btn nav-link bg-danger-bright" title="خروج" data-toggle="tooltip">
                        <i data-feather="log-out"></i>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <!-- end::navigation header -->

    <!-- begin::navigation menu -->
    <div class="container">
        <div class="navigation-menu-body">
                <ul>
                 <li class="navigation-divider">اصلی</li>
                 <li class="open">
                 <a href="route('article.create')}}">
                    <span>داشبورد</span>
                <ul>
                </ul>
            </li>
            <li class="navigation-divider"></li>
            <li>
                <a href="#">
                    <i class="nav-link-icon" data-feather="user"></i>
                    <span>احراز هویت</span>
                </a>
                <ul>
                    <li><a href="{{route('login.create')}}">ورود</a></li>
                    <li><a href="{{route('register.create')}}">ثبت نام</a></li>
                </ul>
            </li>    
        </ul>
    </div>
</div>
    <!-- end::navigation menu -->

</div>
<!-- end::navigation -->

<div id="main">

    <!-- begin::header -->
    <div class="header">

        <!-- begin::header left -->
        <ul class="navbar-nav">

            <!-- begin::navigation-toggler -->
            <li class="nav-item navigation-toggler">
                <a href="#" class="nav-link">
                    <i data-feather="menu"></i>
                </a>
            </li>
            <!-- end::navigation-toggler -->

            <!-- begin::header-logo -->
            <li class="nav-item" id="header-logo">
                <a href="index.html">
                    <img class="logo" src="assets/media/image/logo.png" alt="logo">
                    <img class="logo-sm" src="assets/media/image/logo-sm.png" alt="small logo">
                    <img class="logo-dark" src="assets/media/image/logo-dark.png" alt="dark logo">
                </a>
            </li>
            <!-- end::header-logo -->
        </ul>
        <!-- end::header left -->

        <!-- begin::header-right -->
        <div class="header-right">
            <ul class="navbar-nav">

                <!-- begin::search-form -->
                <li class="nav-item search-form">
                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="جستجو">
                                    <div class="input-group-append">
                                        <button class="btn btn-default" type="button">
                                            <i data-feather="search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
                <!-- end::search-form -->

                <!-- begin::header minimize/maximize -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                        <i class="maximize" data-feather="maximize"></i>
                        <i class="minimize" data-feather="minimize"></i>
                    </a>
                </li>
                <!-- end::header minimize/maximize -->

                <!-- begin::header app list -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" title="Apps" data-toggle="dropdown">
                        <i data-feather="grid"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-big dropdown-menu-right">
                        <div class="p-3">
                            <h6 class="text-uppercase font-size-11 mb-3">برنامه های وب</h6>
                            <div class="row row-xs">
                                <div class="col-6">
                                    <a href="chat.html">
                                        <div class="text-uppercase font-size-11 p-3 border-radius-1 border text-center mb-3">
                                            <i class="text-success width-23 height-23" data-feather="message-circle"></i>
                                            <div class="mt-2">گفتگو</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="inbox.html">
                                        <div class="text-uppercase font-size-11 p-3 border-radius-1 border text-center mb-3">
                                            <i class="text-info width-23 height-23" data-feather="mail"></i>
                                            <div class="mt-2">ایمیل</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="calendar.html">
                                        <div class="text-uppercase font-size-11 p-3 border-radius-1 border text-center">
                                            <i class="text-warning width-23 height-23" data-feather="calendar"></i>
                                            <div class="mt-2">تقویم</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="file-manager.html">
                                        <div class="text-uppercase font-size-11 p-3 border-radius-1 border text-center">
                                            <i class="text-danger width-23 height-23" data-feather="file"></i>
                                            <div class="mt-2">مدیریت فایل</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- end::header app list -->

                <!-- begin::header messages dropdown -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link nav-link-notify" title="Messages" data-toggle="dropdown">
                        <i data-feather="message-circle"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-big dropdown-menu-right">
                        <div class="p-4 text-center" data-background-image="assets/media/image/image1.png">
                            <h6 class="mb-1">پیام ها</h6>
                            <small class="font-size-11 opacity-7">2 پیام خوانده نشده</small>
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li>
                                    <a href="#" class="list-group-item d-flex hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <img src="assets/media/image/user/man_avatar1.jpg" class="rounded-circle" alt="user">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 d-flex justify-content-between line-height-25">
                                                تونی استارک
                                                <i title="Make unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                            </p>
                                            <div class="small text-muted mt-1 line-height-20">
                                                <span class="mr-2">02:30 ب.ظ</span>
                                                <span>لورم ایپسوم متن ساختگی</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <img src="assets/media/image/user/women_avatar5.jpg" class="rounded-circle" alt="user">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 d-flex justify-content-between line-height-25">
                                                استیو راجرز
                                                <i title="Make unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                            </p>
                                            <div class="small text-muted mt-1 line-height-20">
                                                <span class="mr-2">08:36 ب.ظ</span>
                                                <span>لورم ایپسوم متن ساختگی</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-divider small pb-2 pl-3 pt-3">
                                    <span>گفتگو های قدیمی</span>
                                </li>
                                <li>
                                    <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <img src="assets/media/image/user/man_avatar3.jpg" class="rounded-circle" alt="user">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 d-flex justify-content-between line-height-25">
                                                استیو جابز
                                                <i title="Make unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                            </p>
                                            <div class="small text-muted mt-1 line-height-20">
                                                <span class="mr-2">11:09 ب.ظ</span>
                                                <span>لورم ایپسوم متن ساختگی</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="list-group-item d-flex hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <img src="assets/media/image/user/man_avatar2.jpg" class="rounded-circle" alt="user">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 d-flex justify-content-between line-height-25">
                                                بیل گیتس
                                                <i title="Mark as read" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                            </p>
                                            <div class="small text-muted mt-1 line-height-20">
                                                <span class="mr-2">دیروز</span>
                                                <span>لورم ایپسوم متن ساختگی</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <img src="assets/media/image/user/women_avatar1.jpg" class="rounded-circle" alt="user">
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 d-flex justify-content-between line-height-25">
                                                اولیور کویین
                                                <i title="Make unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                            </p>
                                            <div class="small text-muted mt-1 line-height-20">
                                                <span class="mr-2">دیروز</span>
                                                <span>لورم ایپسوم متن ساختگی</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-2 text-right">
                            <ul class="list-inline small">
                                <li class="list-inline-item">
                                    <a href="#">علامت خوانده شده به همه</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <!-- end::header messages dropdown -->

                <!-- begin::header notification dropdown -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link nav-link-notify" title="Notifications" data-toggle="dropdown">
                        <i data-feather="bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-big dropdown-menu-right">
                        <div class="p-4 text-center" data-background-image="assets/media/image/image1.png">
                            <h6 class="mb-1">اعلان ها</h6>
                            <small class="font-size-11 opacity-7">1 اعلان خوانده نشده</small>
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li>
                                    <a href="#" class="list-group-item d-flex hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-success-bright text-success rounded-circle">
                                                    <i class="ti-user"></i>
                                                </span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 d-flex justify-content-between line-height-25">
                                                یک مشتری ثبت نام کرد
                                                <i title="Make unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                                            </p>
                                            <span class="text-muted small d-block mt-1">20 دقیقه پیش</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-divider small pb-2 pl-3 pt-3">
                                    <span>اعلان های قدیمی</span>
                                </li>
                                <li>
                                    <a href="#" class="list-group-item d-flex hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                    <i class="ti-package"></i>
                                                </span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 d-flex justify-content-between line-height-25">
                                                سفارش جدید دریافت شد
                                                <i title="Mark as read" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                            </p>
                                            <span class="text-muted small d-block mt-1">45 ثانیه پیش</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-danger-bright text-danger rounded-circle">
                                                    <i class="ti-server"></i>
                                                </span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 d-flex justify-content-between line-height-25">
                                                سرور به حد نصاب رسید
                                                <i title="Make unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                            </p>
                                            <span class="text-muted small d-block mt-1">55 ثانیه پیش</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-info-bright text-info rounded-circle">
                                                    <i class="ti-layers"></i>
                                                </span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 d-flex justify-content-between line-height-25">
                                                برنامه ها آماده به روز رسانی هستند
                                                <i title="Make unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11"></i>
                                            </p>
                                            <span class="text-muted small d-block mt-1">دیروز</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-2 text-right">
                            <ul class="list-inline small">
                                <li class="list-inline-item">
                                    <a href="#">علامت خوانده شده به همه</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <!-- end::header notification dropdown -->
            </ul>

            <!-- begin::mobile header toggler -->
            <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item header-toggler">
                    <a href="#" class="nav-link">
                        <i data-feather="arrow-down"></i>
                    </a>
                </li>
            </ul>
            <!-- end::mobile header toggler -->
        </div>
        <!-- end::header-right -->
    </div>
    <!-- end::header -->

    <!-- begin::main content -->
    <main class="main-content">
        <div class="container">
        <div class="page-header">
            <small class="">خوش آمدید، <span class="text-primary" >{{ optional(Auth::user())->name }}</span></small>
        </div>            
               <div class="row">
                <div class="col-md-12">
                  @yield('content')
                </div>
        </div>
    </div>
</main>
    <!-- end::main content -->

    <!-- begin::footer -->
    <footer>
        <div class="container">
            <div>ارائه شده در وب‌سایت <a href="https://www.rtl-theme.com" target="_blank">راست‌چین</a></div>
            <div>
                <nav class="nav">
                    <a href="#" class="nav-link">مجوزها</a>
                    <a href="#" class="nav-link">تغییرات</a>
                    <a href="#" class="nav-link">راهنما</a>
                </nav>
            </div>
        </div>
    </footer>
    <!-- end::footer -->
</div>

<!-- Plugin scripts -->
<script src="{{url('vendors/bundle.js')}}"></script>

<!-- Select2 -->
<script src="{{url('vendors/select2/js/select2.min.js')}}"></script>
<script src="{{url('assets/js/examples/select2.js')}}"></script>

<!-- Range slider -->
<script src="{{url('vendors/range-slider/js/ion.rangeSlider.min.js')}}"></script>
<script src="{{url('assets/js/examples/range-slider.js')}}"></script>

<!-- Input mask -->
<script src="{{url('vendors/input-mask/jquery.mask.js')}}"></script>
<script src="{{url('assets/js/examples/input-mask.js')}}"></script>

<!-- Tagsinput -->
<script src="{{url('vendors/tagsinput/bootstrap-tagsinput.js')}}"></script>
<script src="{{url('assets/js/examples/tagsinput.js')}}"></script>


<!-- Prism -->
<script src="{{url('vendors/prism/prism.js')}}"></script>

<!-- Chartjs -->
<script src="{{url('vendors/charts/chartjs/chart.min.js')}}"></script>

<!-- Circle progress -->
<script src="{{url('vendors/circle-progress/circle-progress.min.js')}}"></script>

<!-- Dashboard scripts -->
<script src="{{url('assets/js/examples/dashboard.js')}}"></script>
<div class="colors"> <!-- To use theme colors with Javascript -->
    <div class="bg-primary"></div>
    <div class="bg-primary-bright"></div>
    <div class="bg-secondary"></div>
    <div class="bg-secondary-bright"></div>
    <div class="bg-info"></div>
    <div class="bg-info-bright"></div>
    <div class="bg-success"></div>
    <div class="bg-success-bright"></div>
    <div class="bg-danger"></div>
    <div class="bg-danger-bright"></div>
    <div class="bg-warning"></div>
    <div class="bg-warning-bright"></div>
</div>

<!-- App scripts -->
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8')}}"></script>
</body>
</html>