<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Admin Add Products </title>

    <!-- Favicons -->
    <link href="../Admin\Image/logo1.JPG" rel="icon">
    <link href="../Admin\Image/logo1.JPG" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/styleadmin.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styleDemo.css')}}">
    <link rel="stylesheet" href=".{{asset('css/Hieu1.css')}}">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/table-responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <style type="text/css">
    * {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
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
            <div class="nav notify-row" id="top_menu">
                <ul class="nav top-menu">

                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="indexadmin.html#" aria-expanded="false">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">Bạn có 5 bình luận</p>
                            </li>
                            <li>
                                <a href="indexadmin.html#">
                                    <span class="photo"><img alt="avatar" src="../Admin\Image/Anh10.jpeg"></span>
                                    <span class="subject">
                                        <span class="from">Trần Tuấn</span>
                                        <span class="time">Bây giờ</span>
                                    </span>
                                    <span class="message">
                                        Cao 1m7 mặc được ko ạ?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="indexadmin.html#">
                                    <span class="photo"><img alt="avatar" src="../Admin\Image/Anh11.jpeg"></span>
                                    <span class="subject">
                                        <span class="from">Hoàng Nhi</span>
                                        <span class="time">40 phút trước</span>
                                    </span>
                                    <span class="message">
                                        Chất vải tốt không?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="indexadmin.html#">
                                    <span class="photo"><img alt="avatar" src="../Admin\Image/Anh12.jpeg"></span>
                                    <span class="subject">
                                        <span class="from">Nguyễn Anh</span>
                                        <span class="time">2 giờ trước</span>
                                    </span>
                                    <span class="message">
                                        Set này có hợp không ạ?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="indexadmin.html#">
                                    <span class="photo"><img alt="avatar" src="../Admin\Image/Anh8.jpeg"></span>
                                    <span class="subject">
                                        <span class="from">Nguyễn Nam</span>
                                        <span class="time">4 giờ trước/span&gt;
                                        </span>
                                        <span class="message">
                                            Cái này sao ạ?
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="indexadmin.html#">Xem tất cả bình luận</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="indexadmin.html#">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge bg-warning">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">Bạn có 7 thông báo mới</p>
                            </li>
                            <li>
                                <a href="indexadmin.html#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span> Máy chủ bị quá
                                    tải.
                                    <span class="small italic">4 phút</span>
                                </a>
                            </li>
                            <li>
                                <a href="indexadmin.html#">
                                    <span class="label label-warning"><i class="fa fa-bell"></i></span> Bộ nhớ # 2 Không
                                    phản hồi.
                                    <span class="small italic">30 phút</span>
                                </a>
                            </li>
                            <li>
                                <a href="indexadmin.html#">
                                    <span class="label label-danger"><i class="fa fa-bolt"></i></span> Dung lượng đĩa
                                    đạt 85%.
                                    <span class="small italic">2 giờ</span>
                                </a>
                            </li>
                            <li>
                                <a href="indexadmin.html#">
                                    <span class="label label-success"><i class="fa fa-plus"></i></span> Người dùng mới
                                    đã đăng ký.
                                    <span class="small italic">3 giờ.</span>
                                </a>
                            </li>
                            <li>
                                <a href="indexadmin.html#">Xem tất cả thông báo</a>
                            </li>
                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="Đăng xuất" href="#">Đăng xuất</a></li>
                </ul>
            </div>
        </header>
        <!--header end-->

        <aside>
            <div id="sidebar" class="nav-collapse " tabindex="5000" style="overflow: hidden; outline: none;">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered">
                        <a href="#"><img src="../Admin\Image/Anh9.jpeg" class="img-circle" width="80"></a>
                    </p>
                    <h5 class="centered">Hiếu Hoàng</h5>
                    <li class="mt">
                        <a class="active" href="indexadmin.html">
                            <i class="fa fa-dashboard"></i>
                            <span>Doanh thu</span>
                        </a>
                    </li>

                    <li class="sub-menu dcjq-parent-li">
                        <a href="javascript:;" class="dcjq-parent">
                            <i class="fa fa-th"></i>
                            <span>Thông tin</span>
                            <span class="dcjq-icon"></span></a>
                        <ul class="sub" style="display: none;">
                            <li><a href="khachhang.html">Thông tin khách hàng</a></li>
                            <li><a href="kho.html">Thông tin kho</a></li>
                            <li><a href="doitac.html">Thông tin đối tác</a></li>
                            <li><a href="themsanpham.html">Thêm sản phẩm mới</a></li>

                        </ul>
                    </li>
                    <li class="sub-menu dcjq-parent-li">
                        <a href="javascript:;" class="dcjq-parent">
                            <i class="fa fa-comments-o"></i>
                            <span>Bình luận</span>
                            <span class="dcjq-icon"></span></a>
                        <ul class="sub" style="display: none;">
                            <li><a href="binhluan.html">Lobby</a></li>
                            <li><a href="binhluan.html"> Chat Room</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>

        <section id="main-content" style="background-color: rgb(209, 205, 205);">
            <section class="wrapper">
                <h3><i class="fa fa-angle-right"></i>Thên sản phẩm mới</h3>
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="content-panel">
                            <section>
                                <div class="container">
                                    <div class="add">
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
                                        <form class="m-2" method="POST" action="{{ route('products.store') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class=" form-group">
                                                <label for="sp">Tên sản phẩm</label>
                                                <input type="text " name="name" class="form-control" id="sp">
                                            </div>
                                            <div class="form-group">
                                                <label for="gia">Giá </label>
                                                <input type="text " name="price" class=" form-control" id="gia">
                                            </div>

                                            <div class="form-group">
                                                <label for="hinhanh">Hình ảnh</label>
                                                <input type="file" id="hinhanh" name="img" class="form-control-file "
                                                    style="border: 1px solid rgb(187, 179, 179);">
                                            </div>
                                            <div class="form-group">
                                                <label for="mota">Mô tả</label>
                                                <input type="text " name="description" class="form-control" id="sp">
                                                <p></p>
                                            </div>
                                    </div>

                                    <button type="submit" class="btn btn-success "
                                        style="font-size: 18;padding: 5px;">Submit</button>
                                    </form>

                                </div>
                        </div>

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
    ClassicEditor
        .create(document.querySelector('#editor1'))
        .catch(error => {
            console.error(error);
        });
    </script>




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