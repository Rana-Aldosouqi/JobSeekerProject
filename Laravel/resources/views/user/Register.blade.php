@section('more_css')
    <link rel="stylesheet" href="{{asset('/assets/css/style_regist.css')}}">
    @endsection
@extends('user.shared.template')
@section('title')
    Register
@endsection
@section('content')
    <div class="container">
        <div class="row mt-5"></div>
        <div class="row mt-1">
            <div class="col-2"></div>
            <div class="card bg-light shadow-sm col-8"
                 style="font-family: 'Permanent Marker', cursive; font-family: 'Alegreya', serif;">
                <div class="row">
                    <div class="card-body">
                        <div class="formb text-center">
                            <form action="" method="POST">
                                @csrf
                                <div class="row text-center">
                                    <div class="col-sm-12 text-center mt-3">
                                        <img src="{{asset('/assets/images/Login.png')}}" id="img1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control siz marg" name="firstName" type="text"
                                           value="{{old('firstName')}}"
                                           placeholder="First Name">
                                    <input class="form-control siz marg" name="lastName" type="text"
                                           value="{{old('lastName')}}"
                                           placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control siz marg" name="username" id="nam"
                                           value="{{old('username')}}"
                                           placeholder="username">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <input type="text" class="form-control siz marg" id="email"
                                               name="email" value="{{old('email')}}"
                                               placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password"
                                               class="form-control siz" id="pwd" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        @php
                                            $genders = \App\Gender::all()
                                        @endphp
                                        <select name="gender" class="form-control siz">
                                            @foreach($genders as $gender)
                                                @if($gender->id == old('gender'))
                                                    <option value="{{$gender->id}}" selected>
                                                        {{$gender->name}}
                                                    </option>
                                                @else
                                                    <option value="{{$gender->id}}">
                                                        {{$gender->name}}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-row form-control siz marg">
                                        <div class="col-6">
                                            <input type="radio" id="Company" name="user_type" value="Company">
                                            <label for="Company">Company</label>
                                        </div>
                                        <div class="col-6">
                                            <input type="radio" id="Seeker" name="user_type" value="Seeker">
                                            <label for="Seeker">Seeker</label>
                                        </div>
                                    </div>
                                    <div class="form-group siz marg">
                                        <div class="col-sm-12">
                                            <button type="submet" class="btn btn-primary btn-md">
                                                Register
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group siz marg text-left">
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
        </div>
    </div>

@endsection

