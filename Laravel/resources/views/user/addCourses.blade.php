@extends('user.shared.template')
@section('title')
    Add Courses
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-7 mx-auto">

            <form action="" method="POST" class="card m-5 p-3  rounded bg-light shadow" style="font-family: 'Permanent Marker', cursive;
                        font-family: 'Alegreya', serif;" >
                @csrf
                <div class="mx-auto" style="width: 200px;">
                    <h1> <u>Add course</u> </h1>
                </div>
                </br>
                <div class="container col-12 mt-3">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 ml-4"><h5>Course name</h5></label>

                             <div class="col-sm-8 ">
                                 <input type="name" class="form-control" id="inputEmail3" name="course">
                             </div>


                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 ml-4"><h5>Specialization</h5></label>
                        <div class="col-sm-8 ">
                            <select class=" form-control" name="specialization"  >

                                <option selected value="min"></option>
                                <option value="1">Engineering</option>
                                <option value="2">medicine</option>
                                <option value="3">Law</option>
                                <option value="2">Teaching</option>
                                <option value="3">Banks</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 ml-4"><h5>Course Level</h5></label>
                        <div class="col-sm-8 ">
                            <select class=" form-control " name="course_level"  >

                                <option selected value="min"></option>
                                <option value="1">Beginner</option>
                                <option value="2">medium</option>
                                <option value="3">professional</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 ml-4"><h5>Language</h5></label>
                        <div class="col-sm-8 ">
                            <select class=" form-control  " placeholder="min" name=""language>

                                <option selected value="min"></option>
                                <option value="1">Arabic</option>
                                <option value="2">English</option>
                                <option value="3">French</option>
                                <option value="4">Japan</option>
                                <option value="5">Italy</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 ml-4"><h5>Date</h5></label>

                        <div class="col-sm-4 ">
                            <input type="text" class="form-control" placeholder="From"id="inputPassword3" name="start_date" >
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  placeholder="To"id="inputPassword3" name="end_date"  >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 ml-4"><h5>Time in hours</h5></label>

                        <div class="col-sm-8 ">
                            <input type="name" class="form-control" id="inputEmail3" name="time">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 ml-4"><h5>Price</h5></label>

                        <div class="col-sm-8 ">
                            <input type="name" class="form-control" id="inputEmail3" name="salary">
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 ml-4"><h5>Phone number</h5></label>
                        <div class="col-sm-8 ">
                            <input type="name" class="form-control" id="inputEmail3" name="phone">
                        </div>
                    </div>

                    <div class=" container col-3 ">
                        <button type="submit" class="btn btn-primary btn-md btn-block ">POST</button>
                    </div>
                </div>
            </form>

        </div>

    </div>
@endsection
