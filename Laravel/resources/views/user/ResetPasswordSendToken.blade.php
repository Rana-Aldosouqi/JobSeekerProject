<html>
<head>
    <meta charset="UTF-8">
    <title>JobSeeker|Reset Password</title>
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
    {{--    <link rel="stylesheet" href="{{asset('/assets/css/all.min.css')}}">--}}
    <link rel="stylesheet" href="{{asset('/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/homestyle.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="footer, address, phone, icons"/>
    <link rel="stylesheet" href="{{asset('/assets/css/footer-distributed-with-address-and-phones.css')}}">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css
    /font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/assets/css/demo.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style_login.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style_regist.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/styleforget.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/jquery.rateyo.min.css')}}">
    @yield('more-css')
</head>
<body>
<div class="container">
    <div class="card bg-light shadow">
        <div class="card-body">
            <form method="POST" action="">
                @csrf
                @if (Session::has('error'))
                    <div class="alert alert-danger">
                        <p class="m-0">
                            {{Session::get('error')}}
                        </p>
                    </div>
                @endif
                @include('common.errors')
                <div class="form-group row">
                    <div class="col-sm-12">
                        <img style="margin-bottom: 3%;"
                             src="{{asset('/assets/images/gears.png')}}"
                             class="img-circle center-block" id="img1"/></div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                    <input class="form-control siz" type="password" name="password" id="pwd"
                           placeholder="Password">
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">Login
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{asset('/asset/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('/asset/js/popper.min.js')}}"></script>
<script src="{{asset('/asset/js/bootstrap.js')}}"></script>
<script src="{{asset('/asset/js/all.min.js')}}"></script>
<script src="{{asset('/asset/js/fontawesome.js')}}"></script>
</body>
</html>
