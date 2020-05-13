{{--@extends('user.shared.template')--}}
{{--@section('more_css')--}}
{{--        <link href=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js">--}}
{{--        <meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>--}}
{{--    <script src="https://code.jquery.com/jquery-1.12.4.min.js"--}}
{{--            integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"--}}
{{--            crossorigin="anonymous"></script>--}}
{{--    <script src="repeater.js" type="text/javascript"></script>--}}
{{--    <link rel="stylesheet" href="{{asset('/assets/css/ColorForm.css')}}">--}}
{{--@endsection--}}
{{--@section('content')--}}
{{--    <div class="container container-fluid"--}}
{{--         style=" font-family: 'Permanent Marker', cursive; font-family: 'Alegreya', serif;">--}}
{{--        <div class="row mt-4"></div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-12 text-center"--}}
{{--                 style=" font-family: 'Permanent Marker', cursive; font-family: 'Alegreya', serif;">--}}
{{--                <h1><u>Resume Builder</u></h1>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row mt-4"></div>--}}
{{--        <div class="row">--}}
{{--            <div class="card col-md-10 p-3 rounded bg-light shadow offset-1 offset-md-1 mb-5">--}}
{{--                <div class="card-body">--}}
{{--                    <ul class="nav nav-tabs" id="myTab" role="tablist">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link {{request()->is('personal') ? 'active' : null}}"--}}
{{--                               href="{{url('personal')}}" role="tab">Personal Details</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link {{request()->is('social') ? 'active' : null}}"--}}
{{--                               href="{{url('social')}}" role="tab">Social Links</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link {{request()->is('experiences') ? 'active' : null}}"--}}
{{--                               href="{{url('experiences')}}" role="tab">Work Experience</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link {{request()->is('skills') ? 'active' : null}}"--}}
{{--                               href="{{url('skills')}}" role="tab">Skills</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link {{request()->is('education') ? 'active' : null}}"--}}
{{--                               href="{{url('education')}}" role="tab">Education</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link {{request()->is('courses') ? 'active' : null}}"--}}
{{--                               href="{{url('courses')}}" role="tab">Courses</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link {{request()->is('certificates') ? 'active' : null}}"--}}
{{--                               href="{{url('certificates')}}" role="tab">Certificates</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link {{request()->is('color') ? 'active' : null}}"--}}
{{--                               href="{{url('color')}}" role="tab">Color</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <div class="tab-content" id="myTabContent">--}}
{{--                        <div class="tab-pane{{request()->is('personal') ? 'active' : null}}"--}}
{{--                             id="{{url('personal')}}" role="tabpanel">--}}
{{--                            <form action="" method="POST" enctype="multipart/form-data">--}}
{{--                                @csrf--}}
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
{{--                                <div class="form-row input-group mt-4">--}}
{{--                                    <div class="custom-file">--}}
{{--                                        <input type="file" name="image" id="image"--}}
{{--                                               class="custom-file-input">--}}
{{--                                        <label class="custom-file-label" for="inputGroupFile04">Choose Image</label>--}}
{{--                                    </div>--}}
{{--                                    <div class="input-group-append">--}}
{{--                                        <button class="btn btn-outline-secondary"--}}
{{--                                                type="button" id="inputGroupFileAddon04">Upload Image--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-row mt-3 ">--}}
{{--                                    <div class="col-4 "></div>--}}
{{--                                    <div class="col-3 ml-2">--}}
{{--                                        <img src="{{asset('/assets/images/images.png')}}"--}}
{{--                                             class="shadow rounded mt-2" height="220"--}}
{{--                                             width="230"/>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                            <form action="" method="POST">--}}
{{--                                @csrf--}}
{{--                                <div class="form-row mt-3">--}}
{{--                                    <div class="form-group col-md-6">--}}
{{--                                        <label for="FirstName">First Name</label>--}}
{{--                                        <fieldset disabled>--}}
{{--                                            <input type="text" id="disabledTextInput" class="form-control"--}}
{{--                                                   name="firstName" placeholder="{{Auth::user()->first_name}}">--}}
{{--                                        </fieldset>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group col-md-6">--}}
{{--                                        <label for="LastName">Last Name</label>--}}
{{--                                        <fieldset disabled>--}}
{{--                                            <input type="text" id="disabledTextInput" class="form-control"--}}
{{--                                                   name="lastName" placeholder="{{Auth::user()->last_name}}">--}}
{{--                                        </fieldset>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-row ">--}}
{{--                                    <div class="form-group col-md-6">--}}
{{--                                        <label for="inputEmail4">Email</label>--}}
{{--                                        <fieldset disabled>--}}
{{--                                            <input type="email" id="disabledTextInput" class="form-control"--}}
{{--                                                   name="email" placeholder="{{Auth::user()->email}}">--}}
{{--                                        </fieldset>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group col-md-6">--}}
{{--                                        <label for="phoneNumber">Phone Number</label>--}}
{{--                                        <input type="text" class="form-control" id="phoneNumber"--}}
{{--                                               name="phoneNumber" placeholder="Phone Number">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-row">--}}
{{--                                    <div class="form-group col-md-6">--}}
{{--                                        <label for="gender">Gender</label>--}}
{{--                                        <fieldset disabled>--}}
{{--                                            <input type="text" id="disabledTextInput" class="form-control"--}}
{{--                                                   name="gender" placeholder="{{Auth::user()->gender->name}}">--}}
{{--                                        </fieldset>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group col-md-6">--}}
{{--                                        <label for="birthDate">Birth Date</label>--}}
{{--                                        <input type="date" id="start" name="birthDate"--}}
{{--                                               class="form-control">--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-row">--}}
{{--                                    <div class="col-md-6 ">--}}
{{--                                        <label for="militaryService">Military Service</label>--}}
{{--                                        <select class="custom-select" name="militaryService">--}}
{{--                                            <option selected>Military Service</option>--}}
{{--                                            <option value="1">served</option>--}}
{{--                                            <option value="2">still</option>--}}
{{--                                            <option value="2">exempted</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group col-md-6">--}}
{{--                                        <label for="birthDate">Serve Date</label>--}}
{{--                                        <input type="date" id="start" name="serveTime"--}}
{{--                                               class="form-control">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="items">--}}

{{--                                    <div class="form-group"><label>Author Email:</label>--}}
{{--                                        <input id="author_email" class="form-control" name="author" required="required"--}}
{{--                                               type="EMAIL"/></div>--}}

{{--                                </div>--}}

{{--                                <button type="button" class="add_field_button">Add Field</button>--}}

{{--                                <div class="form-row mt-3">--}}
{{--                                    <div class="col-5"></div>--}}
{{--                                    <div class="col-2">--}}
{{--                                        <button type="submit" class="btn btn-primary btn-block"--}}
{{--                                                style="height: 40px;"><b>Submet</b>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-row mt-3"></div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane  {{request()->is('social') ? 'active' : null}}"--}}
{{--                             id="{{url('social')}}" role="tabpanel">--}}
{{--                            <form action="" method="POST">--}}
{{--                                @csrf--}}
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
{{--                                <div class="form-group row mt-3">--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <label for="faceBookUrl">FaceBook Url</label>--}}
{{--                                        <input type="text" class="form-control" id="faceBookUrl"--}}
{{--                                               name="faceBookUrl" placeholder="FaceBook Url">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <label for="linkedInUrl">LinkedIn Url</label>--}}
{{--                                        <input type="text" class="form-control" id="linkedInUrl"--}}
{{--                                               name="linkedInUrl" placeholder="LinkedIn Url">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <label for="askUrl">Ask Url</label>--}}
{{--                                        <input type="text" class="form-control" id="askUrl"--}}
{{--                                               name="askUrl" placeholder="Ask Url">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <label for="twitterUrl">Twitter Url</label>--}}
{{--                                        <input type="text" class="form-control" id="twitterUrl"--}}
{{--                                               name="twitterUrl" placeholder="Twitter Url">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-row mt-4">--}}
{{--                                    <div class="col-5"></div>--}}
{{--                                    <div class="col-2">--}}
{{--                                        <button type="submit" class="btn btn-primary btn-block"--}}
{{--                                                style="height: 40px;"><b>Submet</b>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane {{request()->is('experiences') ? 'active' : null}}"--}}
{{--                             id="{{url('experiences')}}" role="tabpanel">--}}
{{--                            <form action="" method="POST">--}}
{{--                                @csrf--}}
{{--                                <div class="form-row mt-3">--}}
{{--                                    <div class="col-8 offset-2 offset-md-2">--}}
{{--                                        <h3>You can add More Than One Work Experience</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                --}}{{--                                <div class="row mt-4">--}}
{{--                                --}}{{--                                    <div class="col-12">--}}
{{--                                --}}{{--                                        @if (Session::has('error'))--}}
{{--                                --}}{{--                                            <div class="alert alert-danger">--}}
{{--                                --}}{{--                                                <p class="m-0">--}}
{{--                                --}}{{--                                                    {{Session::get('error')}}--}}
{{--                                --}}{{--                                                </p>--}}
{{--                                --}}{{--                                            </div>--}}
{{--                                --}}{{--                                        @endif--}}
{{--                                --}}{{--                                    </div>--}}
{{--                                --}}{{--                                </div>--}}
{{--                                --}}{{--                                @include('user.shared.errors')--}}
{{--                                <div class="form-row mt-3">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label for="jobTitle">Job Title</label>--}}
{{--                                        <input type="text" class="form-control" id="jobTitle"--}}
{{--                                               name="jobName" placeholder="Job Title">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label for="company">Company</label>--}}
{{--                                        <input type="text" class="form-control" id="company"--}}
{{--                                               name="company" placeholder="Company">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-row mt-3">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label for="inputState3">Start Date</label>--}}
{{--                                        <input type="date" id="inputState3"--}}
{{--                                               class="form-control" name="startDate">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label for="inputState4">End Date</label>--}}
{{--                                        <input type="date" id="inputState4"--}}
{{--                                               class="form-control" name="endDate">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-row mt-3">--}}
{{--                                    <div class="col-5"></div>--}}
{{--                                    <div class="col-2">--}}
{{--                                        <button type="submit" class="btn btn-block btn-primary"--}}
{{--                                                style="height: 40px;"><b>Submet</b>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane container {{request()->is('skills') ? 'active' : null}}"--}}
{{--                             id="{{url('skills')}}" role="tabpanel">--}}
{{--                            <form name="add_name" id="add_name" class="mt-3">--}}
{{--                                <div class="alert alert-danger print-error-msg" style="display:none">--}}
{{--                                    <ul></ul>--}}
{{--                                </div>--}}
{{--                                <div class="alert alert-success print-success-msg" style="display:none">--}}
{{--                                    <ul></ul>--}}
{{--                                </div>--}}
{{--                                <div class="table-responsive">--}}
{{--                                    <table class="table" id="dynamic_field">--}}
{{--                                        <tr>--}}
{{--                                            <td><input type="text" name="name[]"--}}
{{--                                                       placeholder="Enter Skill"--}}
{{--                                                       class="form-control name_list"/></td>--}}
{{--                                            <td>--}}
{{--                                                <button type="button" name="add" id="add"--}}
{{--                                                        class="btn btn-success">Add More--}}
{{--                                                </button>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    </table>--}}
{{--                                    <div class="col-5"></div>--}}
{{--                                    <div class="col-2 ">--}}
{{--                                        <input type="button" name="submit" id="submit"--}}
{{--                                               class="btn btn-primary" value="Submit"/>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                            <div class="table-responsive">--}}
{{--                                <form method="post" id="dynamic_form">--}}
{{--                                    <span id="result"></span>--}}
{{--                                    <table class="table table-striped" id="user_table">--}}
{{--                                        <thead>--}}
{{--                                        <tr>--}}
{{--                                            <th width="50%">Add skill</th>--}}
{{--                                            <th width="20%">Action</th>--}}
{{--                                        </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tbody>--}}

{{--                                        </tbody>--}}
{{--                                        <tfoot>--}}
{{--                                        <tr>--}}
{{--                                            <td colspan="2" align="right">&nbsp;</td>--}}
{{--                                            <td>--}}
{{--                                                @csrf--}}
{{--                                                <input type="submit" name="save" id="save"--}}
{{--                                                       class="btn btn-primary" value="save"/>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        </tfoot>--}}
{{--                                    </table>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                            --}}{{--                                <div class="form-row mt-4">--}}
{{--                            --}}{{--                                    <div class="col-7">--}}
{{--                            --}}{{--                                        <fieldset disabled>--}}
{{--                            --}}{{--                                            <div class="form-group">--}}
{{--                            --}}{{--                                                <input type="text" id="disabledTextInput" class="form-control"--}}
{{--                            --}}{{--                                                       name=""  placeholder="Skill One" >--}}
{{--                            --}}{{--                                            </div>--}}
{{--                            --}}{{--                                        </fieldset>--}}
{{--                            --}}{{--                                    </div>--}}
{{--                            --}}{{--                                    <div class="col-1">--}}
{{--                            --}}{{--                                        <button class="btn btn-danger">--}}
{{--                            --}}{{--                                            <i class="fa fa-times"></i>--}}
{{--                            --}}{{--                                        </button>--}}
{{--                            --}}{{--                                    </div>--}}
{{--                            --}}{{--                                    <div class="rateYo col-2 mx-auto" data-rateyo-rating="4.5">--}}
{{--                            --}}{{--                                        <span>{{round($newskill->rating, 2)}} / 5.0</span>--}}
{{--                            --}}{{--                                    </div>--}}
{{--                            --}}{{--                                </div>--}}

{{--                            --}}{{--                                    <div class="col-2">--}}
{{--                            --}}{{--                                        <div class="rateYo" data-rateyo-rating="0"></div>--}}
{{--                            --}}{{--                                        <input type="hidden" name="rating" id="rating" value="0"--}}
{{--                            --}}{{--                                               class="form-control">--}}
{{--                            --}}{{--                                    </div>--}}
{{--                            --}}{{--                                </div>--}}

{{--                        <div class="tab-pane {{request()->is('education') ? 'active' : null}}"--}}
{{--                             id="{{url('education')}}" role="tabpanel">--}}
{{--                            <form action="" method="POST">--}}
{{--                                @csrf--}}
{{--                                <div class="form-row mt-3">--}}
{{--                                    <div class="col-8 offset-2 offset-md-2">--}}
{{--                                        <h3>You can add More Than One Education History</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="row mt-3">--}}
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
{{--                                <div class="form-row mt-3">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label for="inputState6">Degree</label>--}}
{{--                                        <select class="custom-select" name="degree">--}}
{{--                                            <option selected>Degree</option>--}}
{{--                                            <option value="1">High School Deploma</option>--}}
{{--                                            <option value="2">High School Deploma</option>--}}
{{--                                            <option value="3">High School Deploma</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label for="school">School</label>--}}
{{--                                        <input type="text" class="form-control" id="school"--}}
{{--                                               name="school" placeholder="School One">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-row mt-3">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label for="inputState5">Start Date</label>--}}
{{--                                        <input type="date" id="inputState5"--}}
{{--                                               class="form-control" name="startDate">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6">--}}
{{--                                        <label for="inputState6">End Date</label>--}}
{{--                                        <input type="date" id="inputState6"--}}
{{--                                               class="form-control" name="endDate">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                --}}{{--                                <div class="form-row mt-3">--}}
{{--                                --}}{{--                                    <label for="inputState5">Upload Certificate</label>--}}
{{--                                --}}{{--                                    <div class="custom-file">--}}
{{--                                --}}{{--                                        <input type="file" class="custom-file-input" id="inputGroupFile01"--}}
{{--                                --}}{{--                                               aria-describedby="inputGroupFileAddon01">--}}
{{--                                --}}{{--                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>--}}
{{--                                --}}{{--                                    </div>--}}
{{--                                --}}{{--                                </div>--}}

{{--                                --}}{{--                                <div class="form-row p-0 mt-3 collapse hide" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">--}}
{{--                                --}}{{--                                    <div class="col-6 ">--}}
{{--                                --}}{{--                                        <label for="inputState6">Degree</label>--}}
{{--                                --}}{{--                                        <select class="custom-select">--}}
{{--                                --}}{{--                                            <option selected>Degree</option>--}}
{{--                                --}}{{--                                            <option value="1">High School Deploma</option>--}}
{{--                                --}}{{--                                            <option value="2">High School Deploma</option>--}}
{{--                                --}}{{--                                            <option value="3">High School Deploma</option>--}}
{{--                                --}}{{--                                        </select>--}}
{{--                                --}}{{--                                    </div>--}}
{{--                                --}}{{--                                    <div class="col-6">--}}
{{--                                --}}{{--                                        <label for="school">School</label>--}}
{{--                                --}}{{--                                        <input type="text" class="form-control" id="school"--}}
{{--                                --}}{{--                                               name="school" placeholder="School One">--}}
{{--                                --}}{{--                                    </div>--}}
{{--                                --}}{{--                                    <div class="col-6 mt-3">--}}
{{--                                --}}{{--                                        <label for="inputState5">Start Date</label>--}}
{{--                                --}}{{--                                        <input type="date" id="inputState5"--}}
{{--                                --}}{{--                                               class="form-control">--}}
{{--                                --}}{{--                                    </div>--}}
{{--                                --}}{{--                                    <div class="col-6 mt-3">--}}
{{--                                --}}{{--                                        <label for="inputState6">End Date</label>--}}
{{--                                --}}{{--                                        <input type="date" id="inputState6"--}}
{{--                                --}}{{--                                               class="form-control">--}}
{{--                                --}}{{--                                    </div>--}}
{{--                                --}}{{--                                    <div class="col-12 mt-3">--}}
{{--                                --}}{{--                                        <label for="inputState5">Upload Certificate</label>--}}
{{--                                --}}{{--                                        <div class="custom-file">--}}
{{--                                --}}{{--                                            <input type="file" class="custom-file-input" id="inputGroupFile01"--}}
{{--                                --}}{{--                                                   aria-describedby="inputGroupFileAddon01">--}}
{{--                                --}}{{--                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>--}}
{{--                                --}}{{--                                        </div>--}}
{{--                                --}}{{--                                    </div>--}}

{{--                                --}}{{--                                </div>--}}
{{--                                --}}{{--                                <div class="form-row mt-3" id="accordion">--}}
{{--                                --}}{{--                                    <div class="col-12" id="headingOne">--}}
{{--                                --}}{{--                                        <div class="" data-toggle="collapse" data-target="#collapseOne"--}}
{{--                                --}}{{--                                             aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                --}}{{--                                            <i class="fa fa-plus text-primary"><a><u>Add Education</u></a></i>--}}
{{--                                --}}{{--                                        </div>--}}
{{--                                --}}{{--                                    </div>--}}
{{--                                --}}{{--                                </div>--}}
{{--                                <div class="form-row mt-4">--}}
{{--                                    <div class="col-5">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-2">--}}
{{--                                        <button type="submit" class="btn btn-primary btn-block"--}}
{{--                                                style="height: 40px;"><b>Submet</b>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane  {{request()->is('courses') ? 'active' : null}}"--}}
{{--                             id="{{url('courses')}}" role="tabpanel">--}}
{{--                            <form action="" method="POST">--}}
{{--                                @csrf--}}
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
{{--                                <div class="form-row mt-3">--}}
{{--                                    <div class="col-7">--}}
{{--                                        <fieldset disabled>--}}
{{--                                            <div class="form-group">--}}
{{--                                                <input type="text" id="course" class="form-control"--}}
{{--                                                       placeholder="Course One" style="height: 40px;">--}}
{{--                                            </div>--}}
{{--                                        </fieldset>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-1">--}}
{{--                                        <button class="btn btn-sm bg-danger btn-dark border-danger rounded">--}}
{{--                                            <i class="fa fa-times" id="delet"></i>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-row">--}}
{{--                                    <div class="col-9">--}}
{{--                                        <div class="input-group input-group-sm mb-3">--}}
{{--                                            <div class="input-group-prepend">--}}
{{--                                                <span class="input-group-text" id="inputGroup-sizing-sm"></span>--}}
{{--                                            </div>--}}
{{--                                            <input type="text" class="form-control" aria-label="Sizing example input"--}}
{{--                                                   placeholder="Add Course" id="addedCourse"--}}
{{--                                                   aria-describedby="inputGroup-sizing-sm"--}}
{{--                                                   style="height: 40px;">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-1">--}}
{{--                                        <button class="btn btn-sm btn-dark rounded">--}}
{{--                                            <i class="fa fa-plus"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-row mt-3">--}}
{{--                                    <div class="col-5">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-2">--}}
{{--                                        <button type="submit" class="btn btn-primary btn-block"--}}
{{--                                                style=" height: 40px;"><b>Submet</b>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane  {{request()->is('certificates') ? 'active' : null}}"--}}
{{--                             id="{{url('certificates')}}" role="tabpanel">--}}
{{--                            <form action="" method="POST">--}}
{{--                                @csrf--}}
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
{{--                                <div class="form-row mt-3">--}}
{{--                                    <div class="col-7">--}}
{{--                                        <fieldset disabled>--}}
{{--                                            <div class="form-group">--}}
{{--                                                <input type="text" id="disabledTextInput" class="form-control"--}}
{{--                                                       placeholder="Certificate One" style="height: 40px;">--}}
{{--                                            </div>--}}
{{--                                        </fieldset>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-1">--}}
{{--                                        <button class="btn btn-sm bg-danger btn-dark border-danger rounded">--}}
{{--                                            <i class="fa fa-times"></i>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-row">--}}
{{--                                    <div class="col-9">--}}
{{--                                        <div class="input-group input-group-sm mb-3">--}}
{{--                                            <div class="input-group-prepend">--}}
{{--                                                <span class="input-group-text" id="inputGroup-sizing-sm"></span>--}}
{{--                                            </div>--}}
{{--                                            <input type="text" class="form-control" aria-label="Sizing example input"--}}
{{--                                                   placeholder="Add Certificate"--}}
{{--                                                   aria-describedby="inputGroup-sizing-sm" style="height: 40px;">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-1">--}}
{{--                                        <button class="btn btn-sm btn-dark rounded">--}}
{{--                                            <i class="fa fa-plus"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                --}}{{--                                <div class="form-row">--}}
{{--                                --}}{{--                                    <div class="custom-file">--}}
{{--                                --}}{{--                                        <input type="file" class="custom-file-input" id="inputGroupFile01"--}}
{{--                                --}}{{--                                               aria-describedby="inputGroupFileAddon01">--}}
{{--                                --}}{{--                                        <label class="custom-file-label" for="inputGroupFile01"--}}
{{--                                --}}{{--                                               style="height: 40px;">Choose file</label>--}}
{{--                                --}}{{--                                    </div>--}}
{{--                                --}}{{--                                </div>--}}
{{--                                <div class="form-row mt-3">--}}
{{--                                    <div class="col-5">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-2">--}}
{{--                                        <button type="submit" class="btn btn-primary btn-block"--}}
{{--                                                style=" height: 40px;"><b>Submet</b>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane  {{request()->is('color') ? 'active' : null}}"--}}
{{--                             id="{{url('color')}}" role="tabpanel">--}}
{{--                            <form action="" method="POST" class="mt-3">--}}
{{--                                @csrf--}}
{{--                                <div class="form-row mt-3">--}}

{{--                                    <div class="col-6 offset-3">--}}
{{--                                        <select class="custom-select color shadow-sm" name="color">--}}
{{--                                            <option selected style="color:gray">Choose Color</option>--}}
{{--                                            <option value="#3AC587" style="background: #3AC587;"></option>--}}
{{--                                            <option value="#002B5B" style="background: #002B5B;"></option>--}}
{{--                                            <option value="#6DA8BA" style="background: #6DA8BA"></option>--}}
{{--                                            <option value="#00848C" style="background: #F85C50;"></option>--}}
{{--                                            <option value="#4876D6" style="background: #4876D6;"></option>--}}
{{--                                            <option value="#808285" style="background: #808285;"></option>--}}
{{--                                            <option value="#333333" style="background: #333333;"></option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-row mt-3">--}}
{{--                                    <div class="col-5">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-2">--}}
{{--                                        <button type="submit" class="btn btn-primary btn-block"--}}
{{--                                                style=" height: 40px;"><b>Submet</b>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
{{--@section('more-js')--}}
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            var count = 1;--}}
{{--            dynamic_field(count);--}}
{{--            function dynamic_field(number) {--}}
{{--                html = '<tr>';--}}
{{--                html += '<td><input type="text" name="name[]" class="form-control" /></td>';--}}
{{--                if (number > 1) {--}}
{{--                    html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';--}}
{{--                    $('tbody').append(html);--}}
{{--                } else {--}}
{{--                    html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';--}}
{{--                    $('tbody').html(html);--}}
{{--                }--}}
{{--            }--}}
{{--            $(document).on('click', '#add', function () {--}}
{{--            count++;--}}
{{--            dynamic_field(count);--}}
{{--            });--}}
{{--            $(document).on('click', '.remove', function () {--}}
{{--            count--;--}}
{{--            $(this).closest("tr").remove();--}}
{{--            });--}}
{{--            $('#dynamic_form').on('submit', function (event) {--}}
{{--            event.preventDefault();--}}
{{--            $.ajax({--}}
{{--            url: '{{ route("skills.insert") }}',--}}
{{--            method: 'post',--}}
{{--            data: $(this).serialize(),--}}
{{--            dataType: 'json',--}}
{{--            beforeSend: function () {--}}
{{--            $('#save').attr('disabled', 'disabled');--}}
{{--            },--}}
{{--            success: function (data) {--}}
{{--            if (data.error) {--}}
{{--            var error_html = '';--}}
{{--            for (var count = 0; count < data.error.length; count++) {--}}
{{--            error_html += '<p>' + data.error[count] + '</p>';--}}
{{--            }--}}
{{--            $('#result').html('<div class="alert alert-danger">' + error_html + '</div>');--}}
{{--            } else {--}}
{{--            dynamic_field(1);--}}
{{--            $('#result').html('<div class="alert alert-success">' + data.success + '</div>');--}}
{{--            }--}}
{{--            $('#save').attr('disabled', false);--}}
{{--            }--}}
{{--            })--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}
{{--        <script type="text/javascript">--}}
{{--            $(document).ready(function () {--}}
{{--                var postURL = "<?php echo url('skills'); ?>";--}}
{{--                var i = 1;--}}
{{--                $('#add').click(function () {--}}
{{--                    i++;--}}
{{--                    $('#dynamic_field').append--}}
{{--                    ('<tr id="row' + i + '" class="dynamic-added"><td>' +--}}
{{--                        '<input type="text" name="name[]" placeholder="Enter Skill" ' +--}}
{{--                        'class="form-control name_list" /></td><td><button type="button" ' +--}}
{{--                        'name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');--}}
{{--                });--}}
{{--                $(document).on('click', '.btn_remove', function () {--}}
{{--                    var button_id = $(this).attr("id");--}}
{{--                    $('#row' + button_id + '').remove();--}}
{{--                });--}}
{{--                $.ajaxSetup({--}}
{{--                    headers: {--}}
{{--                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--                    }--}}
{{--                });--}}
{{--                $('#submit').click(function () {--}}
{{--                    $.ajax({--}}
{{--                        url: postURL,--}}
{{--                        method: "POST",--}}
{{--                        data: $('#add_name').serialize(),--}}
{{--                        type: 'json',--}}
{{--                        success: function (data) {--}}
{{--                            if (data.error) {--}}
{{--                                printErrorMsg(data.error);--}}
{{--                            } else {--}}
{{--                                i = 1;--}}
{{--                                $('.dynamic-added').remove();--}}
{{--                                $('#add_name')[0].reset();--}}
{{--                                $(".print-success-msg").find("ul").html('');--}}
{{--                                $(".print-success-msg").css('display', 'block');--}}
{{--                                $(".print-error-msg").css('display', 'none');--}}
{{--                                $(".print-success-msg").find("ul").append--}}
{{--                                ('<li>Skills Inserted Successfully.</li>');--}}
{{--                            }--}}
{{--                        }--}}
{{--                    });--}}
{{--                });--}}
{{--                function printErrorMsg(msg) {--}}
{{--                    $(".print-error-msg").find("ul").html('');--}}
{{--                    $(".print-error-msg").css('display', 'block');--}}
{{--                    $(".print-success-msg").css('display', 'none');--}}
{{--                    $.each(msg, function (key, value) {--}}
{{--                        $(".print-error-msg").find("ul").append('<li>' + value + '</li>');--}}
{{--                    });--}}
{{--                }--}}
{{--            });--}}
{{--            // $(document).ready(function (e) {--}}
{{--            //      $(".rateYo").rateYo({--}}
{{--            //          readonly: false--}}
{{--            //      });--}}
{{--            //--}}
{{--            //      $--}}
{{--            //  });--}}
{{--        </script>--}}
{{--    --}}{{--    <script type="text/javascript">--}}
{{--    --}}{{--        $(document).ready(function () {--}}
{{--    --}}{{--            var postURL = "<?php echo url('skills'); ?>";--}}
{{--    --}}{{--            var i = 1;--}}
{{--    --}}{{--            $('#add').click(function () {--}}
{{--    --}}{{--                i++;--}}
{{--    --}}{{--                $('#dynamic_field').append--}}
{{--    --}}{{--                ('<tr id="row' + i + '" class="dynamic-added"><td>' +--}}
{{--    --}}{{--                    '<input type="text" name="name[]" placeholder="Enter Skill" ' +--}}
{{--    --}}{{--                    'class="form-control name_list" /></td><td><button type="button" ' +--}}
{{--    --}}{{--                    'name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');--}}
{{--    --}}{{--            });--}}
{{--    --}}{{--            $(document).on('click', '.btn_remove', function () {--}}
{{--    --}}{{--                var button_id = $(this).attr("id");--}}
{{--    --}}{{--                $('#row' + button_id + '').remove();--}}
{{--    --}}{{--            });--}}
{{--    --}}{{--            $.ajaxSetup({--}}
{{--    --}}{{--                headers: {--}}
{{--    --}}{{--                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--    --}}{{--                }--}}
{{--    --}}{{--            });--}}
{{--    --}}{{--            $('#submit').click(function () {--}}
{{--    --}}{{--                $.ajax({--}}
{{--    --}}{{--                    url: postURL,--}}
{{--    --}}{{--                    method: "POST",--}}
{{--    --}}{{--                    data: $('#add_name').serialize(),--}}
{{--    --}}{{--                    type: 'json',--}}
{{--    --}}{{--                    success: function (data) {--}}
{{--    --}}{{--                        if (data.error) {--}}
{{--    --}}{{--                            printErrorMsg(data.error);--}}
{{--    --}}{{--                        } else {--}}
{{--    --}}{{--                            i = 1;--}}
{{--    --}}{{--                            $('.dynamic-added').remove();--}}
{{--    --}}{{--                            $('#add_name')[0].reset();--}}
{{--    --}}{{--                            $(".print-success-msg").find("ul").html('');--}}
{{--    --}}{{--                            $(".print-success-msg").css('display', 'block');--}}
{{--    --}}{{--                            $(".print-error-msg").css('display', 'none');--}}
{{--    --}}{{--                            $(".print-success-msg").find("ul").append--}}
{{--    --}}{{--                            ('<li>Skills Inserted Successfully.</li>');--}}
{{--    --}}{{--                        }--}}
{{--    --}}{{--                    }--}}
{{--    --}}{{--                });--}}
{{--    --}}{{--            });--}}
{{--    --}}{{--            function printErrorMsg(msg) {--}}
{{--    --}}{{--                $(".print-error-msg").find("ul").html('');--}}
{{--    --}}{{--                $(".print-error-msg").css('display', 'block');--}}
{{--    --}}{{--                $(".print-success-msg").css('display', 'none');--}}
{{--    --}}{{--                $.each(msg, function (key, value) {--}}
{{--    --}}{{--                    $(".print-error-msg").find("ul").append('<li>' + value + '</li>');--}}
{{--    --}}{{--                });--}}
{{--    --}}{{--            }--}}
{{--    --}}{{--        });--}}
{{--    --}}{{--        $(document).ready(function (e) {--}}
{{--    --}}{{--            $(".rateYo").rateYo({--}}
{{--    --}}{{--                readonly: false--}}
{{--    --}}{{--            });--}}

{{--    --}}{{--            $--}}
{{--    --}}{{--        });--}}
{{--    --}}{{--    </script>--}}



@extends('user.shared.template')
@section('more_css')
{{--    <link href=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js">--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>--}}
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('/assets/css/ColorForm.css')}}">

{{--    <script type="text/javascript">--}}
{{--        $(document).ready(function () {--}}
{{--            var postURL = "<?php echo url('skills'); ?>";--}}
{{--            var i = 1;--}}
{{--            $('#add').click(function () {--}}
{{--                i++;--}}
{{--                $('#dynamic_field').append--}}
{{--                ('<tr id="row' + i + '" class="dynamic-added"><td>' +--}}
{{--                    '<input type="text" name="name[]" placeholder="Enter Skill" ' +--}}
{{--                    'class="form-control name_list" /></td><td><button type="button" ' +--}}
{{--                    'name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');--}}
{{--            });--}}
{{--            $(document).on('click', '.btn_remove', function () {--}}
{{--                var button_id = $(this).attr("id");--}}
{{--                $('#row' + button_id + '').remove();--}}
{{--            });--}}
{{--            $.ajaxSetup({--}}
{{--                headers: {--}}
{{--                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--                }--}}
{{--            });--}}
{{--            $('#submit').click(function () {--}}
{{--                $.ajax({--}}
{{--                    url: postURL,--}}
{{--                    method: "POST",--}}
{{--                    data: $('#add_name').serialize(),--}}
{{--                    type: 'json',--}}
{{--                    success: function (data) {--}}
{{--                        if (data.error) {--}}
{{--                            printErrorMsg(data.error);--}}
{{--                        } else {--}}
{{--                            i = 1;--}}
{{--                            $('.dynamic-added').remove();--}}
{{--                            $('#add_name')[0].reset();--}}
{{--                            $(".print-success-msg").find("ul").html('');--}}
{{--                            $(".print-success-msg").css('display', 'block');--}}
{{--                            $(".print-error-msg").css('display', 'none');--}}
{{--                            $(".print-success-msg").find("ul").append--}}
{{--                            ('<li>Skills Inserted Successfully.</li>');--}}
{{--                        }--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--            function printErrorMsg(msg) {--}}
{{--                $(".print-error-msg").find("ul").html('');--}}
{{--                $(".print-error-msg").css('display', 'block');--}}
{{--                $(".print-success-msg").css('display', 'none');--}}
{{--                $.each(msg, function (key, value) {--}}
{{--                    $(".print-error-msg").find("ul").append('<li>' + value + '</li>');--}}
{{--                });--}}
{{--            }--}}
{{--        });--}}
{{--        $(document).ready(function (e) {--}}
{{--            $(".rateYo").rateYo({--}}
{{--                readonly: false--}}
{{--            });--}}
{{--            $--}}
{{--        });--}}
{{--    </script>--}}

@endsection
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
                               href="{{url('color')}}" role="tab">Color</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane{{request()->is('personal') ? 'active' : null}}"
                             id="{{url('personal')}}" role="tabpanel">
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
                                                type="button" id="inputGroupFileAddon04">Upload Image
                                        </button>
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
                                <div class="items">

                                    <div class="form-group"><label>Author Email:</label>
                                        <input id="author_email" class="form-control" name="author" required="required"
                                               type="EMAIL"/></div>

                                </div>

                                <button type="button" class="add_field_button">Add Field</button>

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
                             id="{{url('social')}}" role="tabpanel">
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
                             id="{{url('experiences')}}" role="tabpanel">
                            <form action="" method="POST">
                                @csrf
                                <div class="form-row mt-3">
                                    <div class="col-8 offset-2 offset-md-2">
                                        <h3>You can add More Than One Work Experience</h3>
                                    </div>
                                </div>

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
                                {{--                                <div class="form-row p-0 mt-3 collapse hide" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">--}}
                                {{--                                    <div class="col-6">--}}
                                {{--                                        <label for="jobTitle">Job Title</label>--}}
                                {{--                                        <input type="text" class="form-control" id="jobTitle"--}}
                                {{--                                               name="jobName" placeholder="Job Title">--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="col-6">--}}
                                {{--                                        <label for="company">Company</label>--}}
                                {{--                                        <input type="text" class="form-control" id="company"--}}
                                {{--                                               name="company" placeholder="Company">--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="col-6">--}}
                                {{--                                        <label for="inputState3">Start Date</label>--}}
                                {{--                                        <input type="date" id="inputState3"--}}
                                {{--                                               class="form-control" name="startDate">--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="col-6">--}}
                                {{--                                        <label for="inputState4">End Date</label>--}}
                                {{--                                        <input type="date" id="inputState4"--}}
                                {{--                                               class="form-control" name="endDate">--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="form-row mt-3" id="accordion">--}}
                                {{--                                    <div class="col-12" id="headingOne">--}}
                                {{--                                        <div class=""--}}
                                {{--                                             data-toggle="collapse" data-target="#collapseOne"--}}
                                {{--                                             aria-expanded="true" aria-controls="collapseOne">--}}
                                {{--                                            <i class="fa fa-plus text-primary"><a><u>Add Work Experience</u></a></i>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
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
                             id="{{url('skills')}}" role="tabpanel">
                            {{--                                <div class="form-row mt-4">--}}
                            {{--                                    <div class="col-7">--}}
                            {{--                                        <fieldset disabled>--}}
                            {{--                                            <div class="form-group">--}}
                            {{--                                                <input type="text" id="disabledTextInput" class="form-control"--}}
                            {{--                                                       name=""  placeholder="Skill One" >--}}
                            {{--                                            </div>--}}
                            {{--                                        </fieldset>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="col-1">--}}
                            {{--                                        <button class="btn btn-danger">--}}
                            {{--                                            <i class="fa fa-times"></i>--}}
                            {{--                                        </button>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="rateYo col-2 mx-auto" data-rateyo-rating="4.5">--}}
                            {{--                                        <span>{{round($newskill->rating, 2)}} / 5.0</span>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}

                            {{--                                    <div class="col-2">--}}
                            {{--                                        <div class="rateYo" data-rateyo-rating="0"></div>--}}
                            {{--                                        <input type="hidden" name="rating" id="rating" value="0"--}}
                            {{--                                               class="form-control">--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            <form name="add_name" id="add_name" class="mt-3">
                                <div class="alert alert-danger print-error-msg" style="display:none">
                                    <ul></ul>
                                </div>
                                <div class="alert alert-success print-success-msg" style="display:none">
                                    <ul></ul>
                                </div>
                                <div class="table-responsive">
                                    <table class="table" id="dynamic_field">
                                        <tr>
                                            <td><input type="text" name="name[]"
                                                       placeholder="Enter Skill"
                                                       class="form-control name_list"/></td>
                                            <td>
                                                <button type="button" name="add" id="add"
                                                        class="btn btn-success">Add More
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="col-5"></div>
                                    <div class="col-2 ">
                                        <input type="button" name="submit" id="submit"
                                               class="btn btn-primary" value="Submit"/>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="tab-pane {{request()->is('education') ? 'active' : null}}"
                             id="{{url('education')}}" role="tabpanel">
                            <form action="" method="POST">
                                @csrf
                                <div class="form-row mt-3">
                                    <div class="col-8 offset-2 offset-md-2">
                                        <h3>You can add More Than One Education History</h3>
                                    </div>
                                </div>
                                <div class="row mt-3">
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
                                        <select class="custom-select" name="degree">
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
                                               class="form-control" name="startDate">
                                    </div>
                                    <div class="col-6">
                                        <label for="inputState6">End Date</label>
                                        <input type="date" id="inputState6"
                                               class="form-control" name="endDate">
                                    </div>
                                </div>
                                {{--                                <div class="form-row mt-3">--}}
                                {{--                                    <label for="inputState5">Upload Certificate</label>--}}
                                {{--                                    <div class="custom-file">--}}
                                {{--                                        <input type="file" class="custom-file-input" id="inputGroupFile01"--}}
                                {{--                                               aria-describedby="inputGroupFileAddon01">--}}
                                {{--                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}

                                {{--                                <div class="form-row p-0 mt-3 collapse hide" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">--}}
                                {{--                                    <div class="col-6 ">--}}
                                {{--                                        <label for="inputState6">Degree</label>--}}
                                {{--                                        <select class="custom-select">--}}
                                {{--                                            <option selected>Degree</option>--}}
                                {{--                                            <option value="1">High School Deploma</option>--}}
                                {{--                                            <option value="2">High School Deploma</option>--}}
                                {{--                                            <option value="3">High School Deploma</option>--}}
                                {{--                                        </select>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="col-6">--}}
                                {{--                                        <label for="school">School</label>--}}
                                {{--                                        <input type="text" class="form-control" id="school"--}}
                                {{--                                               name="school" placeholder="School One">--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="col-6 mt-3">--}}
                                {{--                                        <label for="inputState5">Start Date</label>--}}
                                {{--                                        <input type="date" id="inputState5"--}}
                                {{--                                               class="form-control">--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="col-6 mt-3">--}}
                                {{--                                        <label for="inputState6">End Date</label>--}}
                                {{--                                        <input type="date" id="inputState6"--}}
                                {{--                                               class="form-control">--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="col-12 mt-3">--}}
                                {{--                                        <label for="inputState5">Upload Certificate</label>--}}
                                {{--                                        <div class="custom-file">--}}
                                {{--                                            <input type="file" class="custom-file-input" id="inputGroupFile01"--}}
                                {{--                                                   aria-describedby="inputGroupFileAddon01">--}}
                                {{--                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}

                                {{--                                </div>--}}
                                {{--                                <div class="form-row mt-3" id="accordion">--}}
                                {{--                                    <div class="col-12" id="headingOne">--}}
                                {{--                                        <div class="" data-toggle="collapse" data-target="#collapseOne"--}}
                                {{--                                             aria-expanded="true" aria-controls="collapseOne">--}}
                                {{--                                            <i class="fa fa-plus text-primary"><a><u>Add Education</u></a></i>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                <div class="form-row mt-4">
                                    <div class="col-5">
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-primary btn-block"
                                                style="height: 40px;"><b>Submet</b>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane  {{request()->is('courses') ? 'active' : null}}"
                             id="{{url('courses')}}" role="tabpanel">
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
                                                <input type="text" id="course" class="form-control"
                                                       placeholder="Course One" style="height: 40px;">
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
                                        <button type="submit" class="btn btn-primary btn-block"
                                                style=" height: 40px;"><b>Submet</b>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane  {{request()->is('certificates') ? 'active' : null}}"
                             id="{{url('certificates')}}" role="tabpanel">
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

                                {{--                                <div class="form-row">--}}
                                {{--                                    <div class="custom-file">--}}
                                {{--                                        <input type="file" class="custom-file-input" id="inputGroupFile01"--}}
                                {{--                                               aria-describedby="inputGroupFileAddon01">--}}
                                {{--                                        <label class="custom-file-label" for="inputGroupFile01"--}}
                                {{--                                               style="height: 40px;">Choose file</label>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                <div class="form-row mt-3">
                                    <div class="col-5">
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-primary btn-block"
                                                style=" height: 40px;"><b>Submet</b>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
{{--                        <div class="tab-pane  {{request()->is('color') ? 'active' : null}}"--}}
{{--                             id="{{url('color')}}" role="tabpanel">--}}
{{--                            <form action="" method="POST" class="mt-3">--}}
{{--                                @csrf--}}
{{--                                <div class="form-row mt-3">--}}

{{--                                    <div class="col-6 offset-3">--}}
{{--                                        <select class="custom-select color shadow-sm" name="color">--}}
{{--                                            <option selected style="color:gray">Choose Color</option>--}}
{{--                                            <option value="#3AC587" style="background: #3AC587;"></option>--}}
{{--                                            <option value="#002B5B" style="background: #002B5B;"></option>--}}
{{--                                            <option value="#6DA8BA" style="background: #6DA8BA"></option>--}}
{{--                                            <option value="#F85C50" style="background: #F85C50;"></option>--}}
{{--                                            <option value="#4876D6" style="background: #4876D6;"></option>--}}
{{--                                            <option value="#808285" style="background: #808285;"></option>--}}
{{--                                            <option value="#333333" style="background: #333333;"></option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-row mt-3">--}}
{{--                                    <div class="col-5">--}}
{{--                                    </div>--}}
{{--                                    <div class="col-2">--}}
{{--                                        <button type="submit" class="btn btn-primary btn-block"--}}
{{--                                                style=" height: 40px;"><b>Submet</b>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
                        <div class="tab-pane  {{request()->is('color') ? 'active' : null}}"
                             id="{{url('color')}}" role="tabpanel">
                            <form action="" method="POST" class="mt-3 form cf">
                                @csrf
                                <div class="form-row mt-4">
                                    <div class="col-6 offset-3 ">
                                        <div class="custom-radios">
                                            <div>
                                                <input type="radio" id="color-1" name="color" value="#3AC587">
                                                <label for="color-1">
                                                    <span>
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg"
                                                             alt="Checked Icon"/>
                                                    </span>
                                                </label>
                                            </div>
                                            <div>
                                                <input type="radio" id="color-2" name="color" value="#002B5B">
                                                <label for="color-2">
                                                    <span>
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg"
                                                               alt="Checked Icon"/>
                                                    </span>
                                                </label>
                                            </div>
                                            <div>
                                                <input type="radio" id="color-3" name="color" value="#F85C50">
                                                <label for="color-3">
                                                    <span>
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg"
                                                             alt="Checked Icon"/>
                                                    </span>
                                                </label>
                                            </div>
                                            <div>
                                                <input type="radio" id="color-4" name="color" value="#2095A9">
                                                <label for="color-4">
                                                    <span>
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg"
                                                             alt="Checked Icon"/>
                                                    </span>
                                                </label>
                                            </div>
                                            <div>
                                                <input type="radio" id="color-5" name="color" value="#F69779">
                                                <label for="color-5">
                                                    <span>
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg"
                                                             alt="Checked Icon"/>
                                                    </span>
                                                </label>
                                            </div>
                                            <div>
                                                <input type="radio" id="color-6" name="color" value="#645B60">
                                                <label for="color-6">
                                                    <span>
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg"
                                                             alt="Checked Icon"/>
                                                    </span>
                                                </label>
                                            </div>
                                            <div>
                                                <input type="radio" id="color-7" name="color" value="#0999DC">
                                                <label for="color-7">
                                                    <span>
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg"
                                                             alt="Checked Icon" />
                                                    </span>
                                                </label>
                                            </div>
                                            <div>
                                                <input type="radio" id="color-8" name="color" value="#6574cd">
                                                <label for="color-8">
                                                    <span>
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg"
                                                             alt="Checked Icon" />
                                                    </span>
                                                </label>
                                            </div>
                                            <div>
                                                <input type="radio" id="color-9" name="color" value="#E68653">
                                                <label for="color-9">
                                                    <span>
                                                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg"
                                                             alt="Checked Icon" />
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
{{--                                        <select class="custom-select color shadow-sm" name="color" >--}}
{{--                                            <option selected style="color:gray">Choose Color</option>--}}
{{--                                            <option value="#3AC587" class="p-3 border-dark">--}}
{{--                                                <i class="fas fa-stop" style="background: #0b2e13;"></i>--}}
{{--                                            </option>--}}

{{--                                            <option value="#3AC587" style="background: #3AC587;"></option>--}}
{{--                                            <option value="#002B5B" style="background: #002B5B;"></option>--}}
{{--                                            <option value="#6DA8BA" style="background: #6DA8BA"></option>--}}
{{--                                            <option value="#F85C50" style="background: #F85C50;"></option>--}}
{{--                                            <option value="#4876D6" style="background: #4876D6;"></option>--}}
{{--                                            <option value="#808285" style="background: #808285;"></option>--}}
{{--                                            <option value="#333333" style="background: #333333;"></option>--}}
{{--                                        </select>--}}
                                <div class="form-row mt-3">
                                    <div class="col-5">
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-primary btn-block"
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
    </script>
    {{--    <script type="text/javascript">--}}
    {{--        $(document).ready(function () {--}}
    {{--            var postURL = "<?php echo url('skills'); ?>";--}}
    {{--            var i = 1;--}}
    {{--            $('#add').click(function () {--}}
    {{--                i++;--}}
    {{--                $('#dynamic_field').append--}}
    {{--                ('<tr id="row' + i + '" class="dynamic-added"><td>' +--}}
    {{--                    '<input type="text" name="name[]" placeholder="Enter Skill" ' +--}}
    {{--                    'class="form-control name_list" /></td><td><button type="button" ' +--}}
    {{--                    'name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');--}}
    {{--            });--}}
    {{--            $(document).on('click', '.btn_remove', function () {--}}
    {{--                var button_id = $(this).attr("id");--}}
    {{--                $('#row' + button_id + '').remove();--}}
    {{--            });--}}
    {{--            $.ajaxSetup({--}}
    {{--                headers: {--}}
    {{--                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
    {{--                }--}}
    {{--            });--}}
    {{--            $('#submit').click(function () {--}}
    {{--                $.ajax({--}}
    {{--                    url: postURL,--}}
    {{--                    method: "POST",--}}
    {{--                    data: $('#add_name').serialize(),--}}
    {{--                    type: 'json',--}}
    {{--                    success: function (data) {--}}
    {{--                        if (data.error) {--}}
    {{--                            printErrorMsg(data.error);--}}
    {{--                        } else {--}}
    {{--                            i = 1;--}}
    {{--                            $('.dynamic-added').remove();--}}
    {{--                            $('#add_name')[0].reset();--}}
    {{--                            $(".print-success-msg").find("ul").html('');--}}
    {{--                            $(".print-success-msg").css('display', 'block');--}}
    {{--                            $(".print-error-msg").css('display', 'none');--}}
    {{--                            $(".print-success-msg").find("ul").append--}}
    {{--                            ('<li>Skills Inserted Successfully.</li>');--}}
    {{--                        }--}}
    {{--                    }--}}
    {{--                });--}}
    {{--            });--}}
    {{--            function printErrorMsg(msg) {--}}
    {{--                $(".print-error-msg").find("ul").html('');--}}
    {{--                $(".print-error-msg").css('display', 'block');--}}
    {{--                $(".print-success-msg").css('display', 'none');--}}
    {{--                $.each(msg, function (key, value) {--}}
    {{--                    $(".print-error-msg").find("ul").append('<li>' + value + '</li>');--}}
    {{--                });--}}
    {{--            }--}}
    {{--        });--}}
    {{--        $(document).ready(function (e) {--}}
    {{--            $(".rateYo").rateYo({--}}
    {{--                readonly: false--}}
    {{--            });--}}

    {{--            $--}}
    {{--        });--}}
    {{--    </script>--}}

@endsection
