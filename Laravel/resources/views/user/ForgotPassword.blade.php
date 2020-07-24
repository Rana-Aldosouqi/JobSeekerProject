@section('more_css')
    <link rel="stylesheet" href="{{asset('/assets/css/styleforget.css')}}">
@endsection
@extends('user.shared.template')
@section('content')
    <div class="container">
        <div class="row mt-5"></div>
        <div class="row mt-1">
            <div class="col-2"></div>
            <div class="card bg-light shadow-sm mt-4 col-8"
                 style="font-family: 'Permanent Marker', cursive; font-family: 'Alegreya', serif;">
                <form method="POST"
                      action="{{url('ForgotPassword/send')}}">
                    @csrf
                    <div class="row text-center">
                        <div class="col-sm-12 mt-3">
                            <h2 class="text-center">Forgot Password?</h2>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <img style="margin-bottom: 3%;"
                                 src="{{asset('/assets/img/gears.png')}}"
                                 class="img-circle center-block" id="img1"/></div>
                    </div>
                    <div class="form-row">
                        <div class="col-10 offset-sm-1">
                            <input type="email" class="form-control"
                                   name="email" value="{{ old('email') }}" required autocomplete="email"
                                   placeholder="Enter Email">
                        </div>

                    </div>
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <div class="container mt-3 col-3">
                                <input type="submit" name="send" class="btn btn-primary"
                                       value="Submet"/>
                            </div>
                            <h6 class="text-center mt-3 mb-3">Go Check Your Email!</h6>
                        </div>
                    </div>
                    <div class="form-row text-center">
                        @if (Session::has('success'))
                            <div class="alert alert-success form-control mb-3 pb-1" id="usr">
                                <p class="m-0">{!! Session::get('success') !!}</p>
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection