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
                                <div class="card p-0 shadow-sm" style="position:relative;">
                                    <img src="{{asset('/assets/images/images.png')}}" style="height:227px;"></i>
                                    <button class="btn rounded-0 btn-dark" style="position: absolute; margin-top: 175px;height:52px; width:228px;opacity: 40%;">
                                        Change
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <form>
                                <h5 class="mt-2">HR</h5>
                                <div class="form-row">
                                    <div class="col-10">
                                        <fieldset disabled>
                                            <div class="form-group">
                                                <input type="text" id="#coursolindicators" class="form-control"
                                                       style="height: 32px;" placeholder="Name One">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-1">
                                        <button class="btn btn-sm bg-danger btn-dark border-danger rounded">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-10">
                                        <fieldset disabled>
                                            <div class="form-group">
                                                <input type="text" id="#coursolindicators" class="form-control" style="height: 32px;" placeholder="Name Two">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-1">
                                        <button class="btn btn-sm bg-danger btn-dark border-danger rounded">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="form-row mt-1">
                                    <div class="col-10">
                                        <input type="text" class="form-control" id="#coursolindicators" style="height: 32px;" placeholder="Add Name">
                                    </div>
                                    <div class="col-1">
                                        <button class="btn btn-sm btn-success rounded">
                                            <i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-8 ml-3" >
                        <form action="{{'/shered/',$account->id }}" method="POST" >
                            @csrf
                            @method('put')
                            <div class="col-7 ml-5" ><h1><u>Account Settings</u></h1></div>
                            <div class="form-row mt-5"></div>


                        </form>
                        <form  action="{{'/shered/',$account->id }}" method="post" >
                            @csrf
                            @method('put')
                            <div class="col-12">
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Company Name:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" name="first_name"  value="{{'$post->first_name'}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Email:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="email" class="form-control" name="email" placeholder="" value="{{'$post->email'}}">
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Phone Number:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="number"  name="phone_number" class="form-control"  value="{{'$post->phone_number'}}">
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2"> Address:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="#coursolindicators"  >
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Work Field:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="#coursolindicators"  >
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Work Times:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="#coursolindicators" name="Work_Times">
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Foundation Date:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="#coursolindicators" >
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Hourly Rate:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="#coursolindicators">
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Total Projects:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="#coursolindicators">
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Availability:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="#coursolindicators">
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2"> Description:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="#coursolindicators">
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
