@extends('user.shared.template')
@section('title')
     Courses
@endsection
@section('content')
    <div >
        <img src="{{asset('assets//img1/66.jpg')}}" height="300" width="100%"/>
    </div>


    <div class="container mt-5" style="font-family: 'Permanent Marker', cursive; font-family: 'Alegreya', serif;">
        <div class="row">

            <div class="col-sm-3">
                <div class="row">
                  <div class="card" style="width:100%;">

                          <div class="card-body">

                              <h4 class="card-title">Filter Your Result</h4>
                              <hr>

                              <button type="button" class="btn btn-primary btn-block mb-2" id="showAllBtn">All</button>


                              <div id="accordion" >

                                  <div class="card" >
                                      <div class="card-header" style="background-color: white !important;" >
                                          <a style="color: dodgerblue;"name="level" class="card-link" data-toggle="collapse" href="#collapseOne">
                                             Course level
                                          </a>
                                      </div>
                                      <div id="collapseOne" class="collapse " data-parent="#accordion">
                                          <div class="card-body">
                                              <div class="btn-group-vertical"  style="width: 100%;">


                                                  <button type="button" class="btn btn-light btn-block" id="BeginnerBtn">Beginner</button>
                                                  <button type="button" class="btn btn-light  btn-block" id="mediumBtn">medium</button>
                                                  <button type="button" class="btn btn-light  btn-block" id="professionalBtn">professional</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="card">
                                      <div class="card-header" style="background-color: #ffffff !important;">
                                          <a style="color: dodgerblue;" name="specialize" class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                              Course specialize
                                          </a>
                                      </div>
                                      <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                          <div class="card-body">
                                              <div class="btn-group-vertical" style="width: 100%;">
                                                  <button type="button" class="btn btn-light btn-block" id="EngineeringBtn">Engineering</button>
                                                  <button type="button" class="btn btn-light btn-block" id="medicineBtn">medicine</button>
                                                  <button type="button" class="btn btn-light btn-block" id="LawBtn">Law</button>
                                                  <button type="button" class="btn btn-light btn-block" id="TeachingBtn">Teaching</button>
                                              </div>
                                          </div>
                                      </div>
                                  </div>



                                  <div class="card">
                                      <div class="card-header" style="background-color: white !important;">
                                          <a style="color: dodgerblue;" name="Language" class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                              Course Language
                                          </a>
                                      </div>
                                      <div id="collapseFour" class="collapse" data-parent="#accordion">
                                          <div class="card-body">
                                              <div class="btn-group-vertical" style="width: 100%;">

                                                  <button type="button" class="btn btn-light btn-block" id="ArabicBtn">Arabic</button>
                                                  <button type="button" class="btn btn-light btn-block" id="EnglishBtn">English</button>
                                                  <button type="button" class="btn btn-light  btn-block" id="FrenchBtn">French</button>
                                                  <button type="button" class="btn btn-light  btn-block" id="JapanBtn">Japan</button>
                                                  <button type="button" class="btn btn-light  btn-block" id="ItalyBtn">Italy</button>
                                              </div>

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
            </div>



            <div class="col-sm-9">
                <div class="justify-content-center ">
                    @if(Session::has('message'))

                        <div class="alert-success text-center" >
                            <h6>
                                {{Session::get('message')}}
                            </h6>
                        </div>

                    @endif
                </div>


            <div class="">
                <div class="card bg-light">

                  <div class="card-body bg-white ">
                    <div class="row">
                        <div id=courseContainer">
                         @foreach($newcourses as $course)
                                <div class="col mt-3 post-item "  data-groups='["{{$course->level}}"{{$course->specialize}}"{{$course->Language}}"]' >
                          <div class="row justify-content-center "style=" width:100% !important; ">

                            <div class="col-10 shadow ">
                                <div class="media mt-2 "style="width:100% !important; ">
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
                                           -Course level:
                                            @if(($course->type)==1)
                                                Beginner
                                            @elseif($course->type)==2)
                                            medium
                                            @else
                                                professional
                                            @endif

                                            -Specialization:
                                            @if(($course->type)==1)
                                                Engineering
                                            @elseif($course->type)==2)
                                            medicine
                                            @elseif($course->type)==3)
                                            Law
                                            @else
                                                Teaching
                                            @endif

                                          -Course language:
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
                                            @endif-
                                           Start at:  {{$course->start_date}}-End at: {{$course->end_date}}Course price: {{$course->salary}}-
                                          time in houres:  {{$course->time}}-Phone number:{{$course->phone}}
                                        </p>


                                        <a href="/courseDetails/{{$course->id}}" class=" mb-4">Details</a>
                                    </div>
                                </div>

                            </div>

                           </div>
                                </div>
                         @endforeach
                        </div>
                    </div>

                    <div class="container h-100 w-100">
                        <div class="row h-100 justify-content-center ">
{{--                            <div class="col-3 mt-5">--}}
{{--                                {{$course->links()}}--}}
{{--                            </div>--}}
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
            var element = document.querySelector('#courseContainer');
            var sizer = element.querySelector('.my-sizer-element');
            var shuffleInstance = new Shuffle(element, {
                itemSelector: '.post-item',
                sizer:sizer,
            });
            shuffleInstance.filter();

            $('#BeginnerBtn').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter('3');
            });
            $('#mediumBtn').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter('1');
            });
            $('#professionalBtn').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter('2');
            });
            $('#showAllBtn').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter();
            });
            $('#EngineeringBtn').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter('senior');
            });
            $('#medicineBtn').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter('student');
            });
            $('#LawBtn').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter('manger');
            });
            $('#TeachingBtn').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter('manger');
            });
            $('#ArabicBtn').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter('manger');
            });
            $('#EnglishBtn').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter('manger');
            });
            $('#FrenchBtn').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter('manger');
            });
            $('#JapanBtn').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter('manger');
            });
            $('#ItalyBtn').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter('manger');
            });

        });
    </script>
@endsection
