<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="footer, address, phone, icons"/>

    <title> @yield('title')</title>



    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/fontawesome.min.css')}}">


    <link rel="stylesheet" href="{{asset('/assets/css/homestyle.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/demo.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/footer-distributed-with-address-and-phones.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/jquery.rateyo.min.css')}}">



    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya|Permanent+Marker|Vidaloka&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya|Permanent+Marker&display=swap" rel="stylesheet">
    @yield('more_css')


</head>
<body>

@include('user.shared.navbar')

@yield('content')

@include('user.shared.footer')

<script  src="{{'/assets/js/jquery-3.4.1.min.js'}}"></script>
<script  src="{{'/assets/js/bootstrap.js'}}"></script>
{{--<<<<<<< HEAD--}}
<script  src="{{'/assets/js/shuffle.min.js'}}"></script>
{{--=======--}}
<script  src="{{'/assets/js/jquery.rateyo.min.js'}}"></script>

{{-->>>>>>> e86a55f20ea09e4b65f35c66709b52b16247071a--}}
@yield('more_js')

</body>
</html>
