<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Quản Lý Kho</title>

    <!-- Favicons -->
    <link href="{{asset('img/LoGo.JPG')}}" rel="icon">
    <link href="{{asset('img/LoGo.JPG')}}" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/styleadmin.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styleDemo.css')}}">
    <link rel="stylesheet" href="{{asset('css/Hieu1.css')}}">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/table-responsive.css')}}" rel="stylesheet">
    <style type="text/css">
    * {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
        word-wrap: break-word !important;
    }
    </style>
</head>

<body>
    <section id="container">

        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a class="navbar-brand " href="#">
                <img src="../Admin\Image/logo1.JPG" alt="" style="size: 50%;">
            </a>
            <!--logo end-->

            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="Đăng xuất" href="index">Đăng xuất</a></li>
                </ul>
            </div>
        </header>
        <!--header end-->

        <aside>
            <div id="sidebar" class="nav-collapse " tabindex="5000" style="overflow: hidden; outline: none;">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered">
                        <a href="#"><img src="{{asset('img/IMG_2720.JPG')}}" class="img-circle" width="80"></a>
                    </p>
                    <h5 class="centered">Ánh Dương</h5>
                    <li class="mt">
                        <a href="products">
                            <span>Thông Tin Kho</span>
                        </a>
                    </li>

                    <li class="sub-menu dcjq-parent-li">
                        <a>
                            <span>Trang Chủ</span>
                            <span class="dcjq-icon"></span></a>
                        <ul class="sub" style="display: none;">
                            <li><a href="users">Thông tin khách hàng</a></li>
                            <li><a href="products/create">Thêm sản phẩm mới</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>


        <section id="main-content">

            <section class="wrapper">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <h3><i class=" fa fa-angle-right"></i>Thông tin kho</h3>
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="content-panel">
                            <h4><i class="fa fa-angle-right"></i> Kho 1</h4>
                            <section id="unseen">


                                <table class=" table table-bordered table-striped
                                    table-condensed">
                                    <thead>
                                        <tr>
                                            <th>Mã</th>
                                            <th>Tên sản phẩm</th>
                                            <th class="numeric">Giá bán</th>
                                            <th class="numeric">Số lượng</th>
                                            <th>Mô tả</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    @foreach($products as $product)
                                    <tbody>
                                        <tr style="word-wrap: break-word;">
                                            <td>{{$product->id}}</td>
                                            <td style="width: 100px;">
                                                <p style=" width: 300px;">{{$product->name}}</p>
                                            </td>
                                            <td class=" numeric">{{$product->price}}</td>
                                            <td class="numeric">{{$product->count}}</td>
                                            <td style="word-wrap: break-word;">
                                                <p style=" width: 300px;">
                                                    {{$product->description}}</p>
                                            </td>
                                            <td>
                                                <form action=" {{ route('products.destroy',$product->id) }}"
                                                    method="POST">


                                                    <a class="btn btn-primary"
                                                        href="{{ route('products.edit',$product->id) }}">Edit</a>

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                            </td>

                                        </tr>
                                        <!-- <tr>
                                            <td>AAD</td>
                                            <td>Giày jordan1 màu xanh ngọc</td>
                                            <td class="numeric">450.000</td>
                                            <td class="numeric">800.000</td>
                                            <td class="numeric">500 đôi</td>
                                            <td class="numeric">100 đôi</td>
                                            <td class="numeric">300</td>
                                            <td class="numeric">9.000.000</td>
                                            <td class="numeric">20.200.000</td>
                                        </tr>
                                        <tr>
                                            <td>AAC</td>
                                            <td>Giày jordan1 màu xanh ngọc</td>
                                            <td class="numeric">450.000</td>
                                            <td class="numeric">800.000</td>
                                            <td class="numeric">500 đôi</td>
                                            <td class="numeric">100 đôi</td>
                                            <td class="numeric">300</td>
                                            <td class="numeric">9.000.000</td>
                                            <td class="numeric">20.200.000</td>
                                        </tr>
                                        <tr>
                                            <td>AAD</td>
                                            <td>Giày jordan1 màu xanh ngọc</td>
                                            <td class="numeric">450.000</td>
                                            <td class="numeric">800.000</td>
                                            <td class="numeric">500 đôi</td>
                                            <td class="numeric">100 đôi</td>
                                            <td class="numeric">300</td>
                                            <td class="numeric">9.000.000</td>
                                            <td class="numeric">20.200.000</td>
                                        </tr>
                                        <tr>
                                            <td>AAC</td>
                                            <td>Giày jordan1 màu xanh ngọc</td>
                                            <td class="numeric">450.000</td>
                                            <td class="numeric">800.000</td>
                                            <td class="numeric">500 đôi</td>
                                            <td class="numeric">100 đôi</td>
                                            <td class="numeric">300</td>
                                            <td class="numeric">9.000.000</td>
                                            <td class="numeric">20.200.000</td>
                                        </tr>
                                        <tr>
                                            <td>AAD</td>
                                            <td>Giày jordan1 màu xanh ngọc</td>
                                            <td class="numeric">450.000</td>
                                            <td class="numeric">800.000</td>
                                            <td class="numeric">500 đôi</td>
                                            <td class="numeric">100 đôi</td>
                                            <td class="numeric">300</td>
                                            <td class="numeric">9.000.000</td>
                                            <td class="numeric">20.200.000</td>
                                        </tr>
                                        <tr>
                                            <td>AAC</td>
                                            <td>Giày jordan1 màu xanh ngọc</td>
                                            <td class="numeric">450.000</td>
                                            <td class="numeric">800.000</td>
                                            <td class="numeric">500 đôi</td>
                                            <td class="numeric">100 đôi</td>
                                            <td class="numeric">300</td>
                                            <td class="numeric">9.000.000</td>
                                            <td class="numeric">20.200.000</td>
                                        </tr>
                                        <tr>
                                            <td>AAD</td>
                                            <td>Giày jordan1 màu xanh ngọc</td>
                                            <td class="numeric">450.000</td>
                                            <td class="numeric">800.000</td>
                                            <td class="numeric">500 đôi</td>
                                            <td class="numeric">100 đôi</td>
                                            <td class="numeric">300</td>
                                            <td class="numeric">9.000.000</td>
                                            <td class="numeric">20.200.000</td>
                                        </tr>
                                        <tr>
                                            <td>AAC</td>
                                            <td>Giày jordan1 màu xanh ngọc</td>
                                            <td class="numeric">450.000</td>
                                            <td class="numeric">800.000</td>
                                            <td class="numeric">500 đôi</td>
                                            <td class="numeric">100 đôi</td>
                                            <td class="numeric">300</td>
                                            <td class="numeric">9.000.000</td>
                                            <td class="numeric">20.200.000</td>
                                        </tr>
                                        <tr>
                                            <td>AAD</td>
                                            <td>Giày jordan1 màu xanh ngọc</td>
                                            <td class="numeric">450.000</td>
                                            <td class="numeric">800.000</td>
                                            <td class="numeric">500 đôi</td>
                                            <td class="numeric">100 đôi</td>
                                            <td class="numeric">300</td>
                                            <td class="numeric">9.000.000</td>
                                            <td class="numeric">20.200.000</td>
                                        </tr>
                                        <tr>
                                            <td>AAC</td>
                                            <td>Giày jordan1 màu xanh ngọc</td>
                                            <td class="numeric">450.000</td>
                                            <td class="numeric">800.000</td>
                                            <td class="numeric">500 đôi</td>
                                            <td class="numeric">100 đôi</td>
                                            <td class="numeric">300</td>
                                            <td class="numeric">9.000.000</td>
                                            <td class="numeric">20.200.000</td>
                                        </tr>
                                        <tr>
                                            <td>AAD</td>
                                            <td>Giày jordan1 màu xanh ngọc</td>
                                            <td class="numeric">450.000</td>
                                            <td class="numeric">800.000</td>
                                            <td class="numeric">500 đôi</td>
                                            <td class="numeric">100 đôi</td>
                                            <td class="numeric">300</td>
                                            <td class="numeric">9.000.000</td>
                                            <td class="numeric">20.200.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="content-panel">
                            <h4><i class="fa fa-angle-right"></i>Kho 2</h4>
                            <section id="no-more-tables">
                                <table class="table table-bordered table-striped table-condensed cf">

                                    <thead class="cf">
                                        <tr>
                                            <th>Mã</th>
                                            <th>Tên sản phẩm</th>
                                            <th class="numeric">Giá nhập</th>
                                            <th class="numeric">Giá nhập</th>
                                            <th class="numeric">Còn lại</th>
                                            <th class="numeric">Đang nhập</th>
                                            <th class="numeric">Đã bán</th>
                                            <th class="numeric">Lợi nhuận trong tháng</th>
                                            <th class="numeric">Tổng lợi nhuận</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-title="Code">AAC</td>
                                            <td>Giày jordan1 màu xanh ngọc</td>
                                            <td class="numeric">450.000</td>
                                            <td class="numeric">800.000</td>
                                            <td class="numeric">500 đôi</td>
                                            <td class="numeric">100 đôi</td>
                                            <td class="numeric">300</td>
                                            <td class="numeric">9.000.000</td>
                                            <td class="numeric">20.200.000</td>
                                        </tr>
                                        <tr>
                                            <td data-title="Code">AAD</td>
                                            <td>Giày jordan1 màu xanh ngọc</td>
                                            <td class="numeric">450.000</td>
                                            <td class="numeric">800.000</td>
                                            <td class="numeric">500 đôi</td>
                                            <td class="numeric">100 đôi</td>
                                            <td class="numeric">300</td>
                                            <td class="numeric">9.000.000</td>
                                            <td class="numeric">20.200.000</td>
                                        </tr>
                                        <tr>
                                            <td data-title="Code">AAC</td>
                                            <td>Giày jordan1 màu xanh ngọc</td>
                                            <td class="numeric">450.000</td>
                                            <td class="numeric">800.000</td>
                                            <td class="numeric">500 đôi</td>
                                            <td class="numeric">100 đôi</td>
                                            <td class="numeric">300</td>
                                            <td class="numeric">9.000.000</td>
                                            <td class="numeric">20.200.000</td>
                                        </tr>
                                        <tr>
                                            <td data-title="Code">AAD</td>
                                            <td>Giày jordan1 màu xanh ngọc</td>
                                            <td class="numeric">450.000</td>
                                            <td class="numeric">800.000</td>
                                            <td class="numeric">500 đôi</td>
                                            <td class="numeric">100 đôi</td>
                                            <td class="numeric">300</td>
                                            <td class="numeric">9.000.000</td>
                                            <td class="numeric">20.200.000</td>
                                        </tr>
                                        <tr>
                                            <td data-title="Code">AAC</td>
                                            <td>Giày jordan1 màu xanh ngọc</td>
                                            <td class="numeric">450.000</td>
                                            <td class="numeric">800.000</td>
                                            <td class="numeric">500 đôi</td>
                                            <td class="numeric">100 đôi</td>
                                            <td class="numeric">300</td>
                                            <td class="numeric">9.000.000</td>
                                            <td class="numeric">20.200.000</td>
                                        </tr>
                                        <tr>
                                            <td data-title="Code">AAD</td>
                                            <td>Giày jordan1 màu xanh ngọc</td>
                                            <td class="numeric">450.000</td>
                                            <td class="numeric">800.000</td>
                                            <td class="numeric">500 đôi</td>
                                            <td class="numeric">100 đôi</td>
                                            <td class="numeric">300</td>
                                            <td class="numeric">9.000.000</td>
                                            <td class="numeric">20.200.000</td>
                                        </tr> -->


                                    </tbody>
                                    @endforeach
                                </table>
                                <div class="d-flex justify-content-center">
                                    {{$products->links("pagination::bootstrap-4")}}</div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </section>



        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script class="include" type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
        <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <!--common script for all pages-->
        <script src="{{asset('js/common-scripts.js')}}"></script>
        <!--script for this page-->




    </section>
    <div id="ascrail2000" class="nicescroll-rails"
        style="width: 3px; z-index: auto; background: rgb(64, 64, 64); cursor: default; position: fixed; top: 0px; left: 207px; height: 754px; display: none; opacity: 0;">
        <div
            style="position: relative; top: 0px; float: right; width: 3px; height: 0px; background-color: rgb(78, 205, 196); background-clip: padding-box; border-radius: 10px;">
        </div>
    </div>
    <div id="ascrail2000-hr" class="nicescroll-rails"
        style="height: 3px; z-index: auto; background: rgb(64, 64, 64); top: 751px; left: 0px; position: fixed; cursor: default; display: none; opacity: 0;">
        <div
            style="position: relative; top: 0px; height: 3px; width: 0px; background-color: rgb(78, 205, 196); background-clip: padding-box; border-radius: 10px; left: 0px;">
        </div>
    </div>
</body>

</html>