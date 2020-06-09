@extends('user.shared.template')

@section('title')
    Test Questions
@endsection

@section('content')
    <div class="container container-fluid  mt-5">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 card rounded bg-light shadow " style="font-family: 'Permanent Marker', cursive;
                        font-family: 'Alegreya', serif;">
                <h1 id="title" class="text-center text-darkblue mt-3"><b><u>IQ Test</u></b></h1>

                <p class="text-center text-blue" style="color:blue"><b>Please Answer to the following few Questions to
                        be Qulified to The Interview</b></p>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="container">
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
                                                            <input type="radio" class="col-sm-1">
                                                            <label><b>Ans1</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="radio" class="col-sm-1">
                                                            <label><b>Ans2</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="radio" class="col-sm-1">
                                                            <label><b>Ans2</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="radio" class="col-sm-1">
                                                            <label><b>Ans2</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    </br>

                                    <li>
                                        <div class="row">
                                            <div class="col-sm">
                                                <p class="col-sm " id="inputEmail3">First Question?</p>
                                                <br>
                                                <div class="form-group">
                                                    <ol>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="radio" class="col-sm-1">
                                                            <label><b>Ans1</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="radio" class="col-sm-1">
                                                            <label><b>Ans2</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="radio" class="col-sm-1">
                                                            <label><b>Ans2</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="radio" class="col-sm-1">
                                                            <label><b>Ans2</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    </br>


                                    <li>
                                        <div class="row">
                                            <div class="col-sm">
                                                <p class="col-sm " id="inputEmail3">Second Question?</p>
                                                <br>
                                                <div class="form-group">
                                                    <ol>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="radio" class="col-sm-1">
                                                            <label><b>Ans1</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="radio" class="col-sm-1">
                                                            <label><b>Ans2</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="radio" class="col-sm-1">
                                                            <label><b>Ans2</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="radio" class="col-sm-1">
                                                            <label><b>Ans2</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    </br>

                                    <li>
                                        <div class="row">
                                            <div class="col-sm">
                                                <p class="col-sm " id="inputEmail3">Third Question?</p>
                                                <br>
                                                <div class="form-group">
                                                    <ol>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="radio" class="col-sm-1">
                                                            <label><b>Ans1</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="radio" class="col-sm-1">
                                                            <label><b>Ans2</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="radio" class="col-sm-1">
                                                            <label><b>Ans2</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="radio" class="col-sm-1">
                                                            <label><b>Ans2</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    </br>

                                    <li>
                                        <div class="row">
                                            <div class="col-sm">
                                                <p class="col-sm " id="inputEmail3">Fourth Question?</p>
                                                <br>
                                                <div class="form-group">
                                                    <ol>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="radio" class="col-sm-1">
                                                            <label><b>Ans1</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="radio" class="col-sm-1">
                                                            <label><b>Ans2</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="radio" class="col-sm-1">
                                                            <label><b>Ans2</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                        <li style="list-style: lower-alpha;">
                                                            <input type="radio" class="col-sm-1">
                                                            <label><b>Ans2</b></label>
                                                        </li>
                                                        <div class="col-sm"></div>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <div class="container">
                                        <div class="row ml-5">

                                            <div class="col-sm-4"></div>
                                            <button type="button"
                                                    class="btn btn-success btn-md btn-block col-sm-2 ">Submit</button>
                                            <div class="col-sm-1"></div>
                                        </div>
                                    </div>
                                    </br>
                                </ol>
                            </form>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </div>
@endsection
