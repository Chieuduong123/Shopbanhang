<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description">
    <meta name="keywords" content="Dream-Sport, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dream Shop</title>


    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

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

    @include('header')
    <!-- Breadcrumb Section Begin -->
    <section style="width: 1360px; height: 700px;" class="breadcrumb-blog set-bg" data-setbg="{{asset('https://www.cleanipedia.com/images/v2/e69017016a0bc457b3a16b47fd6334bb-1800w-1200h.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-7 col-md-8 ">
                    <div>
                        <h2>Bộ sưu tập Dream Shop</h2>
                        <p style="color: red; font-size:20px"><b>Uy tín tạo nên chất lượng</b></p>
                        <a href="# " class="primary-btn">Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div style="width: 1360px; height: 700px;" class="hero__items set-bg" data-setbg="{{asset('https://www.cleanipedia.com/images/v2/e69017016a0bc457b3a16b47fd6334bb-1800w-1200h.jpg')}}">
                <div class=" container ">
                    <div class="row ">
                        <div class="col-xl-5 col-lg-7 col-md-8 ">
                            <div class="hero__text ">
                                <h2>Bộ sưu tập mới nhất của addidas</h2>
                                <p>Uy tín tạo nên chất lượng </p>
                                <a href="# " class="primary-btn">Mua ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <section class="banner spad ">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-6 offset-lg-4 ">
                    <div class="banner__item banner__item--middle ">
                        <a href="./shop-details.html">
                            <div class="banner__item__pic ">
                                <img src="{{asset('img/fa24e9c3624d2beebdda6adb575efb80.jpg')}} " alt=" ">
                            </div>
                        </a>
                        <div class="banner__item__text ">
                            <h2>Mẫu mới nhất của converst</h2>
                            <a href="#">Mua ngay</a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5 ">
                    <div class="banner__item banner__item--middle ">
                        <a href="./shop-details.html">
                            <div class="banner__item__pic ">
                                <img src="{{asset('img/670b04601785abd6b64c9d39318ce006.jpg')}} " alt=" ">
                            </div>
                        </a>
                        <div class="banner__item__text ">
                            <h2>Mẫu mới nhất của balenciaga</h2>
                            <a href="# ">Mua ngay</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 ">
                    <div class="banner__item banner__item--last ">
                        <a href="./shop-details.html">
                            <div class="banner__item__pic ">
                                <img src="{{asset('img/6f1ab589b7c8c5751c523c35ef73dadc.jpg')}} " alt=" ">
                            </div>
                        </a>
                        <div class="banner__item__text ">
                            <h2>Mẫu mới nhất của MLB Korea</h2>
                            <a href="# ">Mua ngay</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Section Begin -->
    <section class="product spad ">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-12 ">
                    <ul class="filter__controls ">
                        <li class="active " data-filter="* ">Sản phẩm bán chạy</li>
                        <li data-filter=".new-arrivals ">Sản phẩm mới</li>
                        <li data-filter=".hot-sales ">Hot Sales</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter ">
                @foreach($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals ">
                    <div class="product__item ">
                        <div class="product__item__pic set-bg " data-setbg="{{asset('img/'.$product->img)}}">
                            <span class="label ">New</span>
                            <ul class="product__hover ">
                                <li>
                                    <a href="# "><img src="{{asset('icon/heart.png')}} " alt=" "></a>
                                </li>
                                <li>
                                    <a href="# "><img src="{{asset('icon/compare.png')}} " alt=" ">
                                        <span>Compare</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('detail', $product->id) }}"><img src="{{asset('icon/search.png')}} "></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product__item__text ">
                            <h6>{{$product->name}}</h6>
                            <a href="{{ route('add.to.cart', $product->id) }}" class="add-cart ">+ Thêm vào giỏ hàng</a>
                            <h5>{{$product->price}}</h5>
                            <div class="product__color__select ">
                                <label for="pc-1 ">
                                    <input type="radio " id="pc-1 ">
                                </label>
                                <label class="active black " for="pc-2 ">
                                    <input type="radio " id="pc-2 ">
                                </label>
                                <label class="grey " for="pc-3 ">
                                    <input type="radio " id="pc-3 ">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
    </section>
    <!-- Categories Section Begin -->
    <section class="categories spad ">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-3 ">
                    <div class="categories__text ">
                        <h2> <span>Áp dụng cho chương trình khuyến mãi </span> <br /> từ 30/4- 20/5</h2>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="categories__hot__deal ">
                        <img src="{{asset('img/product-sale.png')}} " alt=" "> >
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 ">
                    <div class="categories__deal__countdown ">
                        <span>Hàng tặng không bán</span>
                        <h2>Khi mua đơn hàng trên 2 triệu đồng</h2>
                        <div class="categories__deal__countdown__timer " id="countdown ">
                            <div class="cd-item ">
                                <span>3</span>
                                <p>Days</p>
                            </div>
                            <div class="cd-item ">
                                <span>1</span>
                                <p>Hours</p>
                            </div>
                            <div class="cd-item ">
                                <span>50</span>
                                <p>Minutes</p>
                            </div>
                            <div class="cd-item ">
                                <span>18</span>
                                <p>Seconds</p>
                            </div>
                        </div>
                        <a href="# " class="primary-btn ">Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Instagram Section Begin -->
    <section class="instagram spad ">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-8 ">
                    <div class="instagram__pic ">
                        <div class="instagram__pic__item set-bg " data-setbg="{{asset('img/b8085d48a3df90f850f530e2bdf7b5f9.jpg')}} "></div>
                        <div class="instagram__pic__item set-bg " data-setbg="{{asset('img/78f5ecb064f2f9949cb8e71cb2ca7f9a.jpg')}} "></div>
                        <div class="instagram__pic__item set-bg " data-setbg="{{asset('img/2ef74a7b628be0c0e4caaabb9ee93d27.jpg')}} "></div>
                        <div class="instagram__pic__item set-bg " data-setbg="{{asset('img/55fabf1a9a61ca4c411805885585d9cf.jpg')}} "></div>
                        <div class="instagram__pic__item set-bg " data-setbg="{{asset('img/0b7a3f3b20ae5305a2457d072ec4cd86.jpg')}} "></div>
                        <div class="instagram__pic__item set-bg " data-setbg="{{asset('img/b6bb87e077ce604b24086b83b664f55b.jpg')}} "></div>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="instagram__text ">
                        <h2>JORDAN 1</h2>
                        <p>Sản phẩm bán chạy nhất của shop, dễ phối đồ, giá cả phải chăng, thích hợp cho một mùa hè đầy
                            năng động.</p>
                        <h3>#Dream-Sport</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->
    <!-- Instagram Section Begin -->
    <section class="instagram spad ">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-4 ">
                    <div class="instagram__text ">
                        <h2>BALENCIAGA</h2>
                        <p>Nắm bắt nhanh chóng và dẫn đầu xu hướng, hu hút được ánh nhìn của đám đông </p>
                        <h3>#Dream-Sport</h3>
                    </div>
                </div>
                <div class="col-lg-8 ">
                    <div class="instagram__pic ">
                        <div class="instagram__pic__item set-bg " data-setbg="{{asset('img/e9d976759fdcd93cca175e37ce4683aa.jpg')}}"></div>
                        <div class="instagram__pic__item set-bg " data-setbg="{{asset('img/6790cfbbde981518e299984c615fec63.jpg')}} "></div>
                        <div class="instagram__pic__item set-bg " data-setbg="{{asset('img/71f6b850de1a69222f6aa892b26d2bb1.jpg')}} "></div>
                        <div class="instagram__pic__item set-bg " data-setbg="{{asset('img/7ea1fda29f0d75848ba7ca0d289c75cf.jpg')}} "></div>
                        <div class="instagram__pic__item set-bg " data-setbg="{{asset('img/4aefffbcc12f19595973526c4d2f5969.jpg')}} "></div>
                        <div class="instagram__pic__item set-bg " data-setbg="{{asset('img/balenciaga-triple-s-red-black-clear-sole-nam.jpg')}} "></div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad ">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-12 ">
                    <div class="section-title ">
                        <span>Tin tức mới</span>
                        <h2>Xu hướng phối giày mới</h2>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-4 col-md-6 col-sm-6 ">
                    <div class="blog__item ">
                        <a href="./blog-details.html">
                            <div class="blog__item__pic set-bg " data-setbg="{{asset('img/Remini20210507074406534.jpg')}} "></div>
                        </a>
                        <div class="blog__item__text ">
                            <span><img src="{{asset('icon/calendar.png')}} " alt=" "> 16/7/2020</span>
                            <h5>Giày Sneaker balenciaga trang phục phong cách thời thượng</h5>
                            <a href="# ">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 ">
                    <div class="blog__item ">
                        <a href="./blog-details.html">
                            <div class="blog__item__pic set-bg " data-setbg="{{asset('img/blog-2.jpg')}} "></div>
                        </a>
                        <div class="blog__item__text ">
                            <span><img src="{{asset('icon/calendar.png')}} " alt=" "> 21 /7 2020</span>
                            <h5>Giày thể thao thời trang, trang phục mùa hè converst</h5>
                            <a href="# ">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 ">
                    <div class="blog__item ">
                        <a href="./blog-details.html">
                            <div class="blog__item__pic set-bg " data-setbg="{{asset('img/Remini20210507074513340.jpg')}} "></div>
                        </a>
                        <div class="blog__item__text ">
                            <span><img src="{{asset('icon/calendar.png')}} " alt=" "> 28 /8 2020</span>
                            <h5>Phong cách đường phố, Nike air jordan 1 của 1 nữ idol</h5>
                            <a href="# ">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    @include('footer')
    <!-- Js Plugins -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}} "></script>
    <script src="{{asset('js/bootstrap.min.js')}} "></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}} "></script>
    <script src="{{asset('js/jquery.nicescroll.min.js')}} "></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}} "></script>
    <script src="{{asset('js/jquery.countdown.min.js')}} "></script>
    <script src="{{asset('js/jquery.slicknav.js')}} "></script>
    <script src="{{asset('js/mixitup.min.js')}} "></script>
    <script src="{{asset('js/owl.carousel.min.js')}} "></script>
    <script src="{{asset('js/main.js')}} "></script>
    <script src="{{asset('js/jquery.magnifier.js')}} "></script>

</body>

</html>