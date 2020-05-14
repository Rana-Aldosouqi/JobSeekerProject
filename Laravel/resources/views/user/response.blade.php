@extends('user.shared.template')
@section('title')
    Job Request
@endsection
@section('content')
    <div class="container  ">

        <div class="row  ">

            <div class="col-12 text-center  ">

                <div class="card" style="margin: 0 auto; float: none;  margin-bottom:10px; margin-top:80px; width: 70%;" >

                    <div class="card-body text-center">
                        <img class="card-img-top" src="{{asset('/assets/images/undraw_attached_file_n4wm.png')}}" alt="Card image cap" style="width: 70%;" >
                        <h4 class="card-text">Your Request has been submitted</h4>
                        <a href="/Alljobs">Browse More Jobs</a>
                    </div>
                </div>
            </div>

        </div>


    </div>


@endsection
