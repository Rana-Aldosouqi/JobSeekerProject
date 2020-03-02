@extends('user.shared.template')
<ht                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             ml>
<head>
    <meta charset="UTF-8">
    <title>JobSeeker|Login</title>
{{--    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('/assets/css/all.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('/assets/css/fontawesome.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('/assets/css/homestyle.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('/assets/css/footer-distributed-with-address-and-phones.css')}}">--}}
{{--    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css--}}
{{--    /font-awesome.min.css">--}}
{{--    <link rel="stylesheet" href="{{asset('/assets/css/demo.css')}}">--}}
    <link rel="stylesheet" href="{{asset('/assets/css/style_login.css')}}">
{{--    <link rel="stylesheet" href="{{asset('/assets/css/style_regist.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('/assets/css/styleforget.css')}}">--}}
    @yield('more-css')
</head>
<body>
<div class="container">
    <div class="card bg-light shadow"
         style="font-family: 'Permanent Marker', cursive; font-family: 'Alegreya', serif;">
        <div class="col-12 card-body">
            <form class="formb text-center" action="" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-12 mt-2">
                        <img src="{{asset('/assets/images/Login.png')}}" id="img1"/></div>
                </div>
                <div class="form-group">
                    <input class="form-control siz" type="text" name="username"
                           value="{{old('username')}}" id="email"
                           placeholder="Enter username">
                </div>
                <div class="form-group">
                    <input class="form-control siz" type="password" name="password" id="pwd"
                           placeholder="Password">
                </div>
                <div class="row">
                    <div class="col-12" style="margin-left: 35% !important;  padding-bottom: 2%;">
                        <button type="submit" class="btn btn-primary btn-md col-3 btn-block">Login</button>
                    </div>
                    <div class="col-12" style="margin-left: 35% !important mt-2 mb-4">
                        <a href="/Register" class="stretched-link" id="btn"><h6> Create an Account?</h6>
                        </a>
                    </div>
                    <div class="col-12" style="margin-left: 35% !important mt-4 ">
                        <a href="/ResetPassword" class="stretched-link" id="btn">
                            <h6>Forget Password?</h6></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1 ml-3"></div>
                    <div class="col-9">
                        @if (Session::has('error'))
                            <div class="alert alert-danger">
                                <p class="m-0">
                                    {{Session::get('error')}}
                                </p>
                            </div>
                        @endif



                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
<script src="{{asset('/asset/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('/asset/js/popper.min.js')}}"></script>
<script src="{{asset('/asset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/asset/js/fontawesome.js')}}"></script>
</body>
</html>
