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
                        <img src="{{asset('/assets/images/'. $user->name)}}" class="img-responsive"/>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="profile-head">

                        <br>
                        <h5 style="color:#004bff">
                            Web Developer and Designer
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

                    <input type="submit" href="#" class="profile-edit-btn" name="btnAddMore" value="Setting"/>

                </div>
            </div>
            <div class="row ml-4 pl-2">
                <div class="col-md-3">
                    <div class="card bg-light shadow">
                        <div class="card-body text-center">
                            <h5>profile work</h5>
                            <div id="accordion" >

                                <div class="card h6" >
                                    <div class="card-header" style="background-color: white !important;">
                                        <a style="color:#004bff ;" data-toggle="collapse" href="#collapseTwo">
                                            Skills
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse"  data-parent="#accordion">
                                        <div class="card-body">
                                            <span>Web Designer</span><br/>
                                            <span>Web Developer</span><br/>
                                            <span>WordPress</span><br/>
                                            <span>WooCommerce</span><br/>
                                            <span>PHP, .Net</span><br/>
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

                                            <input type="file" name="foo" style="width: 84%"/>
                                            <a href="#"><button type="button" class=" mt-1 btn btn-primary btn-md " >Create CV</button></a>
                                            <a href="#"><button type="button" class=" mt-1 btn btn-primary btn-md">View CV</button></a>
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
                                <h5  class="" id="inputEmail"name="first_name" >{{Auth::user()->first_name}}</h5>
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
                                <label>Age:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
                                <h5  class="" id="inputEmail"name="age" > </h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4" >
                                <label>Gender:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
{{--                                @foreach($genders as $gender)--}}
{{--                                    <p>{{$gender->name}}</p>--}}
{{--                                @endforeach--}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4" >
                                <label>Address:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
                                <h5  class="" id="inputEmail"name="address" >{{Auth::user()->address}}</h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4" >
                                <label>Profession:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
{{--                                @foreach($profession as $experience)--}}
{{--                                    <p>{{$experience->job_name}}</p>--}}
{{--                                @endforeach--}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4" >
                                <label>Education:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
{{--                                @foreach($educations as $education)--}}
{{--                                    <p>{{$education->school}}</p>--}}
{{--                                @endforeach--}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4" >
                                <label>Experience:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
{{--                                @foreach($workfield as $experiences)--}}
{{--                                    <p>{{$experiences->job_name}}</p>--}}
{{--                                @endforeach--}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4" >
                                <label>Courses:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
{{--                                @foreach($courses as $course)--}}
{{--                                    <p>{{$course->name}}</p>--}}
{{--                                @endforeach--}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4" >
                                <label>Certificate:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
{{--                                @foreach($certificates as $certificate)--}}
{{--                                    <p>{{$certificate->name}}</p>--}}
{{--                                @endforeach--}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <label>Hourly Rate:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
{{--                                @foreach($rate as $user)--}}
{{--                                    <p>{{$user->rating}}</p>--}}
{{--                                @endforeach--}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4" >
                                <label>Total Projects:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
{{--                                @foreach($totalproject as $experience)--}}
{{--                                    <p>{{$experience->$total_projects}}</p>--}}
{{--                                @endforeach--}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4" >
                                <label>Language:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
{{--                                @foreach($englishlevel as $language)--}}
{{--                                    <p>{{$language->$english_level}}</p>--}}
{{--                                @endforeach--}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4" >
                                <label>Availability:</label>
                            </div>
                            <div class="col-md-8" style="color:#004bff;">
                                <p>6 months</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </form>
    </div>


@endsection
