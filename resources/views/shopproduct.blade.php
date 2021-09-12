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
</head>

<body>
    @include('header')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Cửa hàng</h4>
                        <div class="breadcrumb__link">
                            <a href="index" style="color: black;">Trang Chủ ></a>
                            <span>Cửa hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">

                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseTwo">Thương hiệu</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__brand">
                                                <ul>
                                                    <li><a href="#">Adidas</a></li>
                                                    <li><a href="#">Nike</a></li>
                                                    <li><a href="#">MLB Korea</a></li>
                                                    <li><a href="#">Balenciaga</a></li>
                                                    <li><a href="#">Gucci</a></li>
                                                    <li><a href="#">Converse</a></li>
                                                    <li><a href="#">Vans</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseThree">Giá</a>
                                    </div>
                                    <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__price">
                                                <ul>
                                                    <li><a href="#">&lsaquo;500.000đ</a></li>
                                                    <li><a href="#">500.000-1.000.000đ</a></li>
                                                    <li><a href="#">1.000.000-1.500.000đ</a></li>
                                                    <li><a href="#">1.500.000-2.000.000đ</a></li>

                                                    <li><a href="#">&rsaquo;2.000.000đ</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseFour">Size</a>
                                    </div>
                                    <div id="collapseFour" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__size">
                                                <label for="xs">35
                                                    <input type="radio" id="35">
                                                </label>
                                                <label for="sm">36
                                                    <input type="radio" id="36">
                                                </label>
                                                <label for="md">37
                                                    <input type="radio" id="37">
                                                </label>
                                                <label for="xl">38
                                                    <input type="radio" id="38">
                                                </label>
                                                <label for="2xl">39
                                                    <input type="radio" id="39">
                                                </label>
                                                <label for="xxl">40
                                                    <input type="radio" id="40">
                                                </label>
                                                <label for="3xl">41
                                                    <input type="radio" id="41">
                                                </label>
                                                <label for="4xl">42
                                                    <input type="radio" id="42">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Sản phẩm</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <p>Sắp xếp theo</p>
                                    <select>
                                        <option value="">Thấp -> Cao</option>
                                        <option value="">500->2.000.000đ</option>
                                        <option value="">Trên 2.000.000</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{asset('img/'.$product->img)}}">
                                    <ul class="product__hover">
                                        <li>
                                            <a href="#"><img src="{{asset('icon/heart.png')}}" alt=""></a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="{{asset('icon/compare.png')}}" alt=""> </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('detail', $product->id) }}">
                                                <img src=" {{asset('icon/search.png')}}" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>{{$product->name}}</h6>
                                    <a href="{{ route('add.to.cart', $product->id) }}" class="add-cart" role="button">+
                                        Thêm vào giỏ
                                        hàng
                                    </a>
                                    <h5>{{$product->price}}</h5>
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
                        @endforeach

                    </div>
                    <div class="d-flex justify-content-center">
                        {{$products->links("pagination::bootstrap-4")}}</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
    @include('footer')
    <!-- Js Plugins -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/mixitup.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>