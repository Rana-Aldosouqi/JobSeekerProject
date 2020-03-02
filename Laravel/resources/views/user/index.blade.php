@extends('user.shared.template')
@section('title')
    Post job
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-7 mx-auto">

            <form action="" method="POST"  class="card m-5 p-3  rounded bg-light shadow " style="font-family: 'Permanent Marker', cursive;
                        font-family: 'Alegreya', serif;" >
                @csrf

                <h1 id="title" class="text-center "><b><u>Company Form</u></b></h1>
                <br>


                <div class="form-group row  mt-3">
                    <label for="job_title" class="col-sm-4 col-form-label"><h5>Jop Title:</h5></label>
                    <input name="job_title" type="text" class="form-control col-sm-7 " id="usr">
                </div>


                <div class="form-group row">
                    <label for="category" class="col-sm-4 col-form-label"><h5>Category:</h5></label>
                    <select name="category" class=" form-control col-sm-7 "  >

                        <option value="1">Engineering</option>
                        <option value="2">Medicine</option>
                        <option value="3">Business</option>
                        <option value="4">Design</option>
                        <option value="5">Other</option>

                    </select>
                </div>

                <!-- Company Name-->

                <div class="form-group row">
                    <label for="experience" class="col-sm-4 col-form-label"><h5>Experience Needed:</h5></label>
                    <input name="experience" type="text" class="form-control col-sm-7 " id="usr">
                </div>






                <div class="form-group row">
                    <label for="career_level" class="col-sm-4 col-form-label"><h5>Career Level:</h5></label>
                    <select name="career_level" class=" form-control col-sm-7 "  >

                        <option value="1">Senior</option>
                        <option value="2">Student</option>
                        <option value="3">Manger</option>

                    </select>
                </div>


                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label"><h5>Job Type:</h5></label>
                    <div class="form-check-inline">
                        <label class="form-check-label ml-2" for="radio1">
                            <input type="radio" class="form-check-input" id="radio1" name="JobType" value="1" checked>Full Time
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="radio2" name="JobType" value="2">Part Time
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input"  id="radio2" name="JobType"  value="3" >FreeLancer
                        </label>
                    </div>

                </div>


                <!-- JOB Requirments-->
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label"><h5>Languages:</h5></label>


                        <select multiple class="form-control col-sm-3 col-sm-7" id="sel2" name="language">
                            <option  value="1">English</option>
                            <option value="2">Japanese</option>
                            <option value="3">French</option>
                            <option value="4">Spanish</option>
                            <option value="5">Germany</option>
                        </select>






                </div>
                <!-- Company Information-->
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label"><h5>Salary:</h5></label>


                    <input type="text" name="minsalary" class="form-control col-sm-3" id="usr" placeholder="min" >
                    <div class="col-1  "></div>
                    <input type="text" name="maxsalary" class="form-control col-sm-3" id="usr" placeholder="max" >


                </div>


                <div class="form-group row">
                    <label for="inputEmail3"  class="col-sm-4 col-form-label"><h5>Vacancies:</h5></label>
                    <select class="custom-select col-md-7" name="vacancies">
                        <option value="1">one</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">More</option>
                    </select>
                </div>
                <!--Number of reqired Empolyees-->

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label"><h5>Age:</h5></label>


                    <input type="text" name="minage" class="form-control col-sm-3" id="usr" placeholder="min" >
                    <div class="col-1  "></div>
                    <input type="text" name="maxage" class="form-control col-sm-3" id="usr" placeholder="max" >


                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label"><h5>Other Requirements:</h5></label>
                    <Textarea type="text" name="about" class=" form-control col-sm-7 "  id="inputEmail3"></textarea>
                </div>


                <!--Buttons-->
                <div class="row">

                    <div class="container mt-4 mb-3 col-3 h6">
                        <button type="submit" name="submit" value="add" class="btn btn-primary btn-md btn-block ">Post</button>
                    </div>
                </div>
                <div class="col-sm-1"></div>
            </form>
        </div>
    </div>
@endsection
