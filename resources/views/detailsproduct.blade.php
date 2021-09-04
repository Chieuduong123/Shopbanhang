<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shop details| shop giày</title>

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
                <a href="login">Đăng nhập</a>
                <a href="register">Đăng ký</a>
                <a href="#">Câu hỏi</a>
            </div>

        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="{{asset('icon/search.png')}}" alt=""></a>
            <a href="#"><img src="{{asset('icon/heart.png')}}" alt=""></a>
            <a href="#"><img src="{{asset('icon/cart.png')}}" alt=""> <span>0</span></a>
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
                                <a href="login">Đăng nhập</a>
                                <a href="register">Đăng Ký</a>
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
                        <a href="./index.html"><img src="{{asset('img/LoGo.JPG')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="index">Trang chủ</a></li>
                            <li class="active"><a href="shop">Cửa hàng</a></li>
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
                        <a href="#" class="search-switch"><img src="{{asset('icon/search.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('icon/heart.png')}}" alt=""></a>
                        <a href="#"><img src="{{asset('icon/cart.png')}}" alt=""> <span>0</span></a>
                        <div class="price">$0.00</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->


    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="index">Tranh chủ</a>
                            <a href="shop">Cửa hàng</a>
                            <span>Chi tiết sản phẩm</span>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="./Image/anh7.jpg">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="./Image/anh14.jpg">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="./Image/anh13.jpg">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="./Image/anh12.jpg">

                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                <div class="col-lg-20 col-md-30">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__pic__item">
                                <img src="./Image/anh7.jpg" alt="">
                            </div>
                        </div>
                        <!-- <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="product__details__pic__item">
                                <img src="./Image/anh14.jpg" alt="">
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="product__details__pic__item">
                                <img src="./Image/anh13.jpg" alt="">
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-4" role="tabpanel">
                            <div class="product__details__pic__item">
                                <img src="./Image/anh12.jpg" alt="">

                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h4>Air jordan 1 đen trắng</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span> - 5 Reviews</span>
                            </div>
                            <h3>2.000.000đ <span>500.000đ</span></h3>
                            <p>Người Jordan đã bắt đầu tất cả. Air Jordan 1 là mẫu giày quan trọng nhất trong lịch sử
                                giày sneaker. Tìm mọi phối màu thiết yếu của Air Jordan 1 High tại đây, cũng như nhiều
                                bản phát hành của Air Jordan 1 Low và Air Jordan
                                1 Mid.</p>
                            <div class="product__details__option">
                                <div class="product__details__option__size">
                                    <span>Size:</span>
                                    <label for="xxl">37
                                        <input type="radio" id="xxl">
                                    </label>
                                    <label class="active" for="xl">38
                                        <input type="radio" id="xl">
                                    </label>
                                    <label for="l">39
                                        <input type="radio" id="l">
                                    </label>
                                    <label for="sm">40
                                        <input type="radio" id="sm">
                                    </label>
                                </div>
                            </div>
                            <div class="product__details__cart__option">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1">
                                    </div>
                                </div>
                                <a href="#" class="primary-btn">Thêm vào giỏ hàng</a>
                            </div>
                            <div class="product__details__last__option">
                                <h5><span>Đảm bảo thanh toán an toàn</span></h5>
                                <img src="img/shop-details/details-payment.png" alt="">
                                <ul>
                                    <li><span>Mã sản phẩm:</span> jd303</li>
                                    <li><span>Thể loại:</span> nike</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-5" role="tab">Thông tin</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <p class="note">Miễn phí giao hàng đối với đơn hàng trên 1 triệu đồng, giảm 30%
                                            chp đơn hàng trên 2 triệu đồng .Chương trình khuyến mãi áp dụng từ 30/4 đến
                                            20/5/2021</p>
                                        <div class="product__details__tab__content__item">
                                            <h5>Điều khoản</h5>
                                            <p>Trong quá trình vận chuyển nếu có nhầm lẫn và sai sót, shop xin hoàn tiền
                                                100%, không chấp nhận đổi hàng trong điều kiện hàng đã qua sử dụng,
                                                không còn nguyên hộp, đổi trả trong vòng 1 tuần khi nhận được hàng.</p>
                                        </div>
                                        <div class="product__details__tab__content__item">
                                            <h5>Thanh toán</h5>
                                            <p> khách hàng khi mua hàng tại male fashion có thể thanh toán theo các hình
                                                thức sau: chuyển khoản ngân hàng với BIDV,MPBank, Airpay, Momo....</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->

    <!-- Related Section Begin -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Sản phẩm có liên quan </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg"
                            data-setbg="./Image/b8085d48a3df90f850f530e2bdf7b5f9.jpg ">
                            <span class="label">New</span>
                            <ul class="product__hover">
                                <li>
                                    <a href="#"><img src="img/icon/heart.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/icon/search.png" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Jordan 1 đen mix trắng, đỏ</h6>
                            <a href="#" class="add-cart">+ Thêm vào giỏ hàng</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>2.200.000đ</h5>
                            <div class="product__color__select">
                                <label for="pc-1">
                                    <input type="radio" id="pc-1">
                                </label>
                                <label class="active black" for="pc-2">
                                    <input type="radio" id="pc-2">
                                </label>
                                <label class="grey" for="pc-3">
                                    <input type="radio" id="pc-3">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg"
                            data-setbg="./Image/78f5ecb064f2f9949cb8e71cb2ca7f9a.jpg">
                            <ul class="product__hover">
                                <li>
                                    <a href="#"><img src="img/icon/heart.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/icon/search.png" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Jordan 1 hồng trắng</h6>
                            <a href="#" class="add-cart">+ Thêm vào giỏ hàng</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>1.300.000đ</h5>
                            <div class="product__color__select">
                                <label for="pc-4">
                                    <input type="radio" id="pc-4">
                                </label>
                                <label class="active black" for="pc-5">
                                    <input type="radio" id="pc-5">
                                </label>
                                <label class="grey" for="pc-6">
                                    <input type="radio" id="pc-6">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg"
                            data-setbg="./Image/2ef74a7b628be0c0e4caaabb9ee93d27.jpg " ">
                            <span class=" label ">Sale</span>
                            <ul class=" product__hover ">
                                <li>
                                    <a href=" # "><img src=" img/icon/heart.png " alt=" "></a>
                                </li>
                                <li>
                                    <a href=" # "><img src=" img/icon/compare.png " alt=" "> <span>Compare</span></a>
                                </li>
                                <li>
                                    <a href=" # "><img src=" img/icon/search.png " alt=" "></a>
                                </li>
                            </ul>
                        </div>
                        <div class=" product__item__text ">
                            <h6>Jordan 1 mẫu mới mix tím hồng</h6>
                            <a href=" # " class=" add-cart ">+ Thêm vào giỏ hàng</a>
                            <div class=" rating ">
                                <i class=" fa fa-star "></i>
                                <i class=" fa fa-star "></i>
                                <i class=" fa fa-star "></i>
                                <i class=" fa fa-star "></i>
                                <i class=" fa fa-star-o "></i>
                            </div>
                            <h5>2.200.000đ</h5>
                            <div class=" product__color__select ">
                                <label for=" pc-7 ">
                                    <input type=" radio " id=" pc-7 ">
                                </label>
                                <label class=" active black " for=" pc-8 ">
                                    <input type=" radio " id=" pc-8 ">
                                </label>
                                <label class=" grey " for=" pc-9 ">
                                    <input type=" radio " id=" pc-9 ">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-3 col-md-6 col-sm-6 col-sm-6 ">
                    <div class=" product__item ">
                        <div class=" product__item__pic set-bg " data-setbg="
                            ./Image/55fabf1a9a61ca4c411805885585d9cf.jpg ">
                            <ul class=" product__hover ">
                                <li>
                                    <a href=" # "><img src=" img/icon/heart.png " alt=" "></a>
                                </li>
                                <li>
                                    <a href=" # "><img src=" img/icon/compare.png " alt=" "> <span>Compare</span></a>
                                </li>
                                <li>
                                    <a href=" # "><img src=" img/icon/search.png " alt=" "></a>
                                </li>
                            </ul>
                        </div>
                        <div class=" product__item__text ">
                            <h6>Jordan 1 xanh dương</h6>
                            <a href=" # " class=" add-cart ">+ Thêm vào giỏ hàng</a>
                            <div class=" rating ">
                                <i class=" fa fa-star-o "></i>
                                <i class=" fa fa-star-o "></i>
                                <i class=" fa fa-star-o "></i>
                                <i class=" fa fa-star-o "></i>
                                <i class=" fa fa-star-o "></i>
                            </div>
                            <h5>3.000.000đ</h5>
                            <div class=" product__color__select ">
                                <label for=" pc-10 ">
                                    <input type=" radio " id=" pc-10 ">
                                </label>
                                <label class=" active black " for=" pc-11 ">
                                    <input type=" radio " id=" pc-11 ">
                                </label>
                                <label class=" grey " for=" pc-12 ">
                                    <input type=" radio " id=" pc-12 ">
                                </label>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Related Section End -->
    <!-- Footer Section Begin -->
    <footer class=" footer ">
        <div class=" container ">
            <div class=" row ">
                <div class=" col-lg-3 col-md-6 col-sm-6 ">
                    <div class=" footer__about ">
                        <div class=" footer__logo ">
                            <a href=" # "><img src="{{asset('img/LoGo.JPG')}} " alt=" "></a>
                        </div>
                        <p>Lấy khách hàng làm trung tâm, tạo cảm hứng thiết kế</p>
                        <a href=" # "><img src=" {{asset('img/payment.png')}} " alt=" "></a>
                    </div>
                </div>
                <div class=" col-lg-2 offset-lg-1 col-md-3 col-sm-6 ">
                    <div class=" footer__widget ">
                        <h6>Mua sắm</h6>
                        <ul>
                            <li><a href=" # ">Cửa hàng</a></li>
                            <li><a href=" # ">Mẫu giày mới</a></li>
                            <li><a href=" # ">Thông tin</a></li>
                            <li><a href=" # ">Sale</a></li>
                        </ul>
                    </div>
                </div>
                <div class=" col-lg-2 col-md-3 col-sm-6 ">
                    <div class=" footer__widget ">
                        <h6>Liên hệ</h6>
                        <ul>
                            <li><a href=" # ">Liên hệ với chúng tôi</a></li>
                            <li><a href=" # ">Đổi trả</a></li>
                            <li><a href=" # ">Phương thức thanh toán</a></li>

                        </ul>
                    </div>
                </div>
                <div class=" col-lg-3 offset-lg-1 col-md-6 col-sm-6 ">
                    <div class=" footer__widget ">
                        <h6>NewLetter</h6>
                        <div class=" footer__newslatter ">
                            <p>Hãy là người đầu tiên biết về những người mới đến, tìm sách, bán hàng & khuyến mãi!</p>
                            <form action=" # ">
                                <input type=" text " placeholder=" Nhập email ">
                                <button type=" submit "><span class=" icon_mail_alt "></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class=" search-model ">
        <div class=" h-100 d-flex align-items-center justify-content-center ">
            <div class=" search-close-switch ">+</div>
            <form class=" search-model-form ">
                <input type=" text " id=" search-input " placeholder=" Search here..... ">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src=" {{asset('js/jquery-3.3.1.min.js')}} "></script>
    <script src=" {{asset('js/bootstrap.min.js')}} "></script>
    <script src=" {{asset('js/jquery.nice-select.min.js')}} "></script>
    <script src=" {{asset('js/jquery.nicescroll.min.js')}} "></script>
    <script src=" {{asset('js/jquery.magnific-popup.min.js')}} "></script>
    <script src=" {{asset('js/jquery.countdown.min.js')}} "></script>
    <script src=" {{asset('js/jquery.slicknav.js')}} "></script>
    <script src=" {{asset('js/mixitup.min.js')}} "></script>
    <script src=" {{asset('js/owl.carousel.min.js')}} "></script>
    <script src=" {{asset('js/main.js')}} "></script>
</body>

</html>