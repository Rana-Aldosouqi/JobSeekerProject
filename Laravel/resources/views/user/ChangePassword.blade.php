@extends('user.shared.template')
@section('more_css')
    <link rel="stylesheet" href="{{asset('/assets/css/style_login.css')}}">
@endsection
@section('title')
    ChangePassword
@endsection
@section('content')
    <div class="container col-8 h6 mt-5" style="font-family: 'Permanent Marker', cursive;
     font-family: 'Alegreya', serif;">
        <div class="row "></div>
        <div class="card bg-light shadow">
            <div class="card-body">
                <div class="form-group">
                    <label for="usr" ><h5><u>Change Your Password?</u></h5></label>
                    <div class="row text-center">
                        <div class="col-sm-12">
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
                                       name="current-password" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-8 offset-md-2">
                            <div class="form-group">
                                <input type="password" class="form-control" id="password"
                                       name="password" placeholder="Password">
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
                    <div class="form-row ">
                        <div class="col-5"></div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-primary btn-block"
                                    style="height: 40px;"><b>Submet</b>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('more-js')

    @endsection