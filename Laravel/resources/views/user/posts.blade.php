@extends('user.shared.template')

@section('title')
    Posts
@endsection

@section('content')

    <div class="Bunner" style="width:auto; height: 300px;">
        <div class="card bg-dark text-white" style="border: none !important; ">
            <img class="card-img" style=" height: 250px; !important;" src="{{asset('assets/img/banner2.jpg')}}" alt="Card image">
            <div class="card-img-overlay text-center">

                <p class="card-text mt-5" style="margin: auto;" >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                <div class="input-group mb-3 mt-3" style="width: 60%; margin: auto;">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1" style="background: white;"><i style="color: #004bff;" class="fa fa-search"></i></span>
                    </div>

                    <input type="text" class="form-control" placeholder="Search by job titel,Keyword,..." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary md" type="button" id="button-addon2">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <h4>Filter</h4>
                        <hr>
                        <div class="col-12 col-lg-6 ">
                            <div class="btn-group">
                                <button class="btn btn-info">
                                   full time
                                </button>
                                <button class="btn btn-primary">
                                    Part-time
                                </button>
                                <button class="btn btn-success">
                                    Freelance
                                </button>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
     <div class="card-body">
         <div class="justify-content-center ">

             @if(Session::has('message'))

                 <div class="alert-success text-center" >
                     <h6>
                         {{Session::get('message')}}
                     </h6>
                 </div>

             @endif
         </div>
         <div>
             @foreach($topPosts as $topPost)

                 <div class="row mt-3" id="postscontainer">

                     <div class="row justify-content-center " style=" width:100% !important;" >
                         <div class="col-10 shadow " >
                             <div class="media mt-2 " style="width:100% !important; " data-groups='["cat-1"{{$topPost->type=1?',"fulltime"':''}}]'>
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
@endsection
