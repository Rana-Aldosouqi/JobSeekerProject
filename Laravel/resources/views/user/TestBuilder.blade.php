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
                    <h1 id="title" class=""><b><u>Build Up Your Test</u></b></h1>
                </div>
                <br>

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="container">
                                <form action="/create_test" method="POST">
                                    @csrf
                                    <ol>
                                        <li>
                                            <div class="row" style="margin-inline-start: auto;">
                                                <div class="col-sm">
                                                    <div class="row">
                                                        <input type="text" name="question" class=" form-control col-sm-9"
                                                               id="inputEmail3" placeholder="Enter Question">
                                                        <label for="mark" class="col-sm-3 text-center">Mark The Correct
                                                            Answer</label>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <div class="form-group">
                                                                <ol class="">
                                                                    <li style="list-style: lower-alpha;">
                                                                        <input type="text" name="Ans1" placeholder="Choice 1"
                                                                               class="col-sm-9">
                                                                        <input type="checkbox" name="correct1" id=""
                                                                               class="col-sm-2">
                                                                    </li>
                                                                    <br>
                                                                    <div class="col-sm"></div>
                                                                    <li style="list-style: lower-alpha;">
                                                                        <input type="text" name="Ans2" placeholder="Choice 2"
                                                                               class="col-sm-9">
                                                                        <input type="checkbox" name="correct2" id=""
                                                                               class="col-sm-2">
                                                                    </li>
                                                                    <br>
                                                                    <div class="col-sm"></div>
                                                                    <li style="list-style: lower-alpha;">
                                                                        <input type="text" name="Ans3" placeholder="Choice 3"
                                                                               class="col-sm-9">
                                                                        <input type="checkbox" name="correct3" id=""
                                                                               class="col-sm-2">
                                                                    </li>
                                                                    <br>
                                                                    <div class="col-sm"></div>
                                                                    <li style="list-style: lower-alpha;">
                                                                        <input type="text" name="Ans4" placeholder="Choice 4"
                                                                               class="col-sm-9">
                                                                        <input type="checkbox" name="correct4" id=""
                                                                               class="col-sm-2">
                                                                    </li>
                                                                    <div class="col-sm"></div>
                                                                </ol>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>
                                        </br>

                                        <br>
                                        <div class="col-sm-9">
                                            <div class="container">
                                                <div class="row ml-5">
                                                    <div class="col-sm-2"></div>
                                                    <button type="button"
                                                            class="btn btn-primary btn-md btn-block col-sm-3">Add
                                                        Question</button>
                                                    <div class="col-sm-2"></div>
                                                    <a type="submit"
                                                            class="btn btn-success btn-md btn-block col-sm-3 ">Submit</a>
                                                    <div class="col-sm-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        </br>
                                    </ol>
                                </form>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </div>
    </div>
@endsection
