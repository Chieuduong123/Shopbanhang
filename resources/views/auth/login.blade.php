<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng Nhập</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
    </script>
    <link href="{{asset('css.css')}}" rel="stylesheet" type="text/css">
    <!-- <script type="text/javascript" src="./jquery/index.js"></script>  -->
</head>

<body>

    <div class="container-fluid bg">
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6 col-xs-12 row-container">
                <form role="form" action="{{ url('/login') }}" method="POST">
                    {!! csrf_field() !!}
                    <h1>Đăng Nhập</h1>
                    <div class="form-group">
                        <label for="text">Username</label>
                        <input type="text" class="form-control" name="name" placeholder="Tên đăng nhập">
                    </div>
                    <div class="form-group">
                        <label for="password" class="label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Mật Khẩu">
                    </div>

                    <?php //Hiển thị thông báo lỗi?>
                    @if ( Session::has('error') )
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <strong>{{ Session::get('error') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                    @endif

                    <button type="submit" class="btn btn-success btn-block my-3">Đăng Nhập</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>