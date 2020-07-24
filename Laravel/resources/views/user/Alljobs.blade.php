@extends('user.shared.template')
@section('title')
    AllJobs
@endsection
@section('content')
    <div class="Bunner" style="width:auto; height: 300px;">
        <div class="card bg-dark text-white" style="border: none !important; ">
            <img class="card-img" style=" height: 250px; !important;" src="{{asset('assets/img/banner2.jpg')}}" alt="Card image">
            <div class="card-img-overlay text-center">
                <p class="card-text mt-5" style="margin: auto;" >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <form class="form-inline justify-content-center" action="/search" method="POST" role="search">
                {{ csrf_field() }}
                <div class="input-group mb-3 mt-3" style="width: 60%; margin: auto;">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1" style="background: white;"><i style="color: #004bff;" class="fa fa-search"></i></span>
                    </div>

                    <input type="text" name="q" class="form-control" placeholder="Search by job titel,Keyword,..." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary md" type="submit" id="button-addon2">Search</button>
                    </div>
                </div>
            </form>

{{--                <h4 class="card-text mt-5" style="margin: auto;" >This is a wider card with supporting text below as a natural</h4>--}}
{{--                <h4 class="card-text">lead-in to additional content. This content is a little bit longer</h4>--}}

{{--                <div class="btn-group btn-group-lg mt-3" role="group" aria-label="Basic example">--}}
{{--                    <button type="button" class="btn btn-dark">CourseController</button>--}}
{{--                    <button type="button" class="btn btn-dark">Voulnteer</button>--}}
{{--                    <button type="button" class="btn btn-dark">Training</button>--}}
{{--                    <button type="button" class="btn btn-dark">Job</button>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row ">
            <div class="col-sm-3 ">
                <div class="row">
                    <div class="card " style="width:100%;">
                        <div class="card-body">

                            <h4 class="card-title">Filter Your Result</h4>
                            <hr>

                            <button type="button" class="btn btn-secondary btn-block mb-2" id="showAllBtn">All</button>


                            <div id="accordion" >

                                <div class="card" >
                                    <div class="card-header" style="background-color: white !important;" >
                                        <a style="color: green;" class="card-link" data-toggle="collapse" href="#collapseOne">
                                            Job Type
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse " data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="btn-group-vertical"  style="width: 100%;">

                                            <button type="button" class="btn btn-light btn-block" id="showfreelnceBtn">FreeLance</button>
                                            <button type="button" class="btn btn-light btn-block" id="showfulltimeBtn">Full-Time</button>
                                            <button type="button" class="btn btn-light  btn-block" id="showparttimeBtn">Part-Time</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" style="background-color: white !important;">
                                        <a style="color: green;" class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                            Career level
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="btn-group-vertical" style="width: 100%;">

                                            <button type="button" class="btn btn-light btn-block" id="showsenioreBtn">Senior</button>
                                            <button type="button" class="btn btn-light btn-block" id="showstudentBtn">Student</button>
                                            <button type="button" class="btn btn-light  btn-block" id="showmangerBtn">Manger</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="card">
                                    <div class="card-header" style="background-color: white !important;">
                                        <a style="color: green;" class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                            Other?
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            .....

                                        </div>
                                    </div>
                                </div>


                            </div>





                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="card" style="width: 100%;">
                        <img src="{{asset('assets/img/undraw_the_world_is_mine_nb0e.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Find the best for you</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class=""><a href="/Register" class="btn btn-primary ">Start Now</a></p>
                        </div>
                    </div>
                </div>


{{--                Eman--}}

               {{-- <div class="row mt-3">
                    <div class="card" style="width: 100%;">
                        <div class="card-header">
                            <h5>Feedback</h5>
                        </div>
                            @foreach($feesbacks as $feedback )
                                <div class="card-body">
                                    <div class="media">
                                        <img class="mr-3"
                                        src="{{Auth::user()->image ? asset(Auth::user()->image->path): ""}}/64x64">
                                        <div class="media-body">
                                            <h5 class="mt-0">{{$feedback->name}}</h5>
                                           <span class="text-justify"> {{$feedback->message}}</span>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    </div>
                </div>--}}

            </div>


            <div class="col-sm-9 ">




                    <div class="justify-content-center ">

                        @if(Session::has('message'))

                            <div class="alert-success text-center" >
                                <h6>
                                    {{Session::get('message')}}
                                </h6>
                            </div>

                        @endif
                    </div>


                <div class=" ">
                    <div class="card bg-light">
                        <div class="card-body bg-white " >

                            <div id="postsContainer">
                                @foreach($topPosts as $topPost)
                                    <div class="col mt-3 post-item"
                                         data-groups='["{{$topPost->jobtype}}","{{(($topPost->career_level)==1) ? 'senior': ''}}{{(($topPost->career_level)==2) ? 'student': ''}}{{(($topPost->career_level)==3) ? 'manger': ''}}"
                                         ]'>

{{--                                         data-groups='[{{(($topPost->career_level)==1) ? '"senior"': ''}}--}}
{{--                                                       {{(($topPost->career_level)==2) ? '"student"': ''}}--}}
{{--                                                       {{(($topPost->career_level)==3) ? '"manger"': ''}} ]'>--}}





                                        <div class="row justify-content-center " style=" width:100% !important;" >
                                            <div class="col-10 shadow  " >
                                                <div class="media mt-2 " style="width:100% !important; ">




                                                    <img src="{{asset('assets/img1/55.jpg')}}"height="120" width="150" class="mr-3" alt="...">
                                                    <div class="media-body" >

                                                        <h5 class="mt-2">{{$topPost->job_title}}
                                                            @if (date("Y-m-d",strtotime($topPost['created_at'])) == date("Y-m-d"))
                                                                <span class="badge badge-success">New</span>
                                                            @endif
                                                        </h5>
                                                        <p > Job Type:
                                                            @if(($topPost->jobtype)==1)
                                                                Full Time-
                                                            @elseif(($topPost->jobtype)==2)
                                                                Part Time-
                                                            @else
                                                                Freelancer-
                                                            @endif
                                                            Minimum Salary:{{$topPost->min_salary}}- Maximum Salary:{{$topPost->max_salary}}</p>

                                                        <div class="mb-4 mt-4"><a href="/apply/{{$topPost->id}}" >SHOW MORE</a></div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
{{--                                    <div class="col-1 my-sizer-element"></div>--}}
                                @endforeach
                            </div>

                            <div class="container h-100 w-100">
                                <div class="row h-100 justify-content-center ">
                                    <div class="col-3 mt-5">
                                        {{ $topPosts->links() }}
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
@section('more_js')
<script>
    $(document).ready(function (e) {

        var Shuffle = window.Shuffle;
        var element = document.querySelector('#postsContainer');
        var sizer = element.querySelector('.my-sizer-element');
        var shuffleInstance = new Shuffle(element, {
            itemSelector: '.post-item',
            sizer:sizer,
        });
        shuffleInstance.filter();

        $('#showfreelnceBtn').click(function (e) {
            e.preventDefault();
            shuffleInstance.filter('3');
        });
        $('#showfulltimeBtn').click(function (e) {
            e.preventDefault();
            shuffleInstance.filter('1');
        });
        $('#showparttimeBtn').click(function (e) {
            e.preventDefault();
            shuffleInstance.filter('2');
        });
        $('#showAllBtn').click(function (e) {
            e.preventDefault();
            shuffleInstance.filter();
        });
        $('#showsenioreBtn').click(function (e) {
            e.preventDefault();
            shuffleInstance.filter('senior');
        });
        $('#showstudentBtn').click(function (e) {
            e.preventDefault();
            shuffleInstance.filter('student');
        });
        $('#showmangerBtn').click(function (e) {
            e.preventDefault();
            shuffleInstance.filter('manger');
        });


    });
</script>
@endsection
