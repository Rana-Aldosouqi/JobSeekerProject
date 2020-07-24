@extends('user.shared.template')
@section('content')
    <head>

        <title>{{env('APP_NAME','job seeker')}}</title>
    </head>
    <div >
        <img src="{{asset('assets/img1/Training.jpg')}}"height="270" width="100%" />

    </div>

    </main>


    <div class="container">
        <div class="row ">
            <div class="col-sm-3 " style="margin-top:30px">
                <div class="row">
                    <div class="card " style="width:100%;border-radius: 10px;">
                        <div class="card-body">

                            <h4 class="card-title">Filter Your Result</h4>
                            <hr>

                            <button type="button" class="btn btn-primary btn-block mb-2" id="showAllBtn">All</button>


                            <div id="accordion" >

                                <div class="card" >
                                    <div class="card-header" style="background-color: white !important;" >
                                        <a style="color: dodgerblue;" class="card-link" data-toggle="collapse" href="#collapseOne">
                                            Specialization
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse " data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="btn-group-vertical"  style="width: 100%;">


                                                <button type="button" class="btn btn-light btn-block" id="showBusiness">Business</button>
                                                <button type="button" class="btn btn-light  btn-block" id="showmedical">medical</button>
                                                <button type="button" class="btn btn-light  btn-block" id="showTeaching">Teaching</button>
                                                <button type="button" class="btn btn-light  btn-block" id="showEngineering">Engineering</button>
                                                <button type="button" class="btn btn-light  btn-block" id="showProgramming">Programming</button>
                                                <button type="button" class="btn btn-light  btn-block" id="showArt">Art</button>
                                                <button type="button" class="btn btn-light  btn-block" id="showLaw">Law</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header" style="background-color: white !important;">
                                        <a style="color: dodgerblue;" name="age" class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                            Career Level
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="btn-group-vertical" style="width: 100%;">

                                                <button type="button" class="btn btn-light btn-block" id="showStudent">Student</button>
                                                <button type="button" class="btn btn-light btn-block" id="showSenior">Senior</button>
                                                <button type="button" class="btn btn-light btn-block" id="showgraduate">graduate</button>
                                                <button type="button" class="btn btn-light  btn-block" id="showManger">Manger</button>

                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-header" style="background-color: #ffffff !important;">
                                        <a style="color: dodgerblue;" class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                            City
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="btn-group-vertical" style="width: 100%;">
                                                <button type="button" class="btn btn-light btn-block" id="showMans" >Mansoura</button>
                                                <button type="button" class="btn btn-light btn-block" id="showCairo">Cairo</button>
                                                <button type="button" class="btn btn-light btn-block" id="showDommi">Dommitta</button>
                                                <button type="button" class="btn btn-light btn-block" id="showAlex" >Alxandria</button>
                                                <button type="button" class="btn btn-light btn-block" id="showOthers">Others</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




</div>
            </div>
                    <div class="col-sm-9">
                        @if(Session::has('message'))

                            <div class="alert-success text-center" >
                                <h6>
                                    {{Session::get('message')}}
                                </h6>
                            </div>

                        @endif

                            <div class="card bg-white" style="border-radius: 10px;margin-top:30px">
                        @foreach($Trainposts as $trnPost)
                <div class="card-body">
                    <div class="row" >

                        <!--start cards---->

                        <div class="row justify-content-center  " style=" width:100% !important;">
                            <div class="col-10 shadow "  style="border-radius:10px;">
                                <div class="media mt-2 ">
                                    <img src="{{asset('assets/img1/55.jpg')}}"height="120" width="150" class="mr-3" alt="..."  style="margin-top:15px ;border-radius: 10px ">
                                    <div class="media-body" width="70"  style="margin-top:10px ;margin-bottom: 15px">
                                        <h5 class="mt-2">{{$trnPost->job_title}}</h5>
                                        <p class="card-text">  Companey: {{$trnPost->company}}</p>
                                        <p class="card-text">  Specialization:
                                            @if(($trnPost->type)==1)
                                                Business
                                            @elseif(($trnPost-> type)==2)
                                                medical
                                            @elseif(($trnPost-> type)==3)
                                                Teaching
                                            @elseif(($trnPost->type)==4)
                                                Engineering
                                            @elseif(($trnPost-> type)==5)
                                                Programming
                                            @elseif(($trnPost-> type)==6)
                                                Art
                                            @elseif(($trnPost-> type)==7)
                                                law
                                            @else
                                                others
                                            @endif</p>
                                        <p class="card-text"> career level:
                                            @if(($trnPost->career_level)==1)
                                                Student
                                            @elseif(($trnPost->career_level)==2)
                                                Senior
                                            @elseif(($trnPost->career_level)==3)
                                                graduate
                                            @elseif(($trnPost->career_level)==4)
                                                 Manger
                                            @else
                                                others
                                            @endif</p>
                                        <p class="card-text" >City:
                                            @if(($trnPost->city)==1)
                                                Mansoura
                                            @elseif(($trnPost->city)==2)
                                                Cairo
                                            @elseif(($trnPost->city)==3)
                                                Alxandria
                                            @elseif(($trnPost->city)==4)
                                                Dommitta
                                            @else
                                                others
                                            @endif</p>
                                        <p class="card-text"> Train time from {{$trnPost->time_start_at}} Am to {{$trnPost->time_end_at}} Am</p>
                                        <p class="card-text">The training starts {{$trnPost->date_start_at}} to {{$trnPost->date_end_at}}</p>
                                        <p class="card-text">Salary:  {{$trnPost->min_salary}} to {{$trnPost->max_salary}} bounds</p>
                                        <p class="card-text"> We still need {{$trnPost->vacancies}} for this job </p>
                                        <p class="card-text">  {{$trnPost->other}} </p>

                                    </div>
                                    <div class=" container col-2  " style="margin-top: 10px">
                                        <button  class="btn btn-primary  ">Apply</button>
                                    </div>
                                </div>


                            </div>
                        </div>




                    </div>
                </div>
                        @endforeach
                            <div class="row mt-4">
                                <div class="col-md-12  d-flex justify-content-center">
                                    {{$Trainposts->links()}}
                                </div>
                            </div>
            </div>

                    </div>


        </div>

    </div>
        </div>
    </div>

@endsection





