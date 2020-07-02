@extends('user.shared.template')
@section('title')
    Home
@endsection
@section('content')
    <link rel="stylesheet" href="{{asset('/assets/css/homestyle.css')}}"/>
    <div class=" pt-0.5" id="sli" style="position: absolute;">
        <div class="carousel slide bg-gainsboro " id="demo" data-ride="carousel" data-interval="3900">
            <ul class="carousel-indicators">
                <li data-slide-to="1" data-target="#demo"></li>
                <li data-slide-to="2" data-target="#demo"></li>
                <li data-slide-to="3" data-target="#demo"></li>
                <li data-slide-to="4" data-target="#demo"></li>
            </ul>
            <div class="carousel-inner text-center m-auto width=100% height=400px">
                <div class="carousel-item active">
                    <img src="{{asset('assets/images/crs5.png')}}" width="100%" height="400px"/>
                    <div class="carousel-caption">
                        <div class=" text-center mb-5" style="margin-bottom:10% !important;">
                            <h2 class="card-text mt-1"
                                style="margin: auto; color: black; text-shadow: 4px 0px 3px gray;">POST YOUR JOB
                                TODAY</h2>

                            <h3 class="card-text " style="margin: auto; color: black; text-shadow: 4px 0px 3px gray;">
                                Searching for vacancies & career opportunities? We will help you</h3>


                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/images/crs4.png')}}" width="100%" height="400px"/>
                    <div class="carousel-caption">
                        <div class=" text-center mb-5" style="margin-bottom:15% !important;">

                            <h3 class="card-text " style="margin: auto; color: black; text-shadow: 4px 0px 3px gray;">
                                Creating profile will help you
                                To Build your resume</h3>
                            <h3 class="card-text " style="margin: auto; color: black; text-shadow: 4px 0px 3px gray;">&
                                Apply for jobs easily</h3>


                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/images/crs3.png')}}" width="100%" height="400px"/>
                    <div class="carousel-caption">
                        <div class=" text-center mb-5" style="margin-bottom:15% !important;">


                            <h3 class="card-text " style="margin: auto; color: black; text-shadow: 4px 0px 3px gray;">
                                Find volunteer work and a lot of courses</h3>


                        </div>
                    </div>
                </div>

            </div>

            <a href="#demo" class="carousel-control-prev" data-slide="prev" data-target="#demo"><span
                        class="carousel-control-prev-icon"></span></a>
            <a href="#demo" class="carousel-control-next" data-slide="next" data-target="#demo"><span
                        class="carousel-control-next-icon"></span></a>

        </div>
    </div>
    <!--end slidebar!-->




    <div class="row justify-content-center " style="margin-top: 27%; ">
        <div class="col-sm-8 ">
            <div class="card shadow">
                <div class="card-body justify-content-center">
                    <form class="form-inline justify-content-center" action="/search" method="POST" role="search">
                        {{ csrf_field() }}
                        <div class="input-group" style="width: 80%;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1" style="background: white;"><i
                                            style="color: #004bff;" class="fa fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Keywords..." id="text"
                                   style="width: 100%;" name="q">
                            <button type="submit" class="btn btn-primary">FIND JOBS</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>


    </div>

    {{--    <div style="height: 10px;"></div>--}}

    <div class="container">

        <br>
        <br>

        {{------------------------------------------------------------------------------------------------------------------------}}
        <div class="row mt-5 ">
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <img src="{{asset('assets/img/undraw_reviewed_docs_neeb.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-center">Show Yourself</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <img src="{{asset('assets/img/undraw_updated_resume_u4fy.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-center">Build Your Resume</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <img src="{{asset('assets/img/undraw_online_payments_luau.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-center">Select Your Payment Plan</h4>
                        <p class="card-text">Some quick example text to build on the card title .</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <img src="{{asset('assets/img/undraw_quiz_nlyh.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-center">Create Online Test</h4>
                        <p class="card-text te">Some quick example text to build on the card title and make up the bulk
                            of the card .</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>


        {{--  -----------------------------------------------------------------------------------------------------------------------}}

        <div class="row mt-5 mb-3 " style="">
            <div class="jumbotron jumbotron-fluid " style="width: 100%;">
                <div class="container">
                    <h1 class="display-4 text-center">Join Us Now</h1>
                    <p class="lead text-center">You are minutes away from the right job.</p>
                    <div class="card-body align-content-center">
                        <p class="text-center"><a href="/Register" class="btn btn-primary ">Register</a></p>

                    </div>

                </div>
            </div>
        </div>


        {{-- --------------------------------------------Latest added jobs-------------------------------------------------}}
        <div class="row">
            <div class="col-12" style=" border-left: 7px solid #19692c;">
                <div class="card" style="border: none;">
                    <div class="card-body">
                        <h3>Latest added Jobs</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach($topPosts as $topPost)
                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mt-3 ">
                    <div class="card " style="width: 16rem;">
                        <div class="card-body">
                            <h6 class="card-title">{{$topPost->job_title}}
                                @if (date("Y-m-d",strtotime($topPost['created_at'])) == date("Y-m-d"))
                                    <span class="badge badge-success">New</span>
                                @endif
                            </h6>
                            <h6 class="card-subtitle mb-2 text-muted">

                                <p class="card-text">
                                    Job Type:
                                    @if(($topPost->type)==1)
                                        Full Time
                                    @elseif(($topPost->type)==2)
                                        Part Time
                                    @else
                                        Freelancer
                                    @endif

                                </p>

                            </h6>
                            <a href="/apply/{{$topPost->id}}" class="card-link">Show More</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-3 justify-content-center">
            <div class="col ">
                <a href="/Alljobs" class="text-center ml-5">See All Jobs</a>
            </div>
        </div>
        {{--                Eman--}}
        <div class="row">
            <div class="col-12" style=" border-left: 7px solid #19692c;">
                <div class="card" style="border: none;">
                    <div class="card-body">
                        <h3>FeedBack</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="card">
                <div class="card-body">
                    @foreach($feesbacks as $feedback )
                        <div class="media">
                            <img class="mr-3"
                                 src="{{Auth::user()->image ? asset(Auth::user()->image->path): ""}}/64x64">
                            <div class="media-body">
                                <h5 class="mt-0">{{$feedback->name}}</h5>
                                <span class="text-justify"> {{$feedback->message}}</span>
                                <hr>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
