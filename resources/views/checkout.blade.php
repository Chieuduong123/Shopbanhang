<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thanh Toán | Dream Shop</title>

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
    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{route('order')}}">
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <h6 class="coupon__code">
                                <h6 class="checkout__title">CHI TIẾT HÓA ĐƠN
                                </h6>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Họ<span>*</span></p>
                                            <input type="text" name="firstname">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Tên<span>*</span></p>
                                            <input name="lastname" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout__input">
                                    <p>Thành phố/Tỉnh<span>*</span></p>
                                    <input name="city" type=" text">
                                </div>
                                <div class="checkout__input">
                                    <p>Huyện/Quận<span>*</span></p>
                                    <input name="district" type="text">
                                </div>
                                <div class="checkout__input">
                                    <p>Xã/Phường<span>*</span></p>
                                    <input name="ward" type=" text">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Số điện thoại<span>*</span></p>
                                            <input name="phonenumber" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Email<span>*</span></p>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="continue__btn update__btn">
                                            <a href="{{route('cart')}}"><i class="fa fa-spinner"></i>Quay lại</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div style="width: 650px;" class="checkout__order">
                                <h4 class="order__title">Đơn hàng</h4>
                                {{-- <div class="checkout__order__products"><b>Sản Phẩm</b> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;<b>Số lượng</b><span><b>Tổng</b></span></div>
                                 @foreach( $infos as $info)
                                <ul class="checkout__total__products">
                                    <li>{{$info['name']}}&emsp; &emsp; &emsp; &emsp; &emsp;{{$info['quantity']}}<span>{{$info['total']}}</span></li>
                                </ul>
                               @endforeach --}} 
                                  <table class="table table-striped">
                                    <thead>
                                      <tr >
                                        <th>Sản phẩm</th>
                                        <th style="text-align: center">Số lượng</th>
                                        <th style="text-align: center">Tổng giá</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach( $infos as $info)
                                      <tr >
                                        <td>{{$info['name']}}</td>
                                        <td style="text-align: center">{{$info['quantity']}}</td>
                                        <td style="text-align: center">{{$info['total']}}</td>
                                      </tr>
                                     
                                      @endforeach
                                    </tbody>
                                  </table>
                                <ul class="checkout__total__all">
                                    <li>Tổng<span>{{$totalAll}}</span></li>
                                    <li>Phí vận chuyển<span>{{$transport_fee}}</span></li>
                                    <li>Giảm giá<span>{{$discount}}</span></li>
                                    <li>Tổng đơn hàng <span>{{$all_total}}</span></li>
                                </ul>
                                <b>Chọn hình thức thanh toán</b>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"checked>
                                    <label class="form-check-label" for="flexCheckDefault">
                                     Thanh toán khi nhận hàng
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        internet banking
                                    </label>
                                  </div>
                                  
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                                    <label class="form-check-label" for="flexCheckChecked">
                                     visa
                                    </label>
                                  </div>
                                <div class="continue__btn">
                                    <button type="submit" class="site-btn">Đặt hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    @include('footer')
    <!-- Js Plugins -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}">
    </script>
    <script src="{{asset('js/bootstrap.min.js')}}')}}"></script>
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
<script type="text/javascript">
</script>