@section('more_css')
    <link rel="stylesheet" href="{{asset('/assets/css/styleforget.css')}}">
@endsection
@extends('user.shared.template')
@section('content')
    <div class="container">
        <div class="card bg-light shadow">
            <div class="card-body">
                <form method="POST" action="{{url('user.sendemail/send')}}">
                    @csrf

                    <label for="usr" ><h5><u>Forget Password?</u></h5></label>
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <img style="margin-bottom: 3%;"
                                 src="{{asset('/assets/img/gears.png')}}"
                                 class="img-circle center-block" id="img1"/></div>
                    </div>
                    <div class="form-row">
                        <input type="email" class="form-control"
                               name="email" value="{{ old('email') }}" required autocomplete="email"
                               id="usr" placeholder="Enter Email">
                    </div>
                    <div class="form-row mt-3">
                        <input type="password" class="form-control" name="new_password" id="usr"
                        placeholder="Enter New Password">
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <div class="container mt-3 col-3">
                                <input type="submit" name="send" class="btn btn-primary" value="Send"/>
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