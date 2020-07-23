@extends('dashboard.shared.template')
@section('more_css')
    <link rel="stylesheet" href="{{asset('/assets/css/style_login.css')}}">
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>--}}
@endsection
@section('title')
    DashBoard
@endsection
@section('content')
    <body>
    <div class="row mt-3 ml-auto" style="font-family: 'Permanent Marker', cursive;font-family: 'Alegreya', serif;">
        <div class="col-3">
            <div class="card">
                <div class="card-header text-center">
                    <h5>DashBoard</h5>
                </div>
                <div class="card-body shadow-sm">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                         aria-orientation="vertical">
                        <a class="nav-link card rounded bg-light {{request()->is('adminHome') ? 'active' : null}}"
                           href="{{url('adminHome')}}" role="tab"><h6>
                                Visitors</h6></a>
                        <a class="nav-link card rounded bg-light {{request()->is('adminProfile') ? 'active' : null}}"
                           href="{{url('adminProfile')}}" role="tab"><h6>
                                Profile</h6></a>
                        <a class="nav-link card rounded bg-light {{request()->is('adminSettings') ? 'active' : null}}"
                           href="{{url('adminSettings')}}" role="tab"><h6>
                                Settings</h6></a>
                        <a class="nav-link card rounded bg-light {{request()->is('adminUsers') ? 'active' : null}}"
                           href="{{url('adminUsers')}}" role="tab"><h6>
                                Users</h6></a>
                        <a class="nav-link card rounded bg-light {{request()->is('adminPosts') ? 'active' : null}}"
                           href="{{url('adminPosts')}}" role="tab"><h6>
                                Posts</h6></a>
                        <a class="nav-link card rounded bg-light {{request()->is('feedbacks') ? 'active' : null}}"
                           href="{{url('feedbacks')}}" role="tab"><h6>
                                Feedback</h6></a>

                        <a class="nav-link card rounded bg-light {{request()->is('adminReports') ? 'active' : null}}"
                           href="{{url('adminReports')}}" role="tab"><h6>
                                Reports</h6></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-9 mr-auto">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane {{request()->is('adminHome') ? 'active' : null}}"
                     id="{{url('adminHome')}}" role="tabpanel">
                    <main role="main" class="col-md-12 col-lg-12 px-5 card rounded bg-white shadow-sm">
                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h1 class="h2">Visitors</h1>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <div class="btn-group mr-2">
                                    <button class="btn btn-sm btn-outline-secondary">Share</button>
                                    <button class="btn btn-sm btn-outline-secondary">Export</button>
                                </div>
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                    <span data-feather="calendar"></span>
                                    This week
                                </button>
                            </div>
                        </div>
                        <canvas class="my-4 w-100" id="myChart" width="850" height="380"></canvas>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
                        <script>
                            var ctx = document.getElementById("myChart");
                            var myChart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                                    datasets: [{
                                        data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                                        lineTension: 0,
                                        backgroundColor: 'transparent',
                                        borderColor: '#007bff',
                                        borderWidth: 4,
                                        pointBackgroundColor: '#007bff'
                                    }]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: false
                                            }
                                        }]
                                    },
                                    legend: {
                                        display: false,
                                    }
                                }
                            });
                        </script>
                    </main>
                </div>
                <div class="tab-pane {{request()->is('adminProfile') ? 'active' : null}}"
                     id="{{url('adminProfile')}}" role="tabpanel">
                    <div class="col-12 border-light">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                 aria-labelledby="v-pills-home-tab"></div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                 aria-labelledby="v-pills-profile-tab"></div>
                            <div class="col-12">
                                <div class="card rounded bg-white shadow-sm" style="font-family: 'Permanent Marker', cursive;
                        font-family: 'Alegreya', serif;">
                                    <div class="card-body">
                                        <div class="row mt-2">
                                            <div class="col-md-3 ml-auto">
                                                <div class="row">
                                                    <div class="card p-0 shadow-sm ">
                                                        <img src="{{Auth::user()->image ? asset(Auth::user()->image->path): ""}}"
                                                             class="rounded" height="200" width="200">
                                                    </div>
                                                </div>
                                                <div class="row"></div>
                                            </div>
                                            <div class="col-7 mr-auto">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <h5 class="mt-2">username</h5>
                                                    </div>
                                                    <div class="col-8">
                                                        <h5 class="mt-2">{{Auth::user()->username}}</h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <h5 class="mt-2">Email</h5>
                                                    </div>
                                                    <div class="col-8">
                                                        <h5 class="mt-2">{{Auth::user()->email}}</h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <h5 class="mt-2">Gender</h5>
                                                    </div>
                                                    <div class="col-8">
                                                        <h5 class="mt-2">{{Auth::user()->gender->name}}</h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <h5 class="mt-2">Phone</h5>
                                                    </div>
                                                    <div class="col-8">
                                                        <h5 class="mt-2">{{Auth::user()->phone_number}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane {{request()->is('adminSettings') ? 'active' : null}}"
                     id="{{url('adminSettings')}}" role="tabpanel">
                    <div class="col-12 border-light">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="col-12">
                                <div class="card rounded bg-white shadow-sm" style="font-family: 'Permanent Marker', cursive;
                        font-family: 'Alegreya', serif;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 ml-auto">
                                                <div class="row">
                                                    <form action="/DashBoard/uploadAdminImage"
                                                          method="post" id="imageForm"
                                                          enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="profile-img">
                                                                <img width="200" height="200"
                                                                     src=" {{Auth::user()->image ? asset(Auth::user()->image->path): ""}}"/>
                                                                <div class="file btn btn-lg btn-primary">
                                                                    Change Photo<input type="file" id="image"
                                                                                       name="image"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-8 mr-auto">
                                                <form method="POST" action="">
                                                    @csrf
                                                    <div class="form-row">
                                                        <div class="col-3 ml-auto">
                                                            <h5 class="mt-2">First Name</h5>
                                                        </div>
                                                        <div class="col-9 mr-auto">
                                                            <input type="text" class="form-control mt-2" id="firstName"
                                                                   name="first_name"
                                                                   value="{{Auth::user()->first_name}}"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-3 ml-auto">
                                                            <h5 class="mt-2">Last Name</h5>
                                                        </div>
                                                        <div class="col-9 mr-auto">
                                                            <input type="text" class="form-control mt-2" id="lastName"
                                                                   name="last_name"
                                                                   value="{{Auth::user()->last_name}}"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-3 ml-auto">
                                                            <h5 class="mt-2">username</h5>
                                                        </div>
                                                        <div class="col-9 mr-auto">
                                                            <input type="text" class="form-control mt-2" id="userName"
                                                                   name="username" value="{{Auth::user()->username}}"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-3 ml-auto">
                                                            <h5 class="mt-2">Email</h5>
                                                        </div>
                                                        <div class="col-9 mr-auto">
                                                            <input type="email" class="form-control mt-2" id="email"
                                                                   name="email" value="{{Auth::user()->email}}"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-3 ml-auto">
                                                            <h5 class="mt-2">Phone</h5>
                                                        </div>
                                                        <div class="col-9 mr-auto">
                                                            <input type="text" class="form-control mt-2"
                                                                   id="phoneNumber"
                                                                   name="phone_number"
                                                                   value="{{Auth::user()->phone_number}}"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mt-2">
                                                        <div class="col-10 ml-auto"></div>
                                                        <div class="col-2 mr-auto">
                                                            <button class="btn btn-primary rounded" type="submit">
                                                                Submet
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mt-2">
                                                        <div class="col-3 ml-auto"></div>
                                                        <div class="col-10 ml-auto">
                                                            @if (Session::has('error'))
                                                                <div class="alert alert-danger">
                                                                    <p class="m-0">
                                                                        {{Session::get('error')}}
                                                                    </p>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        @include('dashboard.shared.errors')
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane {{request()->is('adminUsers') ? 'active' : null}}"
                     id="{{url('adminUsers')}}" role="tabpanel">
                    <div class="row">
                        @if(count($data)>0)
                            <div class="col-md-12">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <table class="table" style="font-size:18px">
                                            <thead>
                                            <tr class="text-center">
                                                <th scope="col">Id</th>
                                                <th scope="col">Avatar</th>
                                                <th scope="col">username</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Delete</th>
{{--                                                <th scope="col">Status</th>--}}
{{--                                                <th scope="col">Last Activity</th>--}}
                                            </tr>
                                            </thead>
                                            @foreach($data as $user)
                                                <tbody>
                                                <tr class="text-center">
                                                    <th scope="row">{{$user->id}}</th>
                                                    <td>
                                                        <img src="{{$user->image ? asset($user->image->path): ""}}"
                                                             class="rounded-circle" height="50" width="50">
                                                    </td>
                                                    <td>
                                                        <a href="\userprofile\" class="text-dark">
                                                            {{$user->username}}</a>
                                                    </td>
                                                    <td>
                                                        {{$user->email}}
                                                    </td>
                                                    {{--                                                    <td>--}}
                                                    {{--                                                        <span class="badge badge-success rounded-pill">Active</span>--}}
                                                    {{--                                                    </td>--}}
                                                    {{--                                                    <td>2020/1/14 4:30</td>--}}
                                                    <td>
                                                        <span> {{$user->user_type}}</span>
                                                    </td>
                                                    <td>
                                                        <form action="{{ url('/adminUsers',['id'=> $user->id])}}"
                                                              method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <button type="submit" class="btn btn-danger">
                                                                    <i class="fa fa-times"
                                                                       aria-hidden="true"></i>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            @endforeach
                                            <div class="row"></div>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="row"></div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="tab-pane {{request()->is('adminPosts') ? 'active' : null}}"
                 id="{{url('adminPosts')}}" role="tabpanel">
                <div class="col-12 border-light">
                    <div class="row">
                        @if(count($data)>0)
                            <div class="col-md-12">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <table class="table" style="font-size:18px">
                                            <thead>
                                            <tr class="text-center">
                                                <th scope="col">ID</th>
                                                <th scope="col">User ID</th>
                                                <th scope="col">job type</th>
                                                <th scope="col">job</th>
                                                <th scope="col">Details</th>
                                                <th scope="col">Delete</th>
                                                <th scope="col">Publish</th>
                                            </tr>
                                            </thead>
                                            @foreach($data as $newPost)
                                                <tbody>
                                                <tr class="text-center">
                                                    <form action="{{ url('/adminPosts',['id'=> $newPost->id])}}"
                                                          method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <th scope="row">{{$newPost->id}}</th>
                                                        <td>{{$newPost->user_id}}</td>
                                                        <td>{{$newPost->type}}</td>
                                                        <td>{{$newPost->job_title}}</td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <button type="button" class="btn btn-info">Go</button>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <button type="submit" class="btn btn-danger"><i
                                                                            class="fa fa-times"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </form>
                                                    <td>
                                                        <div class="btn-group" role="group"
                                                             aria-label="Basic example">
                                                            <form action="" method="POST">
                                                                @csrf
                                                                <input value="true" name="published" hidden/>
                                                                <button type="submit" class="btn btn-success"><i
                                                                            class="fa fa-plus"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            @endforeach

                                        </table>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="row"></div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="tab-pane {{request()->is('feedbacks') ? 'active' : null}}"
                 id="{{url('feedbacks')}}" role="tabpanel">
                <div class="row">
                    @if(count($data)>0)
                        <div class="col-md-12">
                            <div class="card shadow-sm">
                                <div class="card-body">

                                    <table class="table" style="font-size:18px">
                                        <thead>
                                        <tr class="text-center">
                                            <th scope="col">ID</th>
                                            <th scope="col">User ID</th>
                                            <th scope="col">Message</th>
                                            <th scope="col">Delete</th>
                                            <th scope="col">Publish</th>
                                        </tr>
                                        </thead>
                                        @foreach($data as $feedback)
                                            <tbody>
                                            <tr class="text-center">
                                                <form action="{{ url('/feedbacks',['id'=> $feedback->id])}}"
                                                      method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <th scope="row">{{$feedback->id}}</th>
                                                    <td>{{$feedback->user_id}}</td>
                                                    <td>{{$feedback->message}}</td>
                                                    <td>
                                                        <div class="btn-group" role="group"
                                                             aria-label="Basic example">
                                                            <button type="submit" class="btn btn-danger">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </form>
                                                <td>
                                                    <div class="btn-group" role="group"
                                                         aria-label="Basic example">
                                                        <form action="{{ url('/feedbacks',['id'=> $feedback->id])}}"
                                                              method="POST">
                                                            @csrf
                                                            <input value="1" name="published" hidden/>
                                                            <button type="submit" class="btn btn-success">
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row"></div>
                    @endif
                </div>
            </div>

            <div class="tab-pane {{request()->is('adminReports') ? 'active' : null}}"
                 id="{{url('adminReports')}}" role="tabpanel">
                <div class="row">
                    @if(count($data)>0)
                        <div class="col-md-12">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <table class="table" style="font-size:18px">
                                        <thead>
                                        <tr class="text-center">
                                            <th scope="col">ID</th>
                                            <th scope="col">User ID</th>
{{--                                            <th scope="col">Ban User</th>--}}
                                            <th scope="col">Ban User</th>
                                            <th scope="col">Permit User</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                        </thead>
                                        @foreach($data as $report)
                                            <tbody>
                                            <tr class="text-center">
                                                <th scope="row">{{$report->id}}</th>
                                                <td>{{$report->user_id}}</td>
                                                <td>
                                                    <form action="{{ url('/adminReports',['bid'=> $report->user_id])}}"
                                                          method="POST">
                                                        @csrf
                                                        <div class="btn-group" role="group"
                                                             aria-label="Basic example">
                                                            <input name="is_banned"  value="1" hidden/>
                                                            <button type="submit" class="btn btn-warning">
                                                                <i class="fa fa-ban"
                                                                   aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="{{ url('/adminReports',['id'=> $report->user_id])}}"
                                                          method="POST">
                                                        @csrf
                                                        <div class="btn-group" role="group"
                                                             aria-label="Basic example">
                                                            <input name="is_banned" value="0" hidden/>
                                                            <button type="submit" class="btn btn-info">
                                                                <i class="fa fa-check"
                                                                   aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </td>

                                                <td>
                                                    <form action="{{ url('/adminReports',['id'=> $report->id])}}"
                                                          method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <div class="btn-group" role="group"
                                                             aria-label="Basic example">
                                                            {{--                                                            <input name="is_banned" value="1"/>--}}
                                                            <button type="submit" class="btn btn-danger">
                                                                <i class="fa fa-times"
                                                                   aria-hidden="true"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row"></div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
@section('more-js')
@endsection