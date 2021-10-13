
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
 
<div class="product__details__pic">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="product__details__breadcrumb">
                    <a href="./index.html">Tranh chủ</a><
                    <a href="./shop.html">Sản phẩm</a><
                    <span>Chi tiết sản phẩm</span>
                </div>
            </div>
        </div>
        <!-- cccc -->
        <div class="row">
            <div class="col-lg-6 col-md-6">
            <a class="nav-link " data-toggle="tab" href="#tabs-1" role="tab">
                            <div class="product__thumb__pic set-bg" data-setbg="{{ asset('img/'.$product->img) }}">
                            <img src="{{ asset('img/'.$product->img) }}" alt="" style="width: 70%;">
                            </div>
                        </a>
            </div>
            <div class="col-lg-6 col-md-6">
            <div class="product__details__text">
                    <h4> {{$product->name}} </h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <span> - 50 Reviews</span>
                    </div>
                    <h3> {{$product->price}}<span>500.000đ</span></h3>
                    <p> {{$product->description}}</p>
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
                                <div class="">
                                    <input type="number" style="width: 50px; text-align: center;" value="1">
                                </div>
                            </div>
                       <a href="{{ route('add.to.cart', $product->id) }}"><button type="submit" name="submit_cart" class="primary-btn" >Thêm vào giỏ hàng</button></a> 
                       
                       

                    </div>

                    <div class="product__details__last__option">
                        <h5><span>Đảm bảo thanh toán an toàn</span></h5>
                        <img src="{{asset('img/payment.png')}}" alt="" style="width: 50%;">
                     
                    </div>
                </div>
            </div>
          
        </div>
        
        <!-- abc -->
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
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span> - 50 Reviews</span>
                            </div>
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