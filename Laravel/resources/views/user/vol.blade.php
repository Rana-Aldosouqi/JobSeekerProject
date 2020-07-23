@extends('user.shared.template')
@section('content')
<head>

    <title>{{env('APP_NAME','job seeker')}}</title>
</head>


 <section class="jumbotron text-center shadow-sm">
        <div class="container" >
          <h1 style="color:dark" class="jumbotron-heading">VOLANTEER WORKS</h1>
          <p class="lead text-muted">would you like to be part of our family?</p>
          <div class=" container col-2 ">
              <a type="button" href="/Register/" class="btn btn-primary btn-md btn-block ">JOIN US</a>

          </div>
        </div>
      </section>


 <div class="container">
     <div class="row ">
         <div class="col-sm-3 ">
             <div class="row">
                 <div class="card " style="width:100%;">
                     <div class="card-body">

                         <h4 class="card-title">Filter Your Result</h4>
                         <hr>

                         <button type="button" class="btn btn-primary btn-block mb-2" id="showAllBtn">All</button>


                         <div id="accordion" >

                             <div class="card" >
                                 <div class="card-header" style="background-color: white !important;border-radius: 10px;" >
                                     <a style="color: dodgerblue;" class="card-link" data-toggle="collapse" href="#collapseOne">
                                         Job Type
                                     </a>
                                 </div>
                                 <div id="collapseOne" class="collapse " data-parent="#accordion">
                                     <div class="card-body">
                                         <div class="btn-group-vertical"  style="width: 100%;">


                                             <button type="button" class="btn btn-light btn-block" id="showFull_time">Full-Time</button>
                                             <button type="button" class="btn btn-light  btn-block" id="showPart_time">Part-Time</button>

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



                             <div class="card">
                                 <div class="card-header" style="background-color: white !important;">
                                     <a style="color: dodgerblue;" name="age" class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                         Age
                                     </a>
                                 </div>
                                 <div id="collapseFour" class="collapse" data-parent="#accordion">
                                     <div class="card-body">
                                         <div class="btn-group-vertical" style="width: 100%;">

                                             <button type="button" class="btn btn-light btn-block" id="show16-25">16-25</button>
                                             <button type="button" class="btn btn-light btn-block" id="show25-45">25-45</button>
                                             <button type="button" class="btn btn-light  btn-block" id="show45-65">45-65</button>

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








             <div class="col-sm-9 ">
         <div class="justify-content-center ">

             @if(Session::has('message'))

                 <div class="alert-success text-center" >
                     <h6>
                         {{Session::get('message')}}
                     </h6>
                 </div>

             @endif



                 <div class=" " >
                             <div class="card bg-light" >
                                 <div class="card-body bg-white col-12"  >
                                     <div  id="volPostsContainer" >
                                         @foreach($volposts as $volPost)
                                             <div class="col mt-4 post-item "  data-groups='["{{$volPost->type}}"{{$volPost->age}}"{{$volPost->city}}"]' >
                                                 <div class="row justify-content-center " style=" width:100% !important;" >
                                                     <div class="col-11 shadow  "  style=" border-radius: 10px;" >
                                                         <div class="media mt-2 " style="width:100% !important;">
                                                             <img src="{{asset('assets/img1/55.jpg')}}"height="120" width="150" class="mr-3" alt="..." style=";border-radius: 3px; margin-top: 15px;">
                                                             <div class="media-body" style="margin-top: 15px; margin-bottom: 15px;" >
                                                                 <h5 class="card-text" > {{$volPost->job_title}}</h5>
                                                                 <p class="card-text" >Company: {{$volPost->company}}</p>
                                                                 <p class="card-text" >City:
                                                                     @if(($volPost->city)==1)
                                                                         Mansoura
                                                                     @elseif(($volPost->city)==2)
                                                                         Cairo
                                                                     @elseif(($volPost->city)==3)
                                                                         Alxandria
                                                                     @elseif(($volPost->city)==4)
                                                                         Dommitta
                                                                     @else
                                                                         others
                                                                     @endif</p>
                                                                 <p  class="card-text">Ages between:
                                                                     @if(($volPost->age)==16-25)
                                                                         16-25
                                                                     @elseif(($volPost->age)==25-45)
                                                                         25-45
                                                                     @else
                                                                         45-65
                                                                     @endif
                                                                 </p>
                                                                 <p class="card-text">The job starts at  {{$volPost->date_start_at}} to {{$volPost->date_end_at}}</p>
                                                                 <p class="card-text"> Job Type:
                                                                     @if(($volPost->type)==1)
                                                                         Full Time
                                                                     @else
                                                                         Part Time
                                                                 @endif
                                                                 <p class="card-text"> work time from {{$volPost->time_start_at}} Am to {{$volPost->time_end_at}} Am</p>
                                                                 <p class="card-text"> We still need {{$volPost->vacancies}} for this job </p>
                                                                 <p class="card-text">  {{$volPost->other}} </p>

                                                             </div>
                                                             <div class=" container col-2  " style="margin-top: 10px">
                                                                 <button  class="btn btn-primary  ">Apply</button>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         @endforeach

                                     </div>
                                     <div class="row mt-4">
                                         <div class="col-md-12  d-flex justify-content-center">
                                             {{$volposts->links()}}
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
                var element = document.querySelector('.volPostsContainer');
                var sizer = element.querySelector('.my-sizer-element');
                var shuffleInstance = new Shuffle(element, {
                itemSelector: '.post-item',
                sizer:sizer,
                });
                shuffleInstance.filter();

                $('#showMans').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter(1);
                });
                $('#showCairo').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter(2);
                });
                $('#showAlex').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter(3);
                });
                $('#showDommi').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter(4);
                });
                $('#showOthers').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter(5);
                });
                $('#showAll').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter();
                });
                $('#show16-25').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter('16-25');
                });
                $('#show25-40').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter('25-40');
                });
                $('#show40-60').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter('40-60');
                });
                $('#showFull_time').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter();
                });
                 $('#showPart_time').click(function (e) {
                e.preventDefault();
                shuffleInstance.filter();
                });


                });
    </script>
    @endsection




