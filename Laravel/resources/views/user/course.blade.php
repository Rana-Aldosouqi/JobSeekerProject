@extends('user.shared.template')
@section('title')
     Courses
@endsection
@section('content')
    <div >
        <img src="{{asset('assets//img1/66.jpg')}}" height="300" width="100%"/>
    </div>

    </main>

    <div class="container mt-5" style="font-family: 'Permanent Marker', cursive; font-family: 'Alegreya', serif;">
        <div class="row">

            <div class="col-sm-3">
                <div class="card bg-light shadow ">
                    <div class="card-body">
                        <h5>Filter your results</h5>

                        <div id="accordion" >

                            <div class="card">
                                <div class="card-header"  style="background-color: white !important ;">
                                    <a style="color: #004bff;" class="collapsed card-link h6 " data-toggle="collapse" href="#collapseThree">
                                        course level
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse " style="font-size:16px;" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="1">Beginner
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="2">medium
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="3">professional
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" style="background-color: white !important ;">
                                    <a style="color:#004bff;" class="collapsed card-link h6 " data-toggle="collapse" href="#collapseFour">
                                        Course role
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" style="font-size:16px;" data-parent="#accordion">
                                    <div class="card-body">

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="1">Engineering
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="2">medicine
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="3">Law
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" value="4">Teaching
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header"  style="background-color: white !important ;">
                                <a style="color: #004bff;" class="collapsed card-link h6 " data-toggle="collapse" href="#collapseThree">
                                    course language
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse " style="font-size:16px;" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="1">Arabic
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="2">English
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="3">French
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="4">Japan
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" value="5">Italy<
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



            <div class="col-sm-9">

                <div class="card-body">
                    <div class="row">

                        <!--start cards---->

                        @foreach($newcourses as $course)
                          <div class="row justify-content-center  ">

                            <div class="col-11 shadow ">
                                <div class="media mt-2 ">
                                    <img src="{{asset('assets/img1/44.jpg')}}" height="120" width="150" class="mr-3" alt="...">
                                    <div class="media-body" >
                                        <h5 class="mt-2">{{$course->course}}
                                            @if (date("Y-m-d",strtotime($course['created_at'])) == date("Y-m-d"))
                                                <span class="badge badge-success">New</span>
                                            @endif
                                        </h5>
                                        <p > Course type:

                                            @if(($course->type)==1)
                                                Engineering
                                            @elseif($course->type)==2)
                                               Medical
                                            @elseif($course->type)==3)
                                            Law
                                            @else
                                                Teaching
                                          @endif
                                        <p>Course level:
                                            @if(($course->type)==1)
                                                Beginner
                                            @elseif($course->type)==2)
                                            medium
                                            @else
                                                professional
                                            @endif
                                        </p>

                                        <p>Specialization:
                                            @if(($course->type)==1)
                                                Engineering
                                            @elseif($course->type)==2)
                                            medicine
                                            @elseif($course->type)==3)
                                            Law
                                            @else
                                                Teaching
                                            @endif
                                        </p>

                                        <p>Course language:
                                            @if(($course->type)==1)
                                                Arabic
                                            @elseif($course->type)==2)
                                              English
                                            @elseif($course->type)==3)
                                               French
                                            @elseif($course->type)==4)
                                               Japan
                                            @else
                                                Italy
                                            @endif
                                        </p>
                                         <p>
                                           Start at:  {{$course->start_date}}
                                         </p>
                                        <p>
                                          End at: {{$course->end_date}}
                                        </p>
                                        <p>
                                           Course price: {{$course->salary}}
                                        </p>
                                        <p>
                                          time in houres:  {{$course->time}}
                                        </p>
                                        <p>
                                           Phone number:{{$course->phone}}
                                        </p>


                                        <a href="/courseDetails/{{$course->id}}" class=" mb-4">Details</a>
                                    </div>
                                </div>

                            </div>
                          </div>
                        @endforeach



                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
