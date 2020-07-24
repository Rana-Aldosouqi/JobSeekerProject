@extends('user.shared.template')
@section('content')
    <head>
        <title>{{env('APP_NAME','job seeker')}}</title>
    </head>
    <div class="container" style="font-family: 'Permanent Marker', cursive;font-family: 'Alegreya', serif;">
        <div class="row mt-3"></div>
        <div class="card mt-5 bg-light shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 ml-5 mt-4 mb-3">
                        <div class="row">
                            <div class="form">
                                <form action="/setting/uploadImage" method="post" id="imageForm" enctype="multipart/form-data">
                                    @csrf
                                <div class="card p-0 shadow-sm profile-img" style="position:relative;">
                                    <img src="{{Auth::user()->img ? asset(Auth::user()->img->path): ""}}" style="height:227px; width: 270px"/>
                                    <div class="file btn btn-lg btn-secondary"  style="position: absolute; margin-top: 175px;height:52px; width:270px;opacity: 40%;">
                                      change photo <input type="file" id="img" name="img"/>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>



                    </div>
                    <div class="col-8 ml-3" >
                        <form action="" method="POST" >
                            @csrf
{{--                            @method('put')--}}
                            <div class="col-7 ml-5" ><h1><u>Account Settings</u></h1></div>
                            <div class="form-row mt-5"></div>


                        </form>
                        <form  action="" method="post" >
                            @csrf
{{--                            @method('put')--}}
                            <div class="col-12">
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Company Name:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="first_name"  value="{{Auth::user()->first_name}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">User Name:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="username"  value="{{Auth::user()->username}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Email:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="email" class="form-control" name="email" placeholder="" value="{{Auth::user()->email}}">
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Phone Number:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area"  name="phone_number" class="form-control"  value="{{Auth::user()->phone_number}}">
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2"> Address:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area "  name="address" class="form-control"  value="{{Auth::user()->address}}" >
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Work Field:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " name="work_field" class="form-control"   value="{{Auth::user()->work_field}}">
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Work Times:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " name="work_times" class="form-control"   value="{{Auth::user()->work_times}}">
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Foundation Date:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="date" id="start" class="form-control" name="foundation_date" value="{{Auth::user()->foundation_date}}" >
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Hourly Rate:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " name="Hourly_Rate" class="form-control"   value="{{Auth::user()->Hourly_Rate}}">
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Total Projects:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area "  name="Total_Projects" class="form-control"   value="{{Auth::user()->Total_Projects}}">
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Availability:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " name="Availability" class="form-control"  value="{{Auth::user()->Availability}}">
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2"> Description:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " name="description" class="form-control"   value="{{Auth::user()->description}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row mt-5 mb-2">
                                <div class="col-2 ml-5"></div>
                                <button type="button ml-3" class="btn btn-primary btn-md btn-block col-2 ">SAVE</button>
                                <div class="col-5 ml-3 mt-2" ><a href="#" class="stretched-link" id="#coursolindicators"><h5> Change Your Password?</h5></a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
