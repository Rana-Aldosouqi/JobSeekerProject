<html>
<head>
    <meta charset="UTF-8">
    <title>JobSeeker|Register</title>
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
{{--    <link rel="stylesheet" href="{{asset('/assets/css/all.min.css')}}">--}}
    <link rel="stylesheet" href="{{asset('/assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/homestyle.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/footer-distributed-with-address-and-phones.css')}}">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css
    /font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/assets/css/demo.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style_login.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style_regist.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/styleforget.css')}}">
</head>
<body>
<div class="container">
    <div class="card bg-light shadow"
         style="font-family: 'Permanent Marker', cursive; font-family: 'Alegreya', serif;">
        <div class="col-12 card-body">
            <div class="formb text-center mt-5 mb-5">
                <form action="" method="POST">
                    @csrf
                    <div class="row text-center">
                        <div class="col-sm-12 text-center mt-3">
                            <img style="margin-bottom: 3%;"
                                 src="{{asset('/assets/images/Login.png')}}"
                                  id="img1">
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
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submet" class="btn btn-primary btn-md mb-2 mt-2 marg">
                                    Register
                                </button>
                                <div class="col-12" style="mx-auto !important mt-2 mb-4">
                                    <a href="/Login"
                                       class="stretched-link"
                                       id="btn"><h6>Already have an
                                            Account?</h6>
                                    </a>
                                </div>
                            </div>
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
</div>
<script src="{{asset('/asset/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('/asset/js/popper.min.js')}}"></script>
<script src="{{asset('/asset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/asset/js/fontawesome.js')}}"></script>
</body>
</html>
