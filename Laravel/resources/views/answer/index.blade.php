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
                <hr>
                <div class="row">
                    <div class="col">
                        <div class="container">
                            @if($percent != -1)
                                <div class="alert alert-info">
                                    <ul>
                                        <li style="font-size: 2rem;margin-left: 1rem">{{ 'Your result is: '.$percent. ' %' }}</li>
                                    </ul>
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li style="font-size: 2rem;margin-left: 1rem">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{route('storeResult')}}" method="POST">
                                <input type="hidden" name="_testID" value="{{$test->id}}">
                                @csrf
                                <h1 style="text-align: center;padding: 1rem 0">Test name: {{$test->name}}</h1>
                                <ol>
                                    @foreach($test->questions as $q)
                                        <?php
                                        $outerLoop = $loop->index + 1
                                        ?>
                                        <li>
                                            <div class="row">
                                                <div class="col-sm">
                                                    <label class=" col-sm " id="inputEmail3">{{$q->questionHeader}}</label>
                                                    <br>
                                                    <div class="form-group">
                                                        <ol>
                                                            @foreach(unserialize($q->answers) as $question=>$rAnswer)
                                                                <li style="list-style: lower-alpha;">
                                                                    <input type="checkbox" value="{{$question}}" class="col-sm-1" name="q{{$outerLoop}}[]">
                                                                    <label><b>{{$question}}</b></label>
                                                                </li>
                                                                <div class="col-sm"></div>
                                                            @endforeach

                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        </br>
                                    @endforeach

                                    <div class="container">
                                        <div class="row ml-5">

                                            <div class="col-sm-4"></div>
                                            <button type="submit"
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
