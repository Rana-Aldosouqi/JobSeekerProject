@extends('user.shared.template')
@section('content')
    <div class="container container-fluid"
         style=" font-family: 'Permanent Marker', cursive; font-family: 'Alegreya', serif;">
        <div class="row mt-4"></div>
        <div class="row">
            <div class="col-12 text-center"
                 style=" font-family: 'Permanent Marker', cursive; font-family: 'Alegreya', serif;">
                <h1><u>Resume Builder</u></h1>
            </div>
        </div>
        <div class="row mt-4"></div>
        <div class="row">
            <div class="card col-md-10 p-3 rounded bg-light shadow offset-1 offset-md-1 mb-5">
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('personal') ? 'active' : null}}"
                               href="{{url('personal')}}" role="tab">Personal Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('social') ? 'active' : null}}"
                               href="{{url('social')}}" role="tab">Social Links</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('experiences') ? 'active' : null}}"
                               href="{{url('experiences')}}" role="tab">Work Experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('skills') ? 'active' : null}}"
                               href="{{url('skills')}}" role="tab">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('education') ? 'active' : null}}"
                               href="{{url('education')}}" role="tab">Education</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('courses') ? 'active' : null}}"
                               href="{{url('courses')}}" role="tab">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('certificates') ? 'active' : null}}"
                               href="{{url('certificates')}}" role="tab">Certificates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->is('color') ? 'active' : null}}"
                               href="{{url('color')}}" role="tab" >Color</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane{{request()->is('personal') ? 'active' : null}}"
                             id="{{url('personal')}}" role="tabpanel" >
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-4">
                                    <div class="col-12">
                                        @if (Session::has('error'))
                                            <div class="alert alert-danger">
                                                <p class="m-0">
                                                    {{Session::get('error')}}
                                                </p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                @include('user.shared.errors')
                                <div class="form-row input-group mt-4">
                                    <div class="custom-file">
                                        <input type="file" name="image" id="image"
                                               class="custom-file-input">
                                        <label class="custom-file-label" for="inputGroupFile04">Choose Image</label>
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary"
                                                type="button" id="inputGroupFileAddon04">Upload Image</button>
                                    </div>
                                </div>
                                <div class="form-row mt-3 ">
                                    <div class="col-4 "></div>
                                    <div class="col-3 ml-2">
                                        <img src="{{asset('/assets/images/images.png')}}"
                                             class="shadow rounded mt-2" height="220"
                                             width="230"/>
                                    </div>
                                </div>
                            </form>
                            <form action="" method="POST">
                                @csrf
                                <div class="form-row mt-3">
                                    <div class="form-group col-md-6">
                                        <label for="FirstName">First Name</label>
                                        <fieldset disabled>
                                            <input type="text" id="disabledTextInput" class="form-control"
                                                   name="firstName" placeholder="{{Auth::user()->first_name}}">
                                        </fieldset>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="LastName">Last Name</label>
                                        <fieldset disabled>
                                            <input type="text" id="disabledTextInput" class="form-control"
                                                   name="lastName" placeholder="{{Auth::user()->last_name}}">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row ">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Email</label>
                                        <fieldset disabled>
                                            <input type="email" id="disabledTextInput" class="form-control"
                                                   name="email" placeholder="{{Auth::user()->email}}">
                                        </fieldset>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phoneNumber">Phone Number</label>
                                        <input type="text" class="form-control" id="phoneNumber"
                                               name="phoneNumber" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="gender">Gender</label>
                                        <fieldset disabled>
                                            <input type="text" id="disabledTextInput" class="form-control"
                                                   name="gender" placeholder="{{Auth::user()->gender->name}}">
                                        </fieldset>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="birthDate">Birth Date</label>
                                        <input type="date" id="start" name="birthDate"
                                               class="form-control">

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 ">
                                        <label for="militaryService">Military Service</label>
                                        <select class="custom-select" name="militaryService">
                                            <option selected>Military Service</option>
                                            <option value="1">served</option>
                                            <option value="2">still</option>
                                            <option value="2">exempted</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="birthDate">Serve Date</label>
                                        <input type="date" id="start" name="serveTime"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-5"></div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-primary btn-block"
                                                style="height: 40px;"><b>Submet</b>
                                        </button>
                                    </div>
                                </div>
                                <div class="form-row mt-3"></div>
                            </form>
                        </div>
                        <div class="tab-pane  {{request()->is('social') ? 'active' : null}}"
                             id="{{url('social')}}" role="tabpanel" >
                            <form action="" method="POST" >
                                @csrf
                                <div class="row mt-4">
                                    <div class="col-12">
                                        @if (Session::has('error'))
                                            <div class="alert alert-danger">
                                                <p class="m-0">
                                                    {{Session::get('error')}}
                                                </p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                @include('user.shared.errors')
                                <div class="form-group row mt-3">
                                    <div class="col-md-6">
                                        <label for="faceBookUrl">FaceBook Url</label>
                                        <input type="text" class="form-control" id="faceBookUrl"
                                               name="faceBookUrl" placeholder="FaceBook Url">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="linkedInUrl">LinkedIn Url</label>
                                        <input type="text" class="form-control" id="linkedInUrl"
                                               name="linkedInUrl" placeholder="LinkedIn Url">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="askUrl">Ask Url</label>
                                        <input type="text" class="form-control" id="askUrl"
                                               name="askUrl" placeholder="Ask Url">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="twitterUrl">Twitter Url</label>
                                        <input type="text" class="form-control" id="twitterUrl"
                                               name="twitterUrl" placeholder="Twitter Url">
                                    </div>
                                </div>
                                <div class="form-row mt-4">
                                    <div class="col-5"></div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-primary btn-block"
                                                style="height: 40px;"><b>Submet</b>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane {{request()->is('experiences') ? 'active' : null}}"
                             id="{{url('experiences')}}" role="tabpanel" >
                            <form action="" method="POST" >
                                @csrf
{{--                                <div class="row mt-4">--}}
{{--                                    <div class="col-12">--}}
{{--                                        @if (Session::has('error'))--}}
{{--                                            <div class="alert alert-danger">--}}
{{--                                                <p class="m-0">--}}
{{--                                                    {{Session::get('error')}}--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                @include('user.shared.errors')--}}
                                <div class="form-row mt-3">
                                    <div class="col-6">
                                        <label for="jobTitle">Job Title</label>
                                        <input type="text" class="form-control" id="jobTitle"
                                               name="jobName" placeholder="Job Title">
                                    </div>
                                    <div class="col-6">
                                        <label for="company">Company</label>
                                        <input type="text" class="form-control" id="company"
                                               name="company" placeholder="Company">
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-6">
                                        <label for="inputState3">Start Date</label>
                                        <input type="date" id="inputState3"
                                               class="form-control" name="startDate">
                                    </div>
                                    <div class="col-6">
                                        <label for="inputState4">End Date</label>
                                        <input type="date" id="inputState4"
                                               class="form-control" name="endDate">
                                    </div>
                                </div>
                                <div class="form-row p-0 mt-3 collapse hide" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="col-6">
                                        <label for="jobTitle">Job Title</label>
                                        <input type="text" class="form-control" id="jobTitle"
                                               name="jobName" placeholder="Job Title">
                                    </div>
                                    <div class="col-6">
                                        <label for="company">Company</label>
                                        <input type="text" class="form-control" id="company"
                                               name="company" placeholder="Company">
                                    </div>
                                    <div class="col-6">
                                        <label for="inputState3">Start Date</label>
                                        <input type="date" id="inputState3"
                                               class="form-control" name="startDate">
                                    </div>
                                    <div class="col-6">
                                        <label for="inputState4">End Date</label>
                                        <input type="date" id="inputState4"
                                               class="form-control" name="endDate">
                                    </div>
                                </div>
                                <div class="form-row mt-3" id="accordion">
                                    <div class="col-12" id="headingOne">
                                        <div class=""
                                             data-toggle="collapse" data-target="#collapseOne"
                                             aria-expanded="true" aria-controls="collapseOne">
                                            <i class="fa fa-plus text-primary"><a><u>Add Work Experience</u></a></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-5"></div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-block btn-primary"
                                                style="height: 40px;"><b>Submet</b>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane container {{request()->is('skills') ? 'active' : null}}"
                             id="{{url('skills')}}" role="tabpanel" >
                            <form action="" method="POST">
                                @csrf
                                <div class="form-row mt-4">
                                    <div class="col-7">
                                        <fieldset disabled>
                                            <div class="form-group">
                                                <input type="text" id="disabledTextInput" class="form-control"
                                                       name=""  placeholder="Skill One" >
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-1">
                                        <button class="btn btn-sm bg-danger btn-dark border-danger rounded">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                    <div class="rateYo col-2 mx-auto" data-rateyo-rating="4.5">
{{--                                        <span>{{round($newskill->rating, 2)}} / 5.0</span>--}}
                                    </div>
                                </div>
                                <div class="form-row mt-2">
                                    <div class="col-9">
                                        <input type="text" class="form-control" id="Skill-data" placeholder="">
                                    </div>
                                    <div class="col-1">
                                        <button class="btn btn-sm btn-dark rounded">
                                            <i class="fa fa-plus"></i></button>
                                    </div>
                                    <div class="col-2">
                                        <div class="rateYo" data-rateyo-rating="0"></div>
                                        <input type="hidden" name="rating" id="rating" value="0"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-row mt-4">
                                    <div class="col-5">
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-block btn-primary"
                                                style="height: 40px;"><b>Submet</b>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane {{request()->is('education') ? 'active' : null}}"
                             id="{{url('education')}}" role="tabpanel">
                            <form action="" method="POST">
                                @csrf
                                <div class="row mt-4">
                                    <div class="col-12">
                                        @if (Session::has('error'))
                                            <div class="alert alert-danger">
                                                <p class="m-0">
                                                    {{Session::get('error')}}
                                                </p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                @include('user.shared.errors')
                                <div class="form-row mt-3">
                                    <div class="col-6">
                                        <label for="inputState6">Degree</label>
                                        <select class="custom-select">
                                            <option selected>Degree</option>
                                            <option value="1">High School Deploma</option>
                                            <option value="2">High School Deploma</option>
                                            <option value="3">High School Deploma</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="school">School</label>
                                        <input type="text" class="form-control" id="school"
                                               name="school" placeholder="School One">
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-6">
                                        <label for="inputState5">Start Date</label>
                                        <input type="date" id="inputState5"
                                               class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label for="inputState6">End Date</label>
                                        <input type="date" id="inputState6"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <label for="inputState5">Upload Certificate</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                                               aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>

                                <div class="form-row p-0 mt-3 collapse hide" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="col-6 ">
                                        <label for="inputState6">Degree</label>
                                        <select class="custom-select">
                                            <option selected>Degree</option>
                                            <option value="1">High School Deploma</option>
                                            <option value="2">High School Deploma</option>
                                            <option value="3">High School Deploma</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="school">School</label>
                                        <input type="text" class="form-control" id="school"
                                               name="school" placeholder="School One">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <label for="inputState5">Start Date</label>
                                        <input type="date" id="inputState5"
                                               class="form-control">
                                    </div>
                                    <div class="col-6 mt-3">
                                        <label for="inputState6">End Date</label>
                                        <input type="date" id="inputState6"
                                               class="form-control">
                                    </div>
                                    <div class="col-12 mt-3">
                                        <label for="inputState5">Upload Certificate</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                   aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-row mt-3" id="accordion">
                                    <div class="col-12" id="headingOne">
                                        <div class="" data-toggle="collapse" data-target="#collapseOne"
                                             aria-expanded="true" aria-controls="collapseOne">
                                            <i class="fa fa-plus text-primary"><a><u>Add Education</u></a></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mt-4">
                                    <div class="col-5">
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-dark btn-block bg-dark"
                                                style="height: 40px;"><b>Submet</b>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane  {{request()->is('courses') ? 'active' : null}}"
                             id="{{url('courses')}}" role="tabpanel" >
                            <form action="" method="POST">
                                @csrf
                                <div class="row mt-4">
                                    <div class="col-12">
                                        @if (Session::has('error'))
                                            <div class="alert alert-danger">
                                                <p class="m-0">
                                                    {{Session::get('error')}}
                                                </p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                @include('user.shared.errors')
                                <div class="form-row mt-3">
                                    <div class="col-7">
                                        <fieldset disabled>
                                            <div class="form-group">
                                                <input type="text" id="course" class="form-control" placeholder="Course One" style="height: 40px;">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-1">
                                        <button class="btn btn-sm bg-danger btn-dark border-danger rounded">
                                            <i class="fa fa-times" id="delet"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-9">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm"></span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Sizing example input"
                                                   placeholder="Add Course" id="addedCourse"
                                                   aria-describedby="inputGroup-sizing-sm"
                                                   style="height: 40px;">
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <button class="btn btn-sm btn-dark rounded">
                                            <i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="col-5">
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-dark btn-block bg-dark"
                                                style=" height: 40px;"><b>Submet</b>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane  {{request()->is('certificates') ? 'active' : null}}"
                             id="{{url('certificates')}}" role="tabpanel" >
                            <form action="" method="POST">
                                @csrf
                                <div class="row mt-4">
                                    <div class="col-12">
                                        @if (Session::has('error'))
                                            <div class="alert alert-danger">
                                                <p class="m-0">
                                                    {{Session::get('error')}}
                                                </p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                @include('user.shared.errors')
                                <div class="form-row mt-3">
                                    <div class="col-7">
                                        <fieldset disabled>
                                            <div class="form-group">
                                                <input type="text" id="disabledTextInput" class="form-control"
                                                       placeholder="Certificate One" style="height: 40px;">
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
                                    <div class="col-9">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm"></span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Sizing example input"
                                                   placeholder="Add Certificate"
                                                   aria-describedby="inputGroup-sizing-sm" style="height: 40px;">
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <button class="btn btn-sm btn-dark rounded">
                                            <i class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                                               aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01"
                                               style="height: 40px;">Choose file</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane  {{request()->is('color') ? 'active' : null}}"
                             id="{{url('color')}}" role="tabpanel" >
                            <form action="" method="POST" class="mt-3">
                                @csrf
                                <div class="form-row">
                                    <div class="col-1 mr-5"></div>
                                    <button class="btn btn-sm rounded-pill mr-5"
                                            style="background: #3AC587;height: 20px;width: 40px;"></button>
                                    <button class="btn btn-sm rounded-pill mr-5"
                                            style="background: #002B5B;height: 20px;width: 40px;"></button>
                                    <button class="btn btn-sm rounded-pill mr-5"
                                            style="background: #6DA8BA;height: 20px;width: 40px;"></button>
                                    <button class="btn btn-sm rounded-pill mr-5"
                                            style="background: #00848C;height: 20px;width: 40px;"></button>
                                    <button class="btn btn-sm rounded-pill mr-5"
                                            style="background: #F85C50;height: 20px;width: 40px;"></button>
                                    <button class="btn btn-sm rounded-pill mr-5"
                                            style="background: #4876D6;height: 20px;width: 40px;"></button>
                                    <button class="btn btn-sm rounded-pill mr-5"
                                            style="background: #808285;height: 20px;width: 40px;"></button>
                                    <button class="btn btn-sm rounded-pill "
                                            style="background: #333333;height: 20px;width: 40px;"></button>
                                </div>
                                <div class="form-row mt-4">
                                    <div class="col-5">
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-dark btn-block bg-dark"
                                                style=" height: 40px;"><b>Submet</b>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('more-js')
    <script>
        $(document).ready(function (e) {
            $(".rateYo").rateYo({
                readonly:false
            });

            $
        });
    function myFunction() {
    var input = document.getElementById('course')[0].value;
    var div = document.createElement('div');
    document.body.appendChild(div);

    var output = ' <fieldset disabled>\n' +
                 ' <div class="form-group">\n' +
                 '<input type="text" id="course" class="form-control" placeholder="Course One" \n' +
                 'style="height: 40px;"> \n '+
                 '</div> </fieldset>' ;
    div.innerHTML = output;
    //create your delete button after you click try it
    var del = document.createElement('button');
    del.style.textDecoration = 'none';
    // del.innerHTML = 'Remove this person?';
    // del.style.color = 'white';
    // del.style.backgroundColor = 'blue';
    //assign a function for it when clicked
    del.onclick = function() { deleteButton(div,this)};
    document.body.appendChild(del);
    <!--  deleteButton(div);  -->
    }
    function deleteButton(x,y) {
    var parent = document.getElementsByTagName("BODY")[0];
    //remove the div
    parent.removeChild(x);
    //remore the button
    parent.removeChild(y);
    }
    </script>
@endsection


