@extends('user.shared.template')
@section('content')
    <div class="container" style="font-family: 'Permanent Marker', cursive;font-family: 'Alegreya', serif;">
        <div class="row"></div>
        <div class="row"></div>
        <div class="row mb-3"></div>
        <div class="row mb-3">
            <div class="col-8 offset-2 offset-md-2 mb-0 position-relative" >
                <div class="card mt-5 shadow rounded bg-light">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="text-center mb-2 mt-2"><u>Contact Us</u></h1>
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
                                                   <input type="text" id="disabledTextInput" class="form-control"
                                                          placeholder="name" name="name">
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
                               <div class="col-12">
                                   <div class="mb-3">
                                       <label for="validationTextarea"></label>
                                       <textarea class="form-control is-invalid" id="validationTextarea" rows="5"
                                                 name="message" placeholder="Required" required></textarea>
                                       <div class="invalid-feedback">
                                           <h6> Please enter Your Feedback.</h6>
                                       </div>
                                   </div>
                               </div>
                               <div class="container mt-3 col-2">
                                   <button type="submit" class="btn btn-primary btn-block"><b>Submet</b>
                                   </button>
                               </div>
                           </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection