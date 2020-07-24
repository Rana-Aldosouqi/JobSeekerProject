@extends('user.shared.template')

{{--@section('title')--}}
{{--    Posts--}}
{{--@endsection--}}

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
{{--            <div class="col-9">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <h4>Filter</h4>--}}
{{--                        <hr>--}}
{{--                        <div class="col-12 col-lg-6 ">--}}
{{--                            <div class="btn-group">--}}
{{--                                <button class="btn btn-info">--}}
{{--                                    full time--}}
{{--                                </button>--}}
{{--                                <button class="btn btn-primary">--}}
{{--                                    Part-time--}}
{{--                                </button>--}}
{{--                                <button class="btn btn-success">--}}
{{--                                    Freelance--}}
{{--                                </button>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                    </div>--}}

{{--                </div>--}}

{{--            </div>--}}

        </div>
        <div class="card-body">
{{--            <div style="background-color: ">--}}
{{--                <a class="navbar-brand" href="#"><h1 style="color: #004bff;" id="lgoo"><span style="color: black">Job</span >seeker</h1></a>--}}

{{--            </div>--}}
            <div class="justify-content-center ">

{{--                @if(Session::has('message'))--}}

{{--                    <div class="alert-success text-center" >--}}
{{--                        <h6>--}}
{{--                            {{Session::get('message')}}--}}
{{--                        </h6>--}}
{{--                    </div>--}}

{{--                @endif--}}
            </div>
            <div>
                @foreach($data->posts()->take(5)->get() as $post)

                    <div class="row mt-3" id="postscontainer">

                        <div class="row justify-content-center " style=" width:100% !important;" >
                            <div class="col-10 shadow " >
                                <div class="media mt-2 " style="width:100% !important; " data-groups='["cat-1"{{$post->type=1?',"fulltime"':''}}]'>
                                    <img src="{{asset('assets/img1/55.jpg')}}"height="120" width="150" class="mr-3" alt="...">
                                    <div class="media-body" >
                                        <h5 class="mt-2">{{$post->job_title}}
                                            @if (date("Y-m-d",strtotime($post['created_at'])) == date("Y-m-d"))
                                                <span class="badge badge-success">New</span>
                                            @endif
                                        </h5>
                                        <p > Job Type:
                                            @if(($post->type)==1)
                                                Full Time-
                                            @elseif(($post->type)==2)
                                                Part Time-
                                            @else
                                                Freelancer-
                                            @endif
                                            Minimum Salary:{{$post->min_salary}}- Maximum Salary:{{$post->max_salary}}</p>
                                        <div class="mb-4 mt-4"><a href="/apply/{{$post->id}}" >SHOW MORE</a></div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

            <div class="container h-100 w-200">
                <div class="row h-100 justify-content-center ">
                    <div class="col-2 mt-5">
{{--                        {{ $data->links() }}--}}
{{--                        <a href="#" class="btn btn-primary btn-shadow w-200 py-2">--}}
{{--                            see more--}}
{{--                        </a>--}}
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection























{{--@section('content')--}}
{{--    <div class="row mt-5">--}}
{{--        <div class="col-12">--}}
{{--            <div class="row" id="productsContainer">--}}
{{--                @foreach($data as $post)--}}
{{--                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 mt-3 product-item"--}}
{{--                    --}}{{--                     data-price="{{$product->selling_price}}"--}}
{{--                    --}}{{--                     data-discount="{{$product->discount}}"--}}
{{--                    --}}{{--                     data-amount="{{$product->amount_left}}"--}}
{{--                    --}}{{--                     data-name="{{$product->name}}"--}}
{{--                    --}}{{--                     data-groups='[{{!$product->in_stock ? '"sold-out"': ''}}--}}
{{--                    --}}{{--                     {{!$product->in_stock && $product->is_new? ",": ""}}--}}
{{--                    --}}{{--                     {{$product->is_new ? '"new"': ''}}]'>--}}
{{--                    --}}{{--                    @include('user.product')--}}
{{--                    <p>{{$post->job_title}}</p>--}}
{{--                    <hr>--}}
{{--                    <p>{{$post->career_level}}</p>--}}
{{--                    <hr>--}}
{{--            </div>--}}


{{--        </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--    <div class="text-center mt-4">--}}
{{--        {{ $post->links() }}--}}
{{--    </div>--}}
{{--    </div>--}}


{{--@endsection--}}
