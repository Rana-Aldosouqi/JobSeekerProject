@extends('user.shared.template')
@section('title')
    Contact Us
@endsection
@section('content')
    <div class="container">
        <div class="row mt-5"></div>
        <div class="row mt-1">
            <div class="col-2"></div>
            <div class="card bg-light shadow-sm mt-4 col-8"
                 style="font-family: 'Permanent Marker', cursive; font-family: 'Alegreya', serif;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-center">Contact Us</h2>
                            </div>
                        </div>
                       <form action="" method="POST">
                           @csrf
                           @if(Auth::check())
                               <div class="row">
                                   <div class="col-6 pt-3 rounded">
                                       <div class="row">
                                           <div class="col-12">
                                               <div class="form-group">
                                                   <input type="text" id="disabledTextInput" class="form-control"
                                                      value="{{Auth::user()->username}}"  placeholder="name" name="name">
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-6 pt-3 rounded">
                                       <div class="row">
                                           <div class="col-12">
                                               <div class="form-group">
                                                   <input type="email" id="disabledInput" class="form-control"
                                                          value="{{Auth::user()->email}}" placeholder="email" name="email">
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           @else
                               <div class="row">
                                   <div class="col-6 pt-3 rounded">
                                       <div class="row">
                                           <div class="col-12">
                                               <div class="form-group">
                                                   <input type="text"  class="form-control"
                                                          placeholder="name" name="name">
{{--                                                   <input value="false" name="published" hidden/>--}}
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-6 pt-3 rounded">
                                       <div class="row">
                                           <div class="col-12">
                                               <div class="form-group">
                                                   <input type="email" id="disabledInput" class="form-control"
                                                          placeholder="email" name="email">
                                               </div>

                                           </div>
                                       </div>
                                   </div>
                               </div>
                           @endif
                           <div class="row">
                               <div class="col-12 mt-2">
                                   <textarea class="form-control" id="validationTextarea" rows="5"
                                                 name="message" placeholder="Required">

                                   </textarea>
                               </div>
                               <div class="container mt-3 col-2">
                                   <button type="submit" class="btn btn-primary btn-block"><b>Submet</b>
                                   </button>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-12 mt-2">
                                   @if (Session::has('error'))
                                       <div class="alert alert-danger">
                                           <p class="m-0">
                                               {{Session::get('error')}}
                                           </p>
                                       </div>
                                   @endif
                                   @include('user.shared.errors')
                               </div>
                           </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection