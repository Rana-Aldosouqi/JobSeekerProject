@extends('user.shared.template')
@section('more_css')
    <link rel="stylesheet" href="{{asset('/assets/css/style_login.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/styleforget.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style_regist.css')}}">

@endsection
@section('title')
    ChangePassword
@endsection
@section('content')
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
                @include('user.shared.errors')
                <label for="usr" ><h5><u>Forget Password?</u></h5></label>
                <div class="row text-center">
                    <div class="col-sm-12">
                        <img style="margin-bottom: 3%;"
                             src="{{asset('/assets/images/gears.png')}}"
                             class="img-circle center-block" id="img1"/></div>
                </div>
                <div class="row text-center">
                    <input type="email" class="form-control col-9 "
                    name="email" value="{{ old('email') }}" required autocomplete="email"
                           id="usr" placeholder="Email">
                </div>
                <div class="row text-center">
                    <div class="col-sm-12">
                        <div class="container mt-3 col-3">
                            <button type="submit" class="btn btn-primary btn-block  btn-md"><b>
                                    Submet {{Route('ResetPasswordSendToken')}}</b>
                            </button>
                        </div>
                        <p class="text-center">Password Will be Sent To Your Email</p>
{{--                        <div class="col-12" style="margin-left: 35% !important mt-4 mb-4">--}}
{{--                            <a href="/Register" class="stretched-link" id="btn">--}}
{{--                                <h6> Create an Account?</h6>--}}
{{--                            </a></div>--}}
{{--                        <div class="col-12" style="margin-left: 35% !important mt-4 mb-4">--}}
{{--                            <a href="/Login" class="stretched-link" id="btn"><h6> Back to Login?</h6></a></div>--}}
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('more-js')

@endsection