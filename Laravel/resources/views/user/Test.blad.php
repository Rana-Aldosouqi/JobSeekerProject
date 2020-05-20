@extends('user.shared.template')
@section('title')
Test Questions
@endsection
@section('content')
<div class="container container-fluid  mt-5">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10 card card-default rounded bg-light shadow " style="font-family: 'Permanent Marker', cursive;
                        font-family: 'Alegreya', serif;">
            <div class="card-header text-center text-darkblue mt-3">
                <h1 id="title" class="text-center text-darkblue mt-3"><b><u>IQ Test</u></b></h1>

                <p class="text-center text-blue" style="color:blue"><b>Please Answer to the following few Questions to
                        be Qulified to The Interview</b></p>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="container">
                        <div class="card-body">
                            <form action="store-User_ans" method="POST">
                                <ol>
                                    <li>
                                        <div class="row">
                                            <div class="col-sm">
                                                <label class=" col-sm " id="inputEmail3">First Question?</label>
                                                <br>
                                                <div class="form-group">
                                                    <ol>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="checkbox" class="col-sm-1">
                                                            <label><b>Ans1</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="checkbox" class="col-sm-1">
                                                            <label><b>Ans2</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="checkbox" class="col-sm-1">
                                                            <label><b>Ans3</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="checkbox" class="col-sm-1">
                                                            <label><b>Ans4</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    </br>

                                    <div class="container">
                                        <div class="row ml-5">
                                            <div class="col-sm-4"></div>
                                            <button type="button"
                                                    class="btn btn-success btn-md btn-block col-sm-2 ">Submit
                                            </button>
                                            <div class="col-sm-6"></div>
                                        </div>
                                    </div>
                                    </br>
                                </ol>
                            </form>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
</div>
@endsection
