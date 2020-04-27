@section('more_css')
    <link rel="stylesheet" href="{{asset('/assets/css/style_login.css')}}">
@endsection
@extends('user.shared.template')
@section('content')
    <div class="container">
        <div class="row mt-5"></div>
        <div class="row mt-1">
            <div class="col-2"></div>
            <div class="card bg-light shadow mt-5 col-8"
                 style="font-family: 'Permanent Marker', cursive; font-family: 'Alegreya', serif;">
                <div class="card-body my-5">
                    <form class="formb text-center " action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 mt-3">
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
                            <div class="col-12 mb-1" style="margin-left: 35% !important mt-4 ">
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
                                @include('user.shared.errors')
                            </div>
                        </div>
                    </form>
                </div>
             </div>
        </div>
    </div>
@endsection

