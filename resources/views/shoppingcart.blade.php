<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping cart</title>

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
</head>

<body>


    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Đăng nhập</a>
                <a href="#">Câu hỏi</a>
            </div>

        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
            <a href="#"><img src="img/icon/heart.png" alt=""></a>
            <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p> Miễn phí vận chuyển - giao hàng liền tay</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Miễn phí vận chuyển - giao hàng liền tay</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="#">Đăng nhập</a>
                                <a href="#">Câu hỏi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="./Image/LoGo.JPG" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="./index.html">Trang chủ</a></li>
                            <li><a href="./shop.html">Cửa hàng</a></li>
                            <li><a href="#">Trang </a>
                                <ul class="dropdown">
                                    <li><a href="./about.html">Thông tin</a></li>
                                    <li><a href="./shop-details.html">Chi tiết cửa hàng</a></li>
                                    <li><a href="./shopping-cart.html">Giỏ hàng</a></li>
                                    <li><a href="./checkout.html">Kiểm tra</a></li>
                                    <li><a href="./blog-details.html"> Chi tiết Blog</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                        <a href="#"><img src="img/icon/heart.png" alt=""></a>
                        <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                        <div class="price">$0.00</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Giỏ hàng</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Trang chủ</a>
                            <a href="./shop.html">Cửa hàng</a>
                            <span>Giỏ hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->

    <section class="shopping-cart spad">
        <div class="container">
            <div class="">
                <div class="col-sm-12">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                @php $total = 0 @endphp
                                @foreach((array) session('cart') as $id => $details)
                                @php $total = $details['price'] * $details['quatity'] @endphp
                                @endforeach
                                <tr data-id=" {{ $id }}">
                                    <th>Ảnh</th>
                                    <th style="width: 200px;">Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá tiền</th>
                                    <th>Tổng tiền</th>
                                    <th>Xóa</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                <tr>
                                    <td>
                                        <div class="product__cart__item__pic"><img
                                                src="{{asset('img/'.$details['img'])}}" width="70%" height="70%"
                                                class="img-responsive" /></div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <h6>{{ $details['name'] }}</h6>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="">
                                                <input style="width: 70px; text-align: center;" type="number"
                                                    value="{{ $details['quatity'] }}"
                                                    class="form-control quantity update-cart">
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th=" Price" class="cart__price">${{ $details['price'] }}
                                    </td>
                                    <td data-th=" Price" class="cart__price">
                                        ${{$details['price'] * $details['quatity']}}
                                    </td>
                                    <td>
                                        <form action=" {{ route('cart.destroy', $id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                                <!-- <tr>
                                    <td class=" product__cart__item">
                                            <div class="product__cart__item__pic">
                                                <img src="./Image/785650c759f88845cf73cb5725fb177c.jpg " alt="">
                                            </div>
                                            <div class="product__cart__item__text">
                                                <h6>NIKE AIR FORCE 1 LOW SHADOW TRIPLE WHITE NAM NỮ</h6>

                                            </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price">950.000đ</td>
                                    <td class="cart__close"><i class="fa fa-close"></i></td>
                                </tr>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src="./Image/a25795f2297e5d942db43381d42debd5.jpg " alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>BALENCIAGA TRIPLE S BLACK CLEAR NAM, NỮ</h6>

                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price">1.600.000đ</td>
                                    <td class="cart__close"><i class="fa fa-close"></i></td>
                                </tr>
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src="./Image/3207b2c167bd85d6cad3aa61dfee6afc.jpg " alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6>MCQUEEN TRẮNG GÓT ĐEN 'NHUNG' NAM NỮ</h6>

                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price">550.000đ</td>
                                    <td class="cart__close"><i class="fa fa-close"></i></td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                    <div class="">

                        <div class="continue__btn">
                            <a href=" {{ route('cart') }}" class="btn btn-warning"><i>Tiếp
                                    tục</a>
                        </div>

                        <!-- <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="#"><i class=" fa fa-spinner"></i> Cập nhật</a>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- <div class="col-lg-4">
                    <div class="cart__discount">
                        <h6>Mã giảm giá</h6>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Áp dụng</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Tổng thanh toán</h6>
                        <ul>
                            <li>${{ $details['price'] * $details['quatity'] }}</li>
                            <li>${{ $total }}</li>
                             <li>Tổng <span>2.700.000đ</span></li> -->
                </ul>
                <!-- <a href="#" class="primary-btn">Thanh toán</a> -->
            </div>

        </div>
        </div>
        </div>
    </section>

    <!-- Shopping Cart Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer ">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="footer__about ">
                        <div class="footer__logo ">
                            <a href="# "><img src="./Image/LoGo.JPG " alt=" "></a>
                        </div>
                        <p>Lấy khách hàng làm trung tâm, tạo cảm hứng thiết kế</p>
                        <a href="# "><img src="img/payment.png " alt=" "></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6 ">
                    <div class="footer__widget ">
                        <h6>Mua sắm</h6>
                        <ul>
                            <li><a href="# ">Cửa hàng</a></li>
                            <li><a href="# ">Mẫu giày mới</a></li>
                            <li><a href="# ">Thông tin</a></li>
                            <li><a href="# ">Sale</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 ">
                    <div class="footer__widget ">
                        <h6>Liên hệ</h6>
                        <ul>
                            <li><a href="# ">Liên hệ với chúng tôi</a></li>
                            <li><a href="# ">Đổi trả</a></li>
                            <li><a href="# ">Phương thức thanh toán</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6 ">
                    <div class="footer__widget ">
                        <h6>NewLetter</h6>
                        <div class="footer__newslatter ">
                            <p>Hãy là người đầu tiên biết về những người mới đến, tìm sách, bán hàng & khuyến mãi!</p>
                            <form action="# ">
                                <input type="text " placeholder="Nhập email ">
                                <button type="submit "><span class="icon_mail_alt "></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src=" {{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/mixitup.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>