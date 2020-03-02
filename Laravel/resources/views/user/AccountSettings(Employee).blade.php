@extends('user.shared.template')

@section('content')

    <div class="container" style="font-family: 'Permanent Marker', cursive; font-family: 'Alegreya', serif;">
        <div class="row mt-3 "></div>
        <div class="card mt-5 bg-light shadow  mx-auto ">
            <div class="card-body">
                <div class="row">

                    <div class="col-md-3 ml-5 mt-4 mb-3">
                        <div class="row">
                            <div class="form">
                                <div class="profile-img">

                                    <img src="{{asset('assets/images/profile  ')}}"/>
                                    <div class="file btn btn-lg btn-primary">
                                        Change Photo<input type="file" name="profileImage"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <form>
                                <h5 class="mt-3">Skills</h5>
                                <div class="form-row">
                                    <div class="col-9">
                                        <fieldset disabled>
                                            <div class="form-group">
                                                <input type="text" id="disabledTextInput" class="form-control"
                                                       style="height: 32px;" placeholder="Skill One">
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
                                    <span class="ml-5"></span>
                                    <span class="ml-3"></span>
                                    <span class="fa fa-star" style="color: orange;"></span>
                                    <span class="fa fa-star" style="color: orange;"></span>
                                    <span class="fa fa-star" style="color: orange;"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-9">
                                        <fieldset disabled>
                                            <div class="form-group">
                                                <input type="text" id="disabledTextInput2" class="form-control"
                                                       style="height: 32px;" placeholder="Skill Two">
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
                                    <span class="ml-5"></span>
                                    <span class="ml-3"></span>
                                    <span class="fa fa-star" style="color: orange;"></span>
                                    <span class="fa fa-star" style="color: orange;"></span>
                                    <span class="fa fa-star" style="color: orange;"></span>
                                    <span class="fa fa-star" style="color: orange;"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="Skill-data"
                                               style="height: 32px;" placeholder="Add SKill">
                                    </div>
                                    <div class="col-1">
                                        <button class="btn btn-sm btn-success rounded">
                                            <i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <span class="ml-5"></span>
                                    <span class="ml-3"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-8 ml-3">

                        <div class="col-7 ml-5" ><h1><u>Account Settings</u></h1></div>
                        <div class="form-row mt-3"></div>

                        <form  class=" mt-7">
                            <div class="col-12 mt-5">
                                <div class="form-row mt-7">
                                    <div class="col-3">
                                        <h5 class="mt-2">username</h5>
                                    </div>

                                    <div class="col-8">
                                        <input type="email" class="form-control" id="inputEmail"
                                        >
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Job Title:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control" id="inputNumber"
                                        >
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Email:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="Email " class="form-control" id="inputNumber"
                                        >
                                    </div>
                                </div>




                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Phone:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="inputNumber"
                                        >
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Age:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="inputNumber"
                                        >
                                    </div>
                                </div>


                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Gender:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="inputNumber"
                                        >
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Address:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="inputNumber"
                                        >
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Profession:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="inputNumber"
                                        >
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Education:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="inputNumber"
                                        >
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Experience:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="inputNumber"
                                        >
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Courses:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="inputNumber"
                                        >
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Certificate:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="inputNumber"
                                        >
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Hourly Rate:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="inputNumber"
                                        >
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Total Projects:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="inputNumber"
                                        >
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">English Level:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="inputNumber"
                                        >
                                    </div>
                                </div>

                                <div class="form-row mt-3">
                                    <div class="col-3">
                                        <h5 class="mt-2">Availability:</h5>
                                    </div>
                                    <div class="col-8">
                                        <input type="text-area " class="form-control" id="inputNumber"
                                        >
                                    </div>
                                </div>

                            </div>
                            <div class="form-row mt-5 ">
                                <div class="col-2 ml-5"></div>

                                <button type="button"  onclick="clickFun()" class="btn btn-primary btn-md btn-block col-2">SAVE</button>
                                <div class="col-5 ml-3 mt-2" ><a href="changepassword.html" class="stretched-link" id="btn"><h5> Change Your Password?</h5></a></div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
