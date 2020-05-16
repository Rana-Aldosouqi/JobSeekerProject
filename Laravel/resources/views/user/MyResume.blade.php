
@extends('user.shared.template')
@section('title')
    MyResume
@endsection
@section('content')
    <div class="jumbotron jumbotron-fluid pb-5 shadow-sm" style="background: {{Auth::user()->color}};
         font-family: 'Permanent Marker', cursive;
                        font-family: 'Alegreya', serif;">
        <div class="container container-fluid">
            <div class="row">
                <div class="col-2">
                    <div class="card">
                        <img  src="{{asset('/assets/images/images.png')}}" class="card-img rounded">
                    </div>
                </div>
                <div class="col-6">
                    <p class="" style="font-size:40px;">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</p>
                </div>
            </div>
            <div class="row ml-5 my-2">
                <p class="h5"></p>
            </div>
            <hr class="bg-dark">
            <div class="row">
                <div class="col-2"><p class="h6">Phone</p></div>
                <div class="col-2"><p class="h6">{{Auth::user()->phone_number}}</p></div>
                <div class="col-2"></div>
                <div class="col-1"><p class="h6">Linkedin</p></div>
                <div class="col-2"><p class="h6">{{Auth::user()->linkedin_url}}</p></div>

            </div>
            <div class="row">
                <div class="col-2"><p class="h6">Email</p></div>
                <div class="col-2"><p class="h6">{{Auth::user()->email}}</p></div>
                <div class="col-2"></div>
                <div class="col-1"><p class="h6">Twitter</p></div>
                <div class="col-5"><p class="h6">{{Auth::user()->twitter_url}}</p></div>
            </div>
            <div class="row">
                <div class="col-2"><p class="h6">Gender</p></div>
                <div class="col-2"><p class="h6">{{Auth::user()->gender->name}}</p></div>
                <div class="col-2"></div>
                <div class="col-1"><P class="h6">Facebook</P></div>
                <div class="col-5"><p class="h6">{{Auth::user()->facebook_url}}</p></div>
            </div>
            <div class="row">
                <div class="col-2"><p class="h6">Address</p></div>
                <div class="col-2"><p class="h6">Address One</p></div>
                <div class="col-2"></div>
                <div class="col-1"><P class="h6">Ask</P></div>
                <div class="col-5"><p class="h6">{{Auth::user()->ask_url}}</p></div>
            </div>
            <div class="row">
                <div class="col-2"><P class="h6">Birth Date</P></div>
                <div class="col-2"><P class="h6">{{Auth::user()->birth_date}}</P></div>
            </div>
        </div>
    </div>

    <div class="card shadow-sm container  my-5" style="font-family: 'Permanent Marker', cursive;
                        font-family: 'Alegreya', serif;">
        <div class="row mt-5 ml-3 mb-5">
            <div class="col-1">
                <div class="bg-dark" style="transform: rotate(45deg); height: 20px; width:20px;"></div>
{{--                <p style="border-right: 3px solid #3b3a36; height: 130px;"></p>--}}
            </div>
            <div class="col-11 ml-0 ">
                <div class="row">
                    <p class="h4">Skills</p>
                </div>
                @if(count($data) > 0)
                    @foreach($data as $skill)
                        <div class="row">
                            <div class="col-4">
                                <ul class="ml-0">
                                    <li><p class="h5">{{$skill->skill}}</p></li>
                                </ul>
                            </div>
{{--                            <div class="col-3">--}}
{{--                                <div class="row">--}}
{{--                                    <span class="fa fa-star" style="color: orange;"></span>--}}
{{--                                    <span class="fa fa-star"></span>--}}
{{--                                    <span class="fa fa-star"></span>--}}
{{--                                    <span class="fa fa-star"></span>--}}
{{--                                    <span class="fa fa-star"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    @endforeach
                @else
                    <div class="row"></div>
                @endif
                </div>
            </div>
        <div class="row ml-3 mb-5">
            <div class="col-1">
                <p class="bg-dark" style="transform: rotate(45deg); height: 20px; width:20px;"></p>
{{--                <p style="border-right: 3px solid #3b3a36; height: 150px;"></p>--}}
            </div>
            <div class="col-11 ml-0">
                <div class="row">
                    <p class="h4">Work Experience</p>
                </div>
                @if(count($data) > 0)
                    @foreach($data as $experience)
                        <div class="row mb-3">
                            <div class="col-3 mr-0">
                                <div class="row">
                                    <p class="h5">
                                        <span class="h6" style="color: white">To &nbsp; &nbsp;</span>
                                        {{$experience->start_date}}</p>
                                </div>
                                <div class="row">
                                    <p class="h5">
                                        <span class="h6">To &nbsp; &nbsp;</span>
                                        {{$experience->end_date}}</p>
                                </div>
                            </div>
                            <div class="col-9 ml-0">
                                <p class="h5"><b>{{$experience->job_name}}</b></p>
                                <p class="h6">{{$experience->company}}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                        <div class="row"></div>
                @endif
            </div>
        </div>
        <div class="row ml-3 mb-5">
            <div class="col-1">
                <p class="bg-dark" style="transform: rotate(45deg); height: 20px; width:20px;"></p>
{{--                <p style="border-right: 3px solid #3b3a36; height: 150px;"></p>--}}
            </div>
            <div class="col-11">
                <div class="row">
                    <p class="h4">Education History</p>
                </div>
                @if(count($data)>0)
                    @foreach($data as $education)
                        <div class="row mt-3">
                            <div class="col-3 mr-0">
                                <div class="row">
                                    <p class="h5">
                                        <span class="h6" style="color: white">To &nbsp; &nbsp;</span>
                                        {{$education->start_date}}</p>
                                    </p>
                                </div>
                                <div class="row">
                                    <p class="h5">
                                        <span class="h6">To &nbsp; &nbsp;</span>
                                        {{$education->end_date}}</p>
                                </div>
                            </div>
                            <div class="col-9 ml-0">
                                <p class="h5"><b>{{$education->school}}</b></p>
                                <p class="h6">{{$education->degree}}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="row mt-3"></div>
                @endif
            </div>
        </div>
        <div class="row ml-3 mb-5">
            <div class="col-1">
                <p class="bg-dark" style="transform: rotate(45deg); height: 20px; width:20px;"></p>
{{--                <p style="border-right: 3px solid #3b3a36; height: 150px;"></p>--}}
            </div>
            <div class="col-11">
                <div class="row">
                    <p class="h4">Courses</p>
                </div>
                @if(count($data) > 0)
                    @foreach($data as $course)
                        <div class="row mt-3">
                            <div class="col-3 mr-0">
                                <div class="row">
                                    <p class="h5">
                                        <span class="h6" > &nbsp; &nbsp;</span>
                                        {{$course->date}}</p>
                                    </p>
                                </div>
                            </div>
                            <div class="col-9 ml-0">
                                <p class="h5"> {{$course->course}}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="row mt-3"></div>
                @endif
            </div>
        </div>
        <div class="row ml-3 mb-5">
            <div class="col-1">
                <p class="bg-dark" style="transform: rotate(45deg); height: 20px; width:20px;"></p>
                {{--                <p style="border-right: 3px solid #3b3a36; height: 150px;"></p>--}}
            </div>
            <div class="col-11">
                <div class="row">
                    <p class="h4">Certificates</p>
                </div>
                @if(count($data) > 0)
                    @foreach($data as $certificate)
                        <div class="row mt-3">
                            <div class="col-3 mr-0">
                                <div class="row">
                                    <p class="h5">
                                        <span class="h6" style="color: white"> &nbsp; &nbsp;</span>
                                        {{$certificate->date}}</p>
                                    </p>
                                </div>
                            </div>
                            <div class="col-9 ml-0">
                                <p class="h5"> {{$certificate->certificate}}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="row mt-3"></div>
                @endif
            </div>
        </div>
    </div>
@endsection