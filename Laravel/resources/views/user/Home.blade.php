@extends('user.shared.template')
@section('title')
   Home
@endsection
@section('content')
    <link rel="stylesheet" href="{{asset('/assets/css/homestyle.css')}}"/>
    <div class=" pt-0.5" id="sli" style="position: absolute;">
        <div class="carousel slide bg-gainsboro "  id="demo" data-ride="carousel" data-interval="2500">
            <ul class="carousel-indicators">
                <li data-slide-to="1" data-target="#demo"></li>
                <li data-slide-to="2" data-target="#demo"></li>
                <li data-slide-to="3" data-target="#demo"></li>
                <li data-slide-to="4" data-target="#demo"></li>
            </ul>
            <div class="carousel-inner text-center m-auto width=100% height=400px">
                <div class="carousel-item active">
                    <img src="{{asset('assets/images/annie-spratt.jpg')}}" width="100%" height="400px"/>
                    <div class="carousel-caption">
                        <div class=" text-center mb-5">
                            <h1 class="card-text mt-5" style="margin: auto;" >POST YOUR JOB TODAY</h1>

                            <h3 class="card-text mt-5" style="margin: auto;" >Searching for vacancies & career opportunities? We will help you</h3>


                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/images/annie-spratt.jpg')}}" width="100%" height="400px"/>
                    <p class="carousel-caption">job Two</p>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/images/christina.jpg')}}" width="100%" height="400px"/>
                    <p class="carousel-caption">job Three</p>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('assets/images/frank.jpg')}}" width="100%" height="400px"/>
                    <p class="carousel-caption">job Four</p>
                </div>
            </div>

            <a href="#demo" class="carousel-control-prev" data-slide="prev" data-target="#demo"><span
                    class="carousel-control-prev-icon"></span></a>
            <a href="#demo" class="carousel-control-next" data-slide="next" data-target="#demo"><span
                    class="carousel-control-next-icon"></span></a>

        </div>
    </div>
    <!--end slidebar!-->
    <div class="row justify-content-center " style="margin-top: 27%;" >
        <div class="col-sm-8 ">
           <div class="card shadow">
               <div class="card-body">
                   <form class="form-inline" action="#">
                       <input type="text" class="form-control" placeholder="Keywords" id="text">

                       <input type="text" class="form-control" placeholder="Location" id="lo">

                       <button type="submit" class="btn btn-primary">FIND JOBS</button>
                   </form>
               </div>

           </div>
        </div>


    </div>

{{--    <div style="height: 10px;"></div>--}}

    <div class="container" >
        <br>
        <br>
        <div class="row">
            <div class="col-sm-3 ">
                <div class="row">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h4 class="card-title">FeedBack</h4>

                            <div class="form-group"  style="font-size:18px">
                                <label for="usr">what do you think about this website ?</label>
                                <input type="text" class="form-control" id="usr"/>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h4 class="card-title">FeedBack</h4>

                            <div class="form-group"  style="font-size:18px">
                                <label for="usr">what do you think about this website ?</label>
                                <input type="text" class="form-control" id="usr"/>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="col-sm-9">
                <div class="card bg-light">
                    <div class="card-body bg-white">
                        <h3 class="card-title text-center mb-4" style="text-decoration: underline;">Keep up with latest added jobs </h3>
                        <div>
                            @foreach($topPosts as $topPost)
                                <div class="row mt-3">

                                    <div class="row justify-content-center " style=" width:100% !important;" >
                                        <div class="col-10 shadow " >
                                            <div class="media mt-2 " style="width:100% !important; ">
                                                <img src="{{asset('assets/img1/55.jpg')}}"height="120" width="150" class="mr-3" alt="...">
                                                <div class="media-body" >
                                                    <h5 class="mt-2">{{$topPost->job_title}}</h5>
                                                    <p > Job Type:
                                                        @if(($topPost->type)==1)
                                                            Full Time-
                                                        @elseif(($topPost->type)==2)
                                                            Part Time-
                                                        @else
                                                            Freelancer-
                                                        @endif
                                                        Minimum Salary:{{$topPost->min_salary}}- Maximum Salary:{{$topPost->max_salary}}</p>
                                                    <div class="mb-4 mt-4"><a href="#" >SHOW MORE</a></div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
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






{{--        <div class="row">--}}

{{--            <div class="col-6">--}}
{{--                <h1 style="font-size:23px;"><u>Feedback</u></h1>--}}
{{--                <div class="col-8">--}}
{{--                    <div class="row">--}}
{{--                        <div class="form-group"  style="font-size:18px">--}}
{{--                            <label for="usr">what do you think about this website ?</label>--}}
{{--                            <input type="text" class="form-control" id="usr"/>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>
@endsection
