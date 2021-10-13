<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cửa hàng| Shop giày</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

</head> <!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div style="height: 20px;" class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>Miễn phí vận chuyển - giao hàng liền tay</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                        <div class="header__top__links">
                            @if (Auth::check() && Auth::user()->type == 2)
                            <span style="color: white;">|&emsp;<a
                                    href="{{ route('profile',Auth::user()->id)}}">{{Auth::user()->name}}</a>&emsp;|&emsp;</span>
                            <a href="{{ route('logout') }}">Đăng xuất</a>
                            @else
                            <a href="login">Đăng nhập</a>
                            @endif
                            <a href=" #">Câu hỏi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="height: 80px;" class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="index"><img src="{{asset('img/LoGo.JPG')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li><a href="{{route('index')}}">Trang chủ</a></li>
                        <li class=""><a href="{{route('shop')}}">Cửa hàng</a></li>
                        <li><a href="{{route('info')}}">About us </a>

                        </li>
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="{{route('contact')}}">Liên hệ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="{{asset('icon/search.png')}}" alt=""></a>
                    <a href="#"><img src="{{asset('icon/heart.png')}}" alt=""></a>
                    <a href="{{route('cart')}}"> <img src="{{asset('icon/cart.png')}}" alt="">
                        <span>{{$countCart}}
                        </span></a>
                </div>
            </div>
        </div>

    </div>
</header>
<!-- Header Section End -->