<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Successful | Dream Shop</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

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
    <section class="breadcrumb-blog set-bg" style="height: 200px;" data-setbg="https://img.freepik.com/free-vector/gradient-dynamic-lines-background_23-2149020285.jpg?size=626&ext=jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color: white;">Bạn đã đặt hàng thành công!</h3><br>
                    <p style="color: white; ">Cùng Dream Shop bảo vệ quyền lợi của bạn - chỉ nhận hàng khi đơn hàng ở trạng thái "Đang giao hàng"</p>
                </div>
            </div>
        </div>
    </section><br>
    <section class="breadcrumb-blog set-bg" style="height: 100px;" data-setbg="">
        <div class="container"><br>
            <h5 style="color: orange;"><b>Tham gia để nhận được Xu và mã giảm giá</b></h5><br>
            <div style="text-align: center;" class="row">
                 <img style="height: 90px;" src="https://cdnb.artstation.com/p/assets/images/images/015/999/237/large/polina-neizviestna-asset.jpg?1550514052">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                 <img style="height: 90px;" src="https://static.thenounproject.com/png/3030004-200.png">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                 <img style="height: 90px;" src="https://previews.123rf.com/images/anwarsikumbang/anwarsikumbang1707/anwarsikumbang170700032/82515288-shop-cart-game-asset-icon-sign-symbol-button-vector-art.jpg">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                 <img style="height: 90px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXM04H3f6GKMEl1mRqQS_pCUTwq4fpMZoG5g&usqp=CAU">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                 <img style="height: 90px;" src="https://cdn-icons-png.flaticon.com/128/2069/2069534.png">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                 <img style="height: 90px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhtYqa_Fsb4nEazOLpvwzTK2rVKTmbLAeyrA4DeGiIWZNgj3ZgxejV3qh0DlFwBrPW0cE&usqp=CAU">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                 <img style="height: 90px;" src="https://previews.123rf.com/images/anwarsikumbang/anwarsikumbang1705/anwarsikumbang170500379/78741644-shop-cart-video-game-asset-menu-icon-button-layer-vector-art-illustration.jpg">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                 <img style="height: 90px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRK7LIhujJH0yNrvX_yK4hALN3bj0t5eTZMqkDTmtgNGqoKgOvteQ0DzPyILdd-3j5qqGY&usqp=CAU">&ensp;&ensp;&ensp;
                 <img style="height: 90px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRERqZaz6r_GVopOzYKn9SrnCQ9dynj7oKAl_yuGaKg989awGoyyV_qbXYwNVP89NQYrWU&usqp=CAU">
                </div>
               
            </div>
        </div>
    </section><br><br><br>
    <!-- Breadcrumb Section End -->
    <h4 style="text-align: center;">---- Có thể bạn cũng thích ----</h4>


     <!-- Related Section Begin -->
     <section class="related spad">
        <div class="container">
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