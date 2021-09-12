<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi Tiết Sản Phẩm | Dream Shop</title>

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
    @include('header')
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
                <div class="col-lg-15 col-md-20">
                    <div class="tab-pane active">
                        <div class="product__details__pic__item">
                            <img style="height: 35% ;width: 35%" src="{{ asset('img/'.$product->img) }}" alt="">
                        </div>
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
                            <h4>{{$product->name}}</h4>
                            <h3>{{$product->price}}</h3>
                            <p>{{$product->description}}</p>
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
                                <br>
                                <br>
                                <div class="product__details__cart__option">
                                    <div class="quantity">
                                        <div class="">
                                            <input type="number" style="width: 50px; text-align: center;" value="1">
                                        </div>
                                    </div>
                                    <a href="#" class="primary-btn">Thêm vào giỏ hàng</a>
                                </div>
                                <div class="product__details__last__option">
                                    <h5><span>Đảm bảo thanh toán an toàn</span></h5>
                                    <img src="img/shop-details/details-payment.png" alt="">
                                    <ul>
                                        <li>Mã sản phẩm: {{$product->id}}</li>
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
                                        <a class="nav-link active" data-toggle="tab" href="#tabs-5" role="tab">Thông
                                            tin</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                        <div class="product__details__tab__content">
                                            <p class="note"></p>
                                            <div class="product__details__tab__content__item">
                                                <h5>Điều khoản</h5>
                                                <p>Trong quá trình vận chuyển nếu có nhầm lẫn và sai sót, shop xin hoàn
                                                    tiền
                                                    100%, không chấp nhận đổi hàng trong điều kiện hàng đã qua sử dụng,
                                                    không còn nguyên hộp, đổi trả trong vòng 1 tuần khi nhận được hàng.
                                                </p>
                                            </div>
                                            <div class="product__details__tab__content__item">
                                                <h5>Thanh toán</h5>
                                                <p> khách hàng khi mua hàng tại male fashion có thể thanh toán theo các
                                                    hình
                                                    thức sau: chuyển khoản ngân hàng với BIDV,MPBank, Airpay, Momo....
                                                </p>
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
                        <div class="product__item__pic set-bg" data-setbg="">
                            <span class=" label">New</span>
                            <ul class="product__hover">
                                <li>
                                    <a href="#"><img src="img/icon/heart.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/icon/compare.png" alt="">
                                        <span>Compare</span></a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/icon/search.png" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Jordan 1 đen mix trắng, đỏ</h6>
                            <a href="#" class="add-cart">+ Thêm vào giỏ hàng</a>

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
            </div>
        </div>
    </section>
    <!-- Related Section End -->
    @include('footer')

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