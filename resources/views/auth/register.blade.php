<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng Ký</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
    </script>
    <link href="{{asset('css.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('/js/login.js')}}"></script>
</head>

<body>
    <div class="container-fluid bg">
        <div class="row justify-content-center">
            <div style="margin-top: 3px; margin: 3px; padding: 15px;" class="col-md-4 col-sm-7 col-xs-10 row-container">
                <form role="form" method="POST" action="{{ url('/register') }}">
                    {!! csrf_field() !!}
                    <h1>Đăng Ký</h1>
                    <div class="form-group">
                        <label for="ho">Username</label>
                        <input type="text" name='name' class="form-control" id="tennd" placeholder="Tên người dùng">
                        <p class="emailError"></p>
                    </div>
                    <div class="form-group">
                        <label for="ho">Email</label>
                        <input type="text" name="email" class="form-control" id="tennd" placeholder="Tên người dùng">
                        <p class="emailError"></p>
                    </div>
                    <div class="form-group">
                        <label for="password" class="label">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Mật Khẩu">
                        <p class="passwordError"></p>
                        <label for="password" class="label">Confirm-Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password"
                            placeholder="Nhập lại mật khẩu">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Đồng ý với các điều khoản</label>
                    </div>
                    <?php //Success?>
                    @if ( Session::has('success') )
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <strong>{{ Session::get('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                    @endif
                    <?php //Error?>
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
                    <button type="submit" class="btn btn-success btn-block my-3">Đăng Ký</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>