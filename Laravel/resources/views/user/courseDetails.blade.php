@extends('user.shared.template')
@section('title')
    Course details
@endsection
@section('content')

    <div class="container"  style="font-family: 'Permanent Marker', cursive; font-family: 'Alegreya', serif;" >

        @foreach($post as $post)

            <div class="row">
                <div class="col-sm-8  mt-3">
                    <div class="card mt-3 bg-light shadow" >
                        <div class="card-body">
                            <div class="row">

                                <div class="col-sm-10">
                                    <h4>{{$post->job_title}}</h4>
                                    <a href="" style="float: left;">{{$post->User->username}}</a>
                                    <p> - Cairo</p>

                                </div>
                                <div class="col-sm-2">
                                    <img src="img/Cisco-Egypt-37045-1540299184-sm.png"  alt="Cinque Terre" id="img1"/>
                                </div>
                            </div>
                            <table class="table table-striped">

                                <tbody >
                                <tr style="background-color:#F5F5F5 !important ; ">
                                    <td ><!-- Button trigger modal -->

                                        @if(($post->vacancies)==0)
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" disabled>
                                                Apply Now
                                            </button>
                                        @else
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                                Apply Now
                                            </button>
                                    @endif




                                    <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">attention</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        You need To Pay first
                                                        {{--                                                    {{$test=$post->id}}--}}


                                                        @if(($post->hastest)==1)
                                                            and answer the test
                                                        @else

                                                        @endif

                                                    </div>
                                                    <div class="modal-footer">

                                                        <a href="/apply/{{$post->id}}/done" class="btn btn-dark">Pay</a>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>


                                    <td style="padding-top: 3%;"><a href="#"><h5>Applicants for open positions <span class="badge badge-warning">{{$post->vacancies}}</span></a><br></td>

                                </tr>

                                </tbody>
                            </table>

                        </div>

                    </div>
                    <div class="card bg-light shadow" style=" fontsize:20px" >
                        <div class="card-body">
                            <table class="table table-hover">

                                <tbody>
                                <tr>
                                    <th><h5>Experience Needed:</h5></th>
                                    <th><h6>{{$post->experience}}</h6></th>

                                </tr>

                                <tr>
                                    <th><h5>Career Level:</h5></th>
                                    <th><h6>
                                            @if(($post->career_level)==1)
                                                Senior
                                            @elseif(($post->career_level)==2)
                                                Student
                                            @else
                                                Manger
                                            @endif
                                        </h6></th>
                                </tr>
                                <tr>
                                    <th><h5>Job Type:</h5></th>
                                    <th><h6>
                                            @if(($post->jobtype)==1)
                                                Full Time
                                            @elseif(($post->jobtype)==2)
                                                Part Time
                                            @else
                                                Freelancer
                                            @endif
                                        </h6></th>
                                </tr>
                                <tr>
                                    <th><h5>Languages:</h5></th>
                                    <th><h6>English</h6></th>
                                </tr>
                                <tr>
                                    <th><h5>Salary:</h5></th>
                                    <th><h6>From:{{$post->min_salary}} To:{{$post->max_salary}}</h6></th>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="card bg-light shadow">
                        <div class="card-body">
                            <h4><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>About The Job</h4>
                            <h5 style="margin-top: 5%; margin-bottom: 2%;">More Job Requirements:</h5>
                            <h6>{{$post->other}}</h6>

                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mt-5">
                    <div class="card bg-light shadow " >
                        <div class="card-body">
                            <h4><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>About this Company</h4>
                            <p>{{$post->User->description}}</p>
                        </div>


                    </div>
                    <div class="card bg-light shadow mt-4">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="thumbnail">
                                        <a href="/categories/{{$post->category_id}}">
                                            <img src={{asset('assets/img/shutterstock-526839118-engineering-job-works-4-vbkyh.jpg')}} alt="Lights" style="width:100%">
                                            <div class="caption mt-1">
                                                <p style="color: #004bff ;" >More {{$post->Category->name}} Jops</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>



                    </div>

                    <div class="card bg-light shadow mt-4">


                        <div class="card-body">
                            <h4>Browse jobs and start building your CV online</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                            <a href="/Register" class="btn btn-dark">Join Now</a>
                        </div>



                    </div>

                </div>

            </div>
        @endforeach
    </div>

@endsection
