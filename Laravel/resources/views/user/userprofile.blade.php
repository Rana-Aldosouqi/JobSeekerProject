@extends('user.shared.template')
@section('title')
    user profile
@endsection
@section('content')
    <div class=" card col-8 container emp-profile bg-light shadow mt-5 h6 "  style="font-family: 'Permanent Marker', cursive; font-family: 'Alegreya', serif;">
        <form action="" method="get">
            <div class="row" style="height:50%;">
                <div class="col-4">
                    <div class="profile-img">
                        <img src=" {{Auth::user()->image ? asset(Auth::user()->image->path): ""}}"/>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="profile-head">
                        <div>
                            <h3>{{Auth::user()->username}}</h3>
                        </div>
                        <br>
                                <div class="col-md-8" style="color:#004bff;">
                                    <h5  class="" id="inputEmail" name="profession" >{{Auth::user()->profession}}</h5>
                                </div>
                        </h5>
                        <br>
                        <div class="form-row">
                            <div class="col-1"></div>
                            <div class="col-12">
                                <hr>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-2">
                    <a href="/settingsemployee"><button type="button" class="profile-edit-btn">Setting</button></a>
                </div>
            </div>
            <div class="row ml-4 pl-2">
                <div class="col-md-3">
                    <div class="card bg-light shadow mt-3">
                        <div class="card-body text-center">
                            <h5>profile work</h5>
                            <div id="accordion" >

                                <div class="card h6 " >
                                    <div class="card-header" style="background-color: white !important;">
                                        <a style="color:#004bff ;" data-toggle="collapse" href="#collapseTwo">
                                            Skills
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse"  data-parent="#accordion">
                                        <div class="card-body">




                                                   @foreach($data as $skill)
                                                <div class="">
                                                    <ul class="">
                                                        <li><p class="h5">{{$skill->skill}}</p></li>
                                                    </ul>
                                                </div>
                                       @endforeach

                                        </div>
                                    </div>
                                </div>

                                <div class="card h6">
                                    <div class="card-header" style="background-color: white !important;">
                                        <a style="color: #004bff ;"  data-toggle="collapse" href="#collapseThree">
                                            Resume
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">

                                            <a href="/ResumeBuilder"><button type="button" class=" mt-1 btn btn-primary btn-md " >Create CV</button></a>
                                            <a href="/MyResume"><button type="button" class=" mt-1 btn btn-primary btn-md">View CV</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8 pl-5 mb-8 h5 ">
                    <div class="tab-content profile-tab ml-4 " id="myTabContent">

                        <div class="row ">
                            <div class="col-md-4" >
                                <label>Name:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
                                <h5  class="" id="inputEmail"name="username">{{Auth::user()->username}} </h5>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4" >
                                <label>Email:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
                                <h5  class="" id="inputEmail"name="email" >{{Auth::user()->email}}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4" >
                                <label>Phone:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
                                <h5  class="" id="inputEmail"name="phone_number" >{{Auth::user()->phone_number}}</h5>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4" >
                                <label>Gender:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
                                <h5  class="" id="inputEmail"name="gender" >{{Auth::user()->gender->name}}</h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4" >
                                <label>Address:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
                                <h5  class="" id="inputEmail" name="address" >{{Auth::user()->address}}</h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4" >
                                <label>Education:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
                                <h5  class="" id="inputEmail" name="education" >{{Auth::user()->education}}</h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4" >
                                <label>Profession:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
                                <h5  class="" id="inputEmail" name="profession" >{{Auth::user()->profession}}</h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Hourly Rate:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
                                <h5  class="" id="inputEmail"name="Hourly_Rate" >{{Auth::user()->Hourly_Rate}}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4" >
                                <label>Total Projects:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
                                <h5  class="" id="inputEmail"name="Total_Projects" >{{Auth::user()->Total_Projects}}</h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4" >
                                <label>Availability:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
                                <h5  class="" id="inputEmail" name="Availability" >{{Auth::user()->Availability}}</h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </form>
    </div>


@endsection
