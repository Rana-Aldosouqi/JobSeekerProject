@extends('user.shared.template')
@section('more_css')
    <link rel="stylesheet" href="{{asset('/assets/css/style_login.css')}}">
@endsection
@section('title')
    ChangePassword
@endsection
@section('content')
    <div class="container">
        <div class="row mt-5"></div>
        <div class="row mt-1">
            <div class="col-2"></div>
            <div class="card bg-light shadow-sm mt-4 col-8"
                 style="font-family: 'Permanent Marker', cursive; font-family: 'Alegreya', serif;">
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="container col-3">
                                    <h6 class="text-center">Forgot Password!</h6>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-sm-12 mt-1">
                                <img src="{{asset('/assets/img/gears.png')}}"
                                     class="img-circle center-block" alt="Cinque Terre"
                                     id="img1"/>
                            </div>
                        </div>
                    </div>
                    <form id="form-change-password" role="form" method="POST" action=""
                          novalidate class="form-horizontal">
                        <div class="form-row">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-group">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="password" class="form-control" id="current-password"
                                           name="current-password" placeholder="Current Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password"
                                           name="password" placeholder="New Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-8 offset-md-2">
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password_confirmation"
                                           name="password_confirmation" placeholder="Re-enter Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-5"></div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary btn-block"><b>Submet</b></button>
                            </div>
                        </div>
                        <div class="form-row mt-3">
                            <div class="offset-md-2"></div>
                            <div class="col-8">
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
@section('more-js')

    @endsection