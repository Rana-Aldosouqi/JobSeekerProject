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
                                <form action="{{route('storeTest')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_postID" value="{{$post_id}}">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="testName">Test Name:</label>
                                        <input type="text" id="testName" name="testName">
                                    </div>
                                    <ol id="ol">
                                        <li id="li">
                                            <div class="row" style="margin-inline-start: auto;">
                                                <div class="col-sm">
                                                    <div class="row">
                                                        <input type="text" name="question[]" class=" form-control col-sm-9"
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
                                                                        <input type="text" name="Ans1[]" placeholder="Choice 1"
                                                                               class="col-sm-9">
                                                                        <input type="hidden" name="correct1[0]" value="0">
                                                                        <input type="checkbox"  name="correct1[0]"  id=""
                                                                               class="col-sm-2">
                                                                    </li>
                                                                    <br>
                                                                    <div class="col-sm"></div>
                                                                    <li style="list-style: lower-alpha;">
                                                                        <input type="text" name="Ans2[]" placeholder="Choice 2"
                                                                               class="col-sm-9">
                                                                        <input type="hidden" name="correct2[0]" value="0">
                                                                        <input type="checkbox"      name="correct2[0]" id=""
                                                                               class="col-sm-2">
                                                                    </li>
                                                                    <br>
                                                                    <div class="col-sm"></div>
                                                                    <li style="list-style: lower-alpha;">
                                                                        <input type="text" name="Ans3[]" placeholder="Choice 3"
                                                                               class="col-sm-9">
                                                                        <input type="hidden" name="correct3[0]" value="0">
                                                                        <input type="checkbox"    name="correct3[0]" id=""
                                                                               class="col-sm-2">
                                                                    </li>
                                                                    <br>
                                                                    <div class="col-sm"></div>
                                                                    <li style="list-style: lower-alpha;">
                                                                        <input type="text" name="Ans4[]" placeholder="Choice 4"
                                                                               class="col-sm-9">
                                                                        <input type="hidden" name="correct4[0]" value="0">
                                                                        <input type="checkbox"     name="correct4[0]" id=""
                                                                               class="col-sm-2">
                                                                    </li>
                                                                    <div class="col-sm"></div>
                                                                </ol>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <hr>
                                        </li>
                                    </ol>
                                    </br>

                                    <br>
                                    <div class="col-sm-9">
                                        <div class="container">
                                            <div class="row ml-5">
                                                <div class="col-sm-2"></div>
                                                <button type="button" id="appendButton"
                                                        class="btn btn-primary btn-md btn-block col-sm-3">Add
                                                    Question</button>
                                                <div class="col-sm-2"></div>
                                                <button type="submit"
                                                   class="btn btn-success btn-md btn-block col-sm-3 ">Submit</button>
                                                <div class="col-sm-2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    </br>

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
@section('more_js')
    <script>
        let indexNext = 1;
        $('#appendButton').click(e=>{
            e.preventDefault();

           $('#ol').append('                                        <li id="li">\n' +
               '                                            <div class="row" style="margin-inline-start: auto;">\n' +
               '                                                <div class="col-sm">\n' +
               '                                                    <div class="row">\n' +
               '                                                        <input type="text" name="question[]" class=" form-control col-sm-9"\n' +
               '                                                               id="inputEmail3" placeholder="Enter Question">\n' +
               '                                                        <label for="mark" class="col-sm-3 text-center">Mark The Correct\n' +
               '                                                            Answer</label>\n' +
               '                                                    </div>\n' +
               '                                                    <br>\n' +
               '                                                    <div class="row">\n' +
               '                                                        <div class="col-sm">\n' +
               '                                                            <div class="form-group">\n' +
               '                                                                <ol class="">\n' +
               '                                                                    <li style="list-style: lower-alpha;">\n' +
               '                                                                        <input type="text" name="Ans1[]" placeholder="Choice 1"\n' +
               '                                                                               class="col-sm-9">\n' +
               '                                                                        <input type="hidden" name="correct1['+indexNext+']" value="0">\n' +
               '                                                                        <input type="checkbox"  name="correct1['+indexNext+']"  id=""\n' +
               '                                                                               class="col-sm-2">\n' +
               '                                                                    </li>\n' +
               '                                                                    <br>\n' +
               '                                                                    <div class="col-sm"></div>\n' +
               '                                                                    <li style="list-style: lower-alpha;">\n' +
               '                                                                        <input type="text" name="Ans2[]" placeholder="Choice 2"\n' +
               '                                                                               class="col-sm-9">\n' +
               '                                                                        <input type="hidden" name="correct2['+indexNext+']" value="0">\n' +
               '                                                                        <input type="checkbox"      name="correct2['+indexNext+']" id=""\n' +
               '                                                                               class="col-sm-2">\n' +
               '                                                                    </li>\n' +
               '                                                                    <br>\n' +
               '                                                                    <div class="col-sm"></div>\n' +
               '                                                                    <li style="list-style: lower-alpha;">\n' +
               '                                                                        <input type="text" name="Ans3[]" placeholder="Choice 3"\n' +
               '                                                                               class="col-sm-9">\n' +
               '                                                                        <input type="hidden" name="correct3['+indexNext+']" value="0">\n' +
               '                                                                        <input type="checkbox"     name="correct3['+indexNext+']" id=""\n' +
               '                                                                               class="col-sm-2">\n' +
               '                                                                    </li>\n' +
               '                                                                    <br>\n' +
               '                                                                    <div class="col-sm"></div>\n' +
               '                                                                    <li style="list-style: lower-alpha;">\n' +
               '                                                                        <input type="text" name="Ans4[]" placeholder="Choice 4"\n' +
               '                                                                               class="col-sm-9">\n' +
               '                                                                        <input type="hidden" name="correct4['+indexNext+']" value="0">\n' +
               '                                                                        <input type="checkbox"    name="correct4['+indexNext+']" id=""\n' +
               '                                                                               class="col-sm-2">\n' +
               '                                                                    </li>\n' +
               '                                                                    <div class="col-sm"></div>\n' +
               '                                                                </ol>\n' +
               '\n' +
               '                                                            </div>\n' +
               '\n' +
               '                                                        </div>\n' +
               '                                                    </div>\n' +
               '                                                </div>\n' +
               '                                            </div>\n' +
               '                                            <br>\n' +
               '                                            <hr>\n' +
               '                                        </li>\n')
            indexNext += 1;
        })
    </script>
@endsection
