@extends('user.shared.template')
@section('title')
    settings
@endsection
@section('content')

    <div class="container" style="font-family: 'Permanent Marker', cursive; font-family: 'Alegreya', serif;">
        <div class="row mt-3 "></div>
        <div class="card mt-5 bg-light shadow  mx-auto ">
            <div class="card-body">
                <div class="row">

                    <div class="col-md-3 ml-5 mt-4 mb-3">
                        <form action="/settingsemployee/uploadImage"
                              method="post" id="imageForm" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form">
                                    <div class="profile-img ">
                                        <img src=" {{Auth::user()->image ? asset(Auth::user()->image->path): ""}}"/>
                                        <div class="file btn btn-lg btn-primary">
                                            Change Photo<input type="file" id="image" name="image"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <form action="" method="post">
                                @csrf

                                <h5 class="mt-3">Skills</h5>
                                <div class="form-row">
                                    <div class="col-9">
                                        <fieldset>
                                            <div class="form-group" id="skillbtn">
                                                <input type="text" id="disabledTextInput" class="form-control"
                                                       style="height: 32px;" placeholder="Skill One">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-1">
                                        <button class="btn btn-sm bg-danger btn-dark border-danger rounded" id="remove">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-9">
                                        <fieldset disabled>
                                            <div class="form-group">
                                                <input type="text" id="disabledTextInput2" class="form-control"
                                                       style="height: 32px;" placeholder="Skill Two">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-1">
                                        <button class="btn btn-sm bg-danger btn-dark border-danger rounded">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="Skill-data" style="height: 32px;"
                                               placeholder="Add SKill">
                                    </div>
                                    <div class="col-1">
                                        <button class="btn btn-sm btn-success rounded" onclick="myFunction()">
                                            <i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <span class="ml-5"></span>
                                    <span class="ml-3"></span>
                                    <span class="fa fa-star" style="color: orange;"></span>
                                    <span class="fa fa-star" style="color: orange;"></span>
                                    <span class="fa fa-star" style="color: orange;"></span>
                                    <span class="fa fa-star" style="color: orange;"></span>
                                    <span class="fa fa-star"></span>
                                    {{--                                    <div class="rateYo" data-rateyo-rating="4.5"></div>--}}
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-8 ml-3">

                        <div class="col-7 ml-5"><h1><u>Account Settings</u></h1></div>
                        <div class="form-row mt-3"></div>

                        <form class=" mt-7" action="" method="post">
                            @csrf

                            <div class="col-12 mt-5">
                                <div class="form-row mt-7">
                                    <div class="col-3">
                                        <h5 class="mt-2">username</h5>
                                    </div>

                                    <div class="col-8">
                                        <input type="text" class="form-control" id="inputEmail" name="username"
                                               value="{{Auth::user()->username}} ">
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Email:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="Email " class="form-control" id="inputNumber" name="email"
                                               value="{{Auth::user()->email}}">
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Phone:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="inputNumber"
                                               name="phone_number" value="{{Auth::user()->phone_number}}">
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Gender:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="inputNumber" name="gender"
                                               value="{{Auth::user()->gender->name}}">

                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Address:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="inputNumber" name="address"
                                               value="{{Auth::user()->address}}">
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Education:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="inputNumber" name="education"
                                               value="{{Auth::user()->education}}">
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Profession:</h5>
                                    </div>
                                   <div class="col-8">
                                        <input type="text-area " class="form-control" id="inputNumber" name="profession"
                                               value="{{Auth::user()->profession}}">
                                    </div>

                                </div>


                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Hourly Rate:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="inputNumber"
                                               name="Hourly_Rate" value="{{Auth::user()->Hourly_Rate}}">
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Total Projects:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="inputNumber"
                                               name="Total_Projects" value="{{Auth::user()->Total_Projects}}">
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Availability:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="inputNumber"
                                               name="Availability" value="{{Auth::user()->Availability}}">
                                    </div>
                                </div>

                            </div>
                            <div class="form-row mt-5 ">
                                <div class="col-2 ml-5"></div>

                                <button type="submit" onclick="clickFun()"
                                        class="btn btn-primary btn-md btn-block col-2">SAVE
                                </button>
                                <div class="col-5 ml-3 mt-2"><a href="changepassword.html" class="stretched-link"
                                                                id="btn"><h5> Change Your Password?</h5></a></div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('more_js')
    <script>
        $(document).ready(function () {
            $("#image").change(function () {
                $("#imageForm").submit();
            });
        });

        function clickFun() {
            alert('DONE');
        }
    </script>
@endsection

