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
    <link rel="stylesheet" href="{{asset('css/styledt.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/reponsive.css')}}" type="text/css">
</head>

<body>
    @include('header')
    <!-- Shop Details Section Begin -->
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100"
                                    src="{{ asset('img/'.$product->img) }}" alt="First slide">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2>{{$product->name}}</h2>
                        <br>
                        <h5 style="font-size: 30px;">{{$product->price}}</h5>
                        <p>{{$product->description}}</p>
                        <li>
                            <br>
                            <span>Màu sắc</span>
                            <div class="color__checkbox">
                                <label for="red">
                                    <input type="radio" name="color__radio" id="red" checked>
                                    <span class="checkmark"></span>
                                </label>
                                <label for="black">
                                    <input type="radio" name="color__radio" id="black">
                                    <span class="checkmark black-bg"></span>
                                </label>
                                <label for="grey">
                                    <input type="radio" name="color__radio" id="grey">
                                    <span class="checkmark grey-bg"></span>
                                </label>
                            </div>
                        </li>
                        <div>
                            <br>
                            <span>Số lượng</span>
                            <div class="quantity">
                                <div class="">
                                    <input type="number" style="width: 50px; text-align: center;" value="1">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="price-box-bar">
                            <div class="cart-and-bay-btn">

                                <a href="{{ route('add.to.cart', $product->id) }}" class="primary-btn">Thêm vào giỏ
                                    hàng</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

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
                @foreach($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('img/'.$product->img)}}">
                            <span class=" label">New</span>
                            <ul class="product__hover">
                                <li>
                                    <a href="#"><img src="{{asset('icon/heart.png')}}" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('icon/compare.png')}}" alt="">
                                        <span>Compare</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('detail', $product->id) }}"><img
                                            src=" {{asset('icon/search.png')}}" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>{{$product->name}}</h6>
                            <a href="{{ route('add.to.cart', $product->id) }}" class="add-cart">+ Thêm vào giỏ
                                hàng</a>

                            <h5>{{$product->price}}</h5>
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
                @endforeach
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