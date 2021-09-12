<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Soft UI Dashboard by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>

</head>

<body class="g-sidenav-show  bg-gray-100">
    @include('aside')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        @include('nav')
        <div class="container-fluid py-4">


            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6> Add product</h6>
                        </div>
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
                                        <form class="m-1" method="POST" action="{{ route('products.store') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="sp">Name product</label>
                                                <input type="text " name="name" class="form-control" id="sp">
                                            </div>
                                            <div class="form-group">
                                                <label for="gia">price </label>
                                                <input type="text " name="price" class="form-control" id="gia">
                                            </div>
                                            <div class="form-group">
                                                <label for="hinhanh">Image</label>
                                                <input type="file" name="img" id="hinhanh" class="form-control-file "
                                                    style="border: 1px solid rgb(187, 179, 179);">
                                            </div>
                                            <div class="form-group">
                                                <label for="gia">Count</label>
                                                <input type="text " name="count" class="form-control" id="gia">
                                            </div>
                                            <div class="form-group">
                                                <label for="hinhanh">description </label>
                                                <input type="text " name="description" class="form-control" id="sp">
                                            </div>

                                            <button type="submit" class="btn btn-success "
                                                style="font-size: 18;padding: 5px;">add</button>
                                        </form>

                                    </div>
                                </div>

                            </section>



                        </div>
                    </div>
                </div>
            </div>


    </main>

    </div>
    <!--   Core JS Files   -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min2.js')}}"></script>
    <script src=" {{asset('js/perfect-scrollbar.min.js')}}"></script>
    <script src=" {{asset('js/smooth-scrollbar.min.js')}}"></script>
    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <script>
    ClassicEditor
        .create(document.querySelector('#editor1'))
        .catch(error => {
            console.error(error);
        });
    </script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>