@extends('user.shared.template')
@section('more_css')
    <link rel="stylesheet" href="{{asset('/assets/css/ColorForm.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
@endsection
@section('title')
    ResumeBuilder

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
                            <form action="" method="POST">
                                @csrf
                                <div class="row">
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
{{--                                <div class="form-row mt-3"></div>--}}
                            </form>
                        </div>
                        <div class="tab-pane  {{request()->is('social') ? 'active' : null}}"
                             id="{{url('social')}}" role="tabpanel">
                            <form action="" method="POST">
                                @csrf
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
                            @if(count($data)>0)
                                @foreach($data as $experience)
                                    <form action="{{ url('/experiences',['id'=> $experience->id])}}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <div class="form-row mt-3">
                                            <div class="col-6">
                                                <label for="inputState6">job Name</label>
                                                <select class="custom-select" name="jobName" disabled>
                                                    <option value="{{$experience->job_name}}">
                                                        {{$experience->job_name}}</option>

                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label for="company">company</label>
                                                <input type="text" class="form-control" id="company"
                                                       name="company" placeholder="{{$experience->company}}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-row mt-3">
                                            <div class="col-6">
                                                <label for="inputState10">Start Date</label>
                                                <input type="date" id="inputState10" value="{{$experience->start_date}}"
                                                       class="form-control" name="startDate" disabled>
                                            </div>
                                            <div class="col-6">
                                                <label for="inputState11">End Date</label>
                                                <input type="date" id="inputState11" value="{{$experience->end_date}}"
                                                       class="form-control" name="endDate" disabled>
                                            </div>
                                        </div>
                                        <div class="form-row mt-4">
                                            <div class="col-11"></div>
                                            <div class="col-1 ">
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                @endforeach
                            @endif
                            <form action="" method="POST">
                                @csrf
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
                                <div class="form-row mt-4">
                                    <div class="col-11">
                                    </div>
                                    <div class="col-1">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane container {{request()->is('skills') ? 'active' : null}}"
                             id="{{url('skills')}}" role="tabpanel">
                            @foreach($data as $skill)
                                <form action="{{ url('/skills',['id'=> $skill->id])}}"
                                      method="post">
                                    @method('delete')
                                    @csrf
                                    <div class="form-row mt-3">
                                        <div class="col-8">
                                            <input class="form-control" value="{{$skill->skill}}" disabled/>
                                        </div>
                                        <div class="col-1">
                                            <button class="btn-sm btn-danger" type="submit">
                                                <i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                </form>
                            @endforeach
                            <form action="" method="POST">
                                @csrf
                                <div class="form-row mt-3">
                                    <div class="col-8">
                                        <input type="text" class="form-control" id="skill"
                                               name="skill" placeholder="Enter Skill">
                                    </div>
                                    <div class="col-1">
                                        <button type="submit" class="btn-sm btn-success">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
{{--                            <div class="container">--}}
{{--                                <div class="panel panel-primary">--}}
{{--                                    <div class="panel-heading">--}}
{{--                                        <button id="btn_add" name="btn_add" class="btn btn-default pull-right">--}}
{{--                                            Add New Skills</button>--}}
{{--                                    </div>--}}
{{--                                    <div class="panel-body">--}}
{{--                                        <table class="table">--}}
{{--                                            <thead>--}}
{{--                                            <tr>--}}
{{--                                                <th>ID</th>--}}
{{--                                                <th>Skills</th>--}}
{{--                                                <th>Details</th>--}}
{{--                                                <th>Actions</th>--}}
{{--                                            </tr>--}}
{{--                                            </thead>--}}
{{--                                            <tbody id="skills-list" name="skills-list">--}}
{{--                                            @foreach ($data as $skill)--}}
{{--                                                <tr id="skill{{$skill->id}}">--}}
{{--                                                    <td>{{$skill->id}}</td>--}}
{{--                                                    <td>{{$skill->skill}}</td>--}}
{{--                                                    <td>{{$skill->details}}</td>--}}
{{--                                                    <td>--}}
{{--                                                        <button class="btn btn-warning btn-detail--}}
{{--                                                         open_modal" value="{{$skill->id}}">Edit</button>--}}
{{--                                                        <button class="btn btn-danger btn-delete delete-skill"--}}
{{--                                                                value="{{$skill->id}}">Delete</button>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                            @endforeach--}}
{{--                                            </tbody>--}}
{{--                                        </table>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="modal fade" id="myModal" tabindex="-1"--}}
{{--                                     role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
{{--                                    <div class="modal-dialog">--}}
{{--                                        <div class="modal-content">--}}
{{--                                            <div class="modal-header">--}}
{{--                                                <button type="button"--}}
{{--                                                        class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                                    <span aria-hidden="true">×</span></button>--}}
{{--                                                <h4 class="modal-title" id="myModalLabel">Skill</h4>--}}
{{--                                            </div>--}}
{{--                                            <div class="modal-body">--}}
{{--                                                <form id="frmSkills" name="frmSkills"--}}
{{--                                                      class="form-horizontal" novalidate="">--}}
{{--                                                    <div class="form-group error">--}}
{{--                                                        <label for="inputSkill" class="col-sm-3 control-label">--}}
{{--                                                            Skill</label>--}}
{{--                                                        <div class="col-sm-9">--}}
{{--                                                            <input type="text" class="form-control has-error"--}}
{{--                                                                   id="skill" name="skill"--}}
{{--                                                                   placeholder="Skill" value="">--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            <label for="inputDetail"--}}
{{--                                                                   class="col-sm-3 control-label">Details</label>--}}
{{--                                                            <div class="col-sm-9">--}}
{{--                                                                <input type="text"--}}
{{--                                                                       class="form-control" id="details"--}}
{{--                                                                       name="details" placeholder="details"--}}
{{--                                                                       value="">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </form>--}}
{{--                                            </div>--}}
{{--                                            <div class="modal-footer">--}}
{{--                                                <button type="button" class="btn btn-primary" id="btn-save"--}}
{{--                                                        value="add">Save changes</button>--}}
{{--                                                <input type="hidden" id="skill_id" name="skill_id" value="0">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <table class="table border-0" id="laravel_crud">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>Id</th>--}}
{{--                                    <th>Skill</th>--}}
{{--                                    <td colspan="2">Action</td>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody id="skills-crud">--}}
{{--                                @foreach($skills as $s_info)--}}
{{--                                    <tr id="skill_id_{{ $s_info->id }}">--}}
{{--                                        <td>{{ $s_info->id  }}</td>--}}
{{--                                        <td>{{ $s_info->name }}</td>--}}
{{--                                        <td colspan="2">--}}
{{--                                            <a href="javascript:void(0)"--}}
{{--                                               id="edit-skill" data-id="{{ $s_info->id }}"--}}
{{--                                               class="btn btn-info mr-2">Edit</a>--}}
{{--                                            <a href="javascript:void(0)"--}}
{{--                                               id="delete-skill" data-id="{{ $s_info->id }}"--}}
{{--                                               class="btn btn-danger delete-skill">Delete</a>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endforeach--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                            {{ $skills->links() }}--}}
{{--                            <div class="modal fade" id="ajax-crud-modal" aria-hidden="true">--}}
{{--                                <div class="modal-dialog">--}}
{{--                                    <div class="modal-content">--}}
{{--                                        <div class="modal-header">--}}
{{--                                            <h4 class="modal-title" id="skillCrudModal"></h4>--}}
{{--                                        </div>--}}
{{--                                        <form id="skillForm" name="skillForm" class="form-horizontal">--}}
{{--                                            <div class="modal-body">--}}
{{--                                                <input type="hidden" name="skill_id" id="skill_id">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label for="skill" class="col-sm-2 control-label">Skill</label>--}}
{{--                                                    <div class="col-sm-12">--}}
{{--                                                        <input type="text" class="form-control" id="skill"--}}
{{--                                                               name="name" placeholder="Enter skill"--}}
{{--                                                               value="" maxlength="50" required="">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="modal-footer">--}}
{{--                                                <button type="submit" class="btn btn-primary"--}}
{{--                                                        id="btn-save" value="create">--}}
{{--                                                    Save changes--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
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
{{--                            <div class="table-responsive border-0">--}}
{{--                                <form method="post" id="dynamic_form">--}}
{{--                                    <span id="result"></span>--}}
{{--                                    <table class="table table-bordered table-striped" id="skill_table">--}}
{{--                                        <thead>--}}
{{--                                        <tr>--}}
{{--                                            <th width="35%">Skill</th>--}}
{{--                                            <th width="30%">Action</th>--}}
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
{{--                                                       class="btn btn-primary" value="Save" />--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                        </tfoot>--}}
{{--                                    </table>--}}
{{--                                </form>--}}
{{--                            </div>--}}
                        <div class="tab-pane {{request()->is('education') ? 'active' : null}}"
                             id="{{url('education')}}" role="tabpanel">
                            @if(count($data)>0)
                                @foreach($data as $education)
                                    <form action="{{ url('/education',['id'=> $education->id])}}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <div class="form-row mt-3">
                                            <div class="col-6">
                                                <label for="inputState6">Degree</label>
                                                <select class="custom-select" name="degree" disabled>
                                                    <option value="{{$education->degree}}">
                                                        {{$education->degree}}</option>

                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label for="school">School</label>
                                                <input type="text" class="form-control" id="school"
                                                       name="school" placeholder="{{$education->school}}" disabled>
                                            </div>
                                        </div>
                                        <div class="form-row mt-3">
                                            <div class="col-6">
                                                <label for="inputState5">Start Date</label>
                                                <input type="date" id="inputState5" value="{{$education->start_date}}"
                                                       class="form-control" name="startDate" disabled>
                                            </div>
                                            <div class="col-6">
                                                <label for="inputState6">End Date</label>
                                                <input type="date" id="inputState6" value="{{$education->end_date}}"
                                                       class="form-control" name="endDate" disabled>
                                            </div>
                                        </div>
                                        <div class="form-row mt-4">
                                            <div class="col-11"></div>
                                            <div class="col-1 ">
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                @endforeach
                            @else

                            @endif
                                    <form action="" method="POST">
                                @csrf
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
                                            <option >Degree</option>
                                            <option value="High School Deploma1">High School Deploma1</option>
                                            <option value="High School Deploma2">High School Deploma2</option>
                                            <option value="High School Deploma3">High School Deploma3</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="school">School</label>
                                        <input type="text" class="form-control" id="school"
                                               name="school" placeholder="School">
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
                                <div class="form-row mt-4">
                                    <div class="col-11">
                                    </div>
                                    <div class="col-1">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane  {{request()->is('courses') ? 'active' : null}}"
                             id="{{url('courses')}}" role="tabpanel">
                            @foreach($data as $course)
                                <form action="{{ url('/courses',['id'=> $course->id])}}"
                                      method="post">
                                    @method('delete')
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <div class="form-row mt-3">
                                        <div class="col-5">
                                            <input class="form-control" value="{{$course->course}}" disabled/>
                                        </div>
                                        <div class="col-5">
                                            <input type="date" id="inputState9"
                                                   class="form-control" name="date"
                                                   value="{{$course->date}}" disabled/>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn-sm btn-danger rounded"  type="submit">
                                                <i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                </form>
                            @endforeach
                            {{--                            @endif--}}
                            <form action="" method="POST">
                                @csrf
                                <div class="form-row mt-3">
                                    <div class="col-5">
                                        <input type="text" class="form-control" id="course"
                                               name="course" placeholder="Enter Course">
                                    </div>
                                    <div class="col-5">
                                        <input type="date" id="inputState9"
                                               class="form-control" name="date" placeholder="Enter date">
                                    </div>
                                    <div class="col-1">
                                        <button type="submit" class="btn-sm btn-success rounded">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane  {{request()->is('certificates') ? 'active' : null}}"
                             id="{{url('certificates')}}" role="tabpanel">
                            @foreach($data as $certificate)
                                <form action="{{ url('/certificates',['id'=> $certificate->id])}}"
                                      method="post">
                                    @method('delete')
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <div class="form-row mt-3">
                                        <div class="col-5">
                                            <input class="form-control" value="{{$certificate->certificate}}" disabled/>
                                        </div>
                                        <div class="col-5">
                                            <input type="date" id="inputState8"
                                                   class="form-control" name="date"
                                                    value="{{$certificate->date}}" disabled/>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn-sm btn-danger rounded"  type="submit">
                                                <i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                </form>
                            @endforeach
                            {{--                            @endif--}}
                            <form action="" method="POST">
                                @csrf
                                <div class="form-row mt-3">
                                    <div class="col-5">
                                        <input type="text" class="form-control" id="certificate"
                                               name="certificate" placeholder="Enter Certificate">
                                    </div>
                                    <div class="col-5">
                                        <input type="date" id="inputState8"
                                               class="form-control" name="date" placeholder="Enter date">
                                    </div>
                                    <div class="col-1">
                                        <button type="submit" class="btn-sm btn-success rounded">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                                {{--                                <div class="form-row">--}}
                                {{--                                    <div class="custom-file">--}}
                                {{--                                        <input type="file" class="custom-file-input" id="inputGroupFile01"--}}
                                {{--                                               aria-describedby="inputGroupFileAddon01">--}}
                                {{--                                        <label class="custom-file-label" for="inputGroupFile01"--}}
                                {{--                                               style="height: 40px;">Choose file</label>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}

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
{{--    <script>--}}
{{--        $(document).ready(function (e) {--}}

{{--            function updateSkillView() {--}}
{{--                var skill = JSON.parse(localStorage.getItem('skill'));--}}
{{--                if (cartList != null && cartList.length > 0) {--}}
{{--                    $('#skillTable').removeClass('d-none');--}}
{{--                    $('#skillWarning').addClass('d-none');--}}

{{--                    var table = '';--}}

{{--                    for (var i = 0; i < skill.length; i++) {--}}
{{--                        var overallPrice = priceAfterDiscount * cartList[i]['amount'];--}}
{{--                        overallPrice = Math.round(overallPrice * 100.0) / 100.0;--}}
{{--                        table += '<tr class="text-center">' +--}}
{{--                            '<td>' + (i + 1) + '</td><td>' + cartList[i]['skill'] +--}}
{{--                            '</td><td>' + cartList[i]['price'] + '</td>' +--}}
{{--                            '<td class="text-danger">-' + cartList[i]['discount'] +--}}
{{--                            '%</td><td>' + priceAfterDiscount + '</td><td>' + cartList[i]['amount'] + '</td>' +--}}
{{--                            '<td class="text-success">' + overallPrice +--}}
{{--                            '</td><td><button class="btn btn-danger btn-sm" ' +--}}
{{--                            'id="item-' + cartList[i]['id'] + '">' +--}}
{{--                            '<i class="fa fa-trash"></i></button></td></tr>';--}}
{{--                    }--}}

{{--                    $('#cartBody').html(table);--}}

{{--                    $('#cartBody button[id^="item-"]').each(function (index, btn) {--}}
{{--                        $(btn).click(function (e) {--}}
{{--                            e.preventDefault();--}}

{{--                            var isConfirmed = confirm('Are you sure?');--}}
{{--                            if (!isConfirmed) return;--}}
{{--                            var id = $(this).attr('id').split('-')[1];--}}
{{--                            for (var i = 0; i < cartList.length; i++) {--}}
{{--                                if (id == cartList[i]['id']) {--}}
{{--                                    cartList.splice(i, 1);--}}
{{--                                    break;--}}
{{--                                }--}}
{{--                            }--}}
{{--                            localStorage.setItem('cartList', JSON.stringify(cartList));--}}
{{--                            updateCartView();--}}
{{--                        });--}}
{{--                    });--}}
{{--                } else {--}}
{{--                    $('#cartTable').addClass('d-none');--}}
{{--                    $('#cartWarning').removeClass('d-none');--}}
{{--                }--}}
{{--            }--}}

{{--            updateSkillView();--}}

{{--            $('.addSkill').off().each(function (i, btn) {--}}
{{--                $(btn).click(function (e) {--}}
{{--                    e.preventDefault();--}}
{{--                    // https://sweetalert2.github.io/--}}
{{--                    var isConfirmed = confirm("Do you want to add this Skill?");--}}
{{--                    if (isConfirmed) {--}}
{{--                        var skillID = $(this).attr('data-id');--}}
{{--                        var skillName = $(this).attr('data-name');--}}
{{--                        var skill = {--}}
{{--                            'id': skillID,--}}
{{--                            'skill': skillName,--}}
{{--                        };--}}

{{--                        var elements = JSON.parse(localStorage.getItem('skill'));--}}
{{--                        if (elements == null)--}}
{{--                            elements = [];--}}

{{--                        var isFound = false;--}}
{{--                        for (var i = 0; i < elements.length; i++) {--}}
{{--                            if (elements[i]['id'] == skillID) {--}}
{{--                                isFound = true;--}}
{{--                                break;--}}
{{--                            }--}}
{{--                        }--}}
{{--                        if (!isFound) {--}}
{{--                            elements.push(skill);--}}
{{--                        } else {--}}
{{--                            elements[i]['amount']++;--}}
{{--                        }--}}
{{--                        //alert(productID);--}}
{{--                        localStorage.setItem('skill', JSON.stringify(elements));--}}
{{--                        console.log(localStorage.getItem('skill'));--}}
{{--                        updateSkillView();--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--    </script>--}}
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
{{--    </script>--}}
{{--<script type="text/javascript">--}}
{{--    function createClone() {--}}
{{--        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');--}}
{{--        $.ajax( {--}}
{{--            url: 'clone-fields',--}}
{{--            method: 'post',--}}
{{--            data: {'_token': CSRF_TOKEN, 'div_count': $('.clonedInput').length + 1},--}}
{{--        } ).success( function( data ) {--}}
{{--            var obj = JSON.parse(data);--}}
{{--            $('#clonedInput').before(obj);--}}
{{--        });--}}
{{--    }--}}
{{--    function removedClone(id){--}}
{{--        var r = confirm("Are you sure you want to delete?");--}}
{{--        if (r == true) {--}}
{{--            $(id).remove();--}}
{{--        }--}}
{{--    }--}}
{{--</script>--}}
{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        $.ajaxSetup({--}}
{{--            headers: {--}}
{{--                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--            }--}}
{{--        });--}}
{{--        /*  When user click add user button */--}}
{{--        $('#create-new-skill').click(function () {--}}
{{--            $('#btn-save').val("create-skill");--}}
{{--            $('#skillForm').trigger("reset");--}}
{{--            $('#skillCrudModal').html("Add New Skill");--}}
{{--            $('#ajax-crud-modal').modal('show');--}}
{{--        });--}}

{{--        /* When click edit user */--}}
{{--        $('body').on('click', '#edit-skill', function () {--}}
{{--            var skill_id = $(this).data('id');--}}
{{--            $.get('ajax-crud/' + skill_id +'/edit', function (data) {--}}
{{--                $('#skillCrudModal').html("Edit Skill");--}}
{{--                $('#btn-save').val("edit-skill");--}}
{{--                $('#ajax-crud-modal').modal('show');--}}
{{--                $('#skill_id').val(data.id);--}}
{{--                $('#skill').val(data.skill);--}}
{{--            })--}}
{{--        });--}}
{{--        //delete user login--}}
{{--        $('body').on('click', '.delete-skill', function () {--}}
{{--            var skill_id = $(this).data("id");--}}
{{--            if(confirm("Are You sure want to delete !")) {--}}

{{--                $.ajax({--}}
{{--                    type: "DELETE",--}}
{{--                    url: "{{ url('skills')}}"+'/'+ skill_id,--}}
{{--                    success: function (data) {--}}
{{--                        $("#skill_id_" + skill_id).remove();--}}
{{--                    },--}}
{{--                    error: function (data) {--}}
{{--                        console.log('Error:', data);--}}
{{--                    }--}}
{{--                });--}}
{{--            }--}}
{{--        });--}}
{{--    });--}}

{{--    if ($("#skillForm").length > 0) {--}}
{{--        $("#skillForm").validate({--}}

{{--            submitHandler: function(form) {--}}

{{--                var actionType = $('#btn-save').val();--}}
{{--                $('#btn-save').html('Sending..');--}}

{{--                $.ajax({--}}
{{--                    data: $('#skillForm').serialize(),--}}
{{--                    url: "skills",--}}
{{--                    type: "POST",--}}
{{--                    dataType: 'json',--}}
{{--                    success: function (data) {--}}
{{--                        var skill = '<tr id="skill_id_' + data.id + '"><td>' + data.id + '</td><td>' +--}}
{{--                            data.skill + '</td>';--}}
{{--                        skill += '<a href="javascript:void(0)" id="delete-skill" data-id="' + data.id + '"' +--}}
{{--                            ' class="btn btn-danger delete-skill ml-1">Delete</a></td></tr>';--}}


{{--                        if (actionType == "create-skill") {--}}
{{--                            $('#skills-crud').prepend(skill);--}}
{{--                        } else {--}}
{{--                            $("#skill_id_" + data.id).replaceWith(skill);--}}
{{--                        }--}}

{{--                        $('#skillForm').trigger("reset");--}}
{{--                        $('#ajax-crud-modal').modal('hide');--}}
{{--                        $('#btn-save').html('Save Changes');--}}

{{--                    },--}}
{{--                    error: function (data) {--}}
{{--                        console.log('Error:', data);--}}
{{--                        $('#btn-save').html('Save Changes');--}}
{{--                    }--}}
{{--                });--}}
{{--            }--}}
{{--        })--}}
{{--    }--}}


{{--</script>--}}
{{--    <script type='text/javascript'>--}}
{{--        var url = "skills";--}}
{{--        //display modal form for product editing--}}
{{--        $(document).on('click','.open_modal',function(){--}}
{{--            var skill_id = $(this).val();--}}

{{--            $.get(url + '/' + skill_id, function (data) {--}}
{{--                //success data--}}
{{--                console.log(data);--}}
{{--                $('#skill_id').val(data.id);--}}
{{--                $('#skill').val(data.skill);--}}
{{--                $('#details').val(data.details);--}}
{{--                $('#btn-save').val("update");--}}
{{--                $('#myModal').modal('show');--}}
{{--            })--}}
{{--        });--}}
{{--        //display modal form for creating new product--}}
{{--        $('#btn_add').click(function(){--}}
{{--            $('#btn-save').val("add");--}}
{{--            $('#frmSkills').trigger("reset");--}}
{{--            $('#myModal').modal('show');--}}
{{--        });--}}
{{--        //delete product and remove it from list--}}
{{--        $(document).on('click','.delete-skill',function(){--}}
{{--            var skill_id = $(this).val();--}}
{{--            $.ajaxSetup({--}}
{{--                headers: {--}}
{{--                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')--}}
{{--                }--}}
{{--            })--}}
{{--            $.ajax({--}}
{{--                type: "DELETE",--}}
{{--                url: url + '/' + skill_id,--}}
{{--                success: function (data) {--}}
{{--                    console.log(data);--}}
{{--                    $("#skill" + skill_id).remove();--}}
{{--                },--}}
{{--                error: function (data) {--}}
{{--                    console.log('Error:', data);--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--        //create new product / update existing product--}}
{{--        $("#btn-save").click(function (e) {--}}
{{--            $.ajaxSetup({--}}
{{--                headers: {--}}
{{--                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')--}}
{{--                }--}}
{{--            })--}}
{{--            e.preventDefault();--}}
{{--            var formData = {--}}
{{--                skill: $('#skill').val(),--}}
{{--            }--}}
{{--            //used to determine the http verb to use [add=POST], [update=PUT]--}}
{{--            var state = $('#btn-save').val();--}}
{{--            var type = "POST"; //for creating new resource--}}
{{--            var skill_id = $('#skill_id').val();;--}}
{{--            var my_url = url;--}}
{{--            if (state == "update"){--}}
{{--                type = "PUT"; //for updating existing resource--}}
{{--                my_url += '/' + skill_id;--}}
{{--            }--}}
{{--            console.log(formData);--}}
{{--            $.ajax({--}}
{{--                type: type,--}}
{{--                url: my_url,--}}
{{--                data: formData,--}}
{{--                dataType: 'json',--}}
{{--                success: function (data) {--}}
{{--                    console.log(data);--}}
{{--                    var skill = '<tr id="skill' + data.id + '"><td>' + data.id + '</td><td>' + data.skill--}}
{{--                        + '</td><td>' + data.details + '</td>';--}}
{{--                    skill += '<td><button class="btn btn-warning btn-detail open_modal" value="' + data.id +--}}
{{--                        '">Edit</button>';--}}
{{--                    skill += ' <button class="btn btn-danger btn-delete delete-skill" value="' + data.id +--}}
{{--                        '">Delete</button></td></tr>';--}}
{{--                    if (state == "add"){ //if user added a new record--}}
{{--                        $('#skills-list').append(skill);--}}
{{--                    }else{ //if user updated an existing record--}}
{{--                        $("#skill" + skill_id).replaceWith( skill );--}}
{{--                    }--}}
{{--                    $('#frmSkills').trigger("reset");--}}
{{--                    $('#myModal').modal('hide')--}}
{{--                },--}}
{{--                error: function (data) {--}}
{{--                    console.log('Error:', data);--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--            <script>--}}
{{--                $(document).ready(function(){--}}

{{--                    var count = 1;--}}

{{--                    sskill(count);--}}

{{--                    function sskill(number)--}}
{{--                    {--}}
{{--                        html = '<tr>';--}}
{{--                        html += '<td><input type="text" name="skill[]" class="form-control" /></td>';--}}
{{--                        if(number > 1)--}}
{{--                        {--}}
{{--                            html += '<td><button type="button" name="remove" id=""' +--}}
{{--                                ' class="btn btn-danger remove">Remove</button></td></tr>';--}}
{{--                            $('tbody').append(html);--}}
{{--                        }--}}
{{--                        else--}}
{{--                        {--}}
{{--                            html += '<td><button type="button" name="add" id="add"' +--}}
{{--                                ' class="btn btn-success">Add</button></td></tr>';--}}
{{--                            $('tbody').html(html);--}}
{{--                        }--}}
{{--                    }--}}

{{--                    $(document).on('click', '#add', function(){--}}
{{--                        count++;--}}
{{--                        sskill(count);--}}
{{--                    });--}}

{{--                    $(document).on('click', '.remove', function(){--}}
{{--                        count--;--}}
{{--                        $(this).closest("tr").remove();--}}
{{--                    });--}}

{{--                    $('#dynamic_form').on('submit', function(event){--}}
{{--                        event.preventDefault();--}}
{{--                        $.ajax({--}}
{{--                            url:'{{ route("skills.getSkillViewBuilder") }}',--}}
{{--                            method:'post',--}}
{{--                            data:$(this).serialize(),--}}
{{--                            dataType:'json',--}}
{{--                            beforeSend:function(){--}}
{{--                                $('#save').attr('disabled','disabled');--}}
{{--                            },--}}
{{--                            success:function(data)--}}
{{--                            {--}}
{{--                                if(data.error)--}}
{{--                                {--}}
{{--                                    var error_html = '';--}}
{{--                                    for(var count = 0; count < data.error.length; count++)--}}
{{--                                    {--}}
{{--                                        error_html += '<p>'+data.error[count]+'</p>';--}}
{{--                                    }--}}
{{--                                    $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');--}}
{{--                                }--}}
{{--                                else--}}
{{--                                {--}}
{{--                                    sskill(1);--}}
{{--                                    $('#result').html('<div class="alert alert-success">'+data.success+'</div>');--}}
{{--                                }--}}
{{--                                $('#save').attr('disabled', false);--}}
{{--                            }--}}
{{--                        })--}}
{{--                    });--}}

{{--                });--}}
{{--            </script>--}}
@endsection
