@extends('user.shared.template')
@section('content')

    <div class="card container emp-profile bg-light shadow mt-5 col-8 h6"
         style="font-family: 'Permanent Marker', cursive; font-family: 'Alegreya', serif;"
         xmlns="http://www.w3.org/1999/html">
        <form>
            <div class="row">
                <div class="col-4">
                    <div class="profile-img">
                        <img src="{{asset('/assets/images/profil.jpg')}}"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h1>
                            <p>{{Auth::user()->first_name}}</p>
                        </h1>
                        </br>
                        <h5 style="color:#004bff">
                            <p>{{Auth::user()->description}}</p>
                        </h5>
                        </br>
                        <div class="form-row">
                            <div class="col-1"></div>
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">

                    <button  href={{'/shared/edit'}} >setting</button>

                </div>
            </div>

            <div class="row ml-4 pl-1 h6 ">
                <div class="col-3">
                    <div class="card bg-light shadow text-center">
                        <div class="card-body">
                            <h5>profile work</h5>
                            <div id="accordion" >
                                <div class="card" >
                                    <div class="card-header" style="background-color: white !important;" >
                                        <a style="color: #004bff;" class="card-link" data-toggle="collapse" href="#collapseOne">
                                            Work link
                                        </a>
                                    </div>
                                    <div id="#coursolindicators" class="collapse  "  data-parent="#accordion">
                                        <div class="card-body">
                                            <a href="#">Volunteer works</a><br/>
                                            <a href="#">Acceptable job</a><br>
                                            <a href="#">Training</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mt-2">
                                    <div class="card-header" style="background-color: white !important;">
                                        <a style="color:#004bff;" class="collapsed card-link" data-toggle="collapse" href="#">
                                            Post
                                        </a>
                                    </div>
                                    <div id="#coursolindicators" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <a href="#">Job</a><br>
                                            <a href="#">Training</a><br>
                                            <a href="#">Course</a><br>
                                            <a href="#">Volunteer Job</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 pl-5 h5" >
                    <div class="tab-content profile-tab ml-4 " id="#coursolindicators">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Company Name:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">

                                <p>{{Auth::user()->username}}</p>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label> Email:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">


                                <p>{{Auth::user()->email}}</p>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label> phone number:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">


                                <p>{{Auth::user()->phone_number}}</p>


                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Address:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">

                                <p>{{Auth::user()->address}}</p>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Work Field:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">

                                <p>{{Auth::user()->work_field}}</p>


                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Work Times:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
                                <p>{{Auth::user()->work_times}}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Foundation Date:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
                                <p>{{Auth::user()->foundation_date}}</p>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Hourly Rate:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
                                <p>{{Auth::user()->Hourly_Rate}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Total Projects:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
                                <p>{{Auth::user()->Total_Projects}}</p>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Availability:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
                                <p>{{Auth::user()->Availability}}</p>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label> Description:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">

                                <p>{{Auth::user()->description}}</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <br>
            <hr>
            <br>
            <div class="container col-9">
                <div class="row ">
                    <input class="form-control col-10" type="text" placeholder="write job"/>
                    <a class="col-2" href="#"><i class="fa fa-pencil-square fa-3x ml-5" aria-hidden="true"></i></a>
                </div>
                <br>
                <div class="row ">
                    <input class="form-control col-10" type="text" placeholder="write job"/>
                    <a class="col-2" href="#"><i class="fa fa-pencil-square fa-3x ml-5" aria-hidden="true"></i></a>
                </div>
                <br>
                <div class="row">
                    <input class="form-control col-10" type="text" placeholder="write job"/>
                    <a class="col-2" href="#"><i class="fa fa-pencil-square fa-3x ml-5" aria-hidden="true"></i></a>
                </div>
            </div>
        </form>
    </div>




@endsection
