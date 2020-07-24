@extends('user.shared.template')
@section('content')
    <head>

        <title>{{env('APP_NAME','job seeker')}}</title>
    </head>



    <div class="row">
    <div class="col-sm-7 mx-auto">

        <form action="" method="POST" class="card m-5 p-3  rounded bg-light shadow "  style="font-family: 'Permanent Marker', cursive;
                        font-family: 'Alegreya', serif;" >
            @csrf
            <div class="mx-auto" style="width: 300px;">
                <h1><u> ADD Training Job </u></h1>
            </div>

            </br>
            <div class="container">@include('user.massege')</div>
            <div class="container col-12 mt-3">

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 ml-4"><h5>Job Name :</h5></label>
                    <div class="col-sm-8 ">
                        <input name="job_title" class="form-control" id="inputPassword3" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 ml-4"><h5>Company Name :</h5></label>
                    <div class="col-sm-8 ">
                        <input name="company" class="form-control" id="inputPassword3" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Specialization" class="col-sm-3 ml-4"><h5>Specialization :</h5></label>
                    <div class="col-sm-8 ">
                        <select  name="type" class=" form-control  "  >

                            <option selected value=" 1">Business</option>
                            <option value="2">medical</option>
                            <option value="3">Teaching</option>
                            <option value="4">Engineering</option>
                            <option value="5">Programming</option>
                            <option value="6">Art</option>
                            <option value="7">Law</option>
                            <option value="8">others</option>

                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="type" class="col-sm-3 ml-4"><h5>Career Level :</h5></label>
                    <div class="col-sm-8 ">
                        <select  name="career_level" class=" form-control  "  >

                            <option selected value=" 1">Student</option>
                            <option value="2">Senior</option>
                            <option value="3">graduate</option>
                            <option value="4">Manger</option>
                            <option value="5">others</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="city" class=" col-sm-3 ml-4 col-form-label"><h5>City :</h5></label>
                    <div class="col-sm-8 ">
                    <select name="city" class="form-control col-md-12">
                        <option id="showMans" selected value=" 1">Mansoura</option>
                        <option id="showCairo" value="2">Cairo</option>
                        <option value="3">Alxandria</option>
                        <option value="4">Dommitta</option>
                        <option value="5">others</option>
                    </select>
                </div>
                </div>


                <div class="form-group row">
                    <label for="vacancies" class=" col-sm-3 ml-4 col-form-label"><h5>Vacancies :</h5></label>
                    <div class="col-sm-8 ">
                        <select name="vacancies" class="form-control col-md-12">
                            <option value="1 ">1 </option>
                            <option value="2">2</option>
                            <option value="3 ">3 </option>
                            <option value="4 ">4 </option>
                            <option value="5 ">5 </option>
                            <option value="6">6</option>
                            <option value="7 ">7 </option>
                            <option value="8 ">8 </option>
                            <option value="9">9 </option>
                            <option value="10">10 </option>
                            <option value="more">more </option>
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="date_start_at" class="col-sm-3 ml-4"><h5>Date :</h5></label>
                    <div class="col-sm-4 ">
                        <input type="date" id="start" name="date_start_at"for="date_start_at" class=" form-control col-sm-12 " placeholder="start" >
                    </div>

                    <div class="col-sm-4 ">
                        <input type="date" id="start" name="date_end_at" for="date_end_at" class=" form-control col-sm-12 " placeholder="End" >
                    </div>
                </div>


                <div class="form-group row">
                    <label  for="inputEmail3" class="col-sm-3 ml-4"><h5>Training Time :</h5></label>
                    <div class="col-sm-4 ">
                        <select name="time_start_at" for="time_start_at" class=" form-control col-sm-12 " placeholder="min" >

                            <option selected value="min">from</option>
                            <option value="8 ">8 </option>
                            <option value="9 ">9 </option>
                            <option value="10 ">10 </option>
                            <option value="11 ">11 </option>
                            <option value="12">12 </option>
                            <option value="13 ">13 </option>
                            <option value="14">14 </option>
                            <option value="15">15 </option>
                        </select>
                    </div>
                        <div class="col-sm-4 ">
                        <div class="col-1  "></div>
                        <select name="time_end_at" for="time_end_at" class=" form-control col-sm-12" >
                            <option placeholder="min" selected>to</option>
                            <option value="12 ">12 </option>
                            <option value="13">13</option>
                            <option value="14 ">14 </option>
                            <option value="15 ">15 </option>
                            <option value="16 ">16 </option>
                            <option value="17">17</option>
                            <option value="18 ">18 </option>
                            <option value="19 ">19 </option>
                            <option value="20">20 </option>

                        </select>
                        </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-3 ml-4"><h5>Salary (bounds) :</h5></label>
                    <div class="col-sm-4 ">
                        <select name="min_salary" for="min_salary" class=" form-control col-sm-12 " placeholder="min" >

                            <option selected value="min">from</option>
                            <option value="100 ">100 </option>
                            <option value="200">200</option>
                            <option value="300 ">300 </option>
                            <option value="400 ">400 </option>
                            <option value="500 ">500 </option>
                            <option value="600">600</option>
                            <option value="700 ">700 </option>
                            <option value="800 ">800 </option>
                            <option value="900">900 </option>
                            <option value="1000">1000 </option>
                        </select>
                    </div>
                    <div class="col-sm-4 ">
                        <div class="col-1  "></div>
                        <select name="max_salary" for="max_salary" class=" form-control col-sm-12" >
                            <option placeholder="max" selected>to</option>
                            <option value="100 ">100 </option>
                            <option value="200">200</option>
                            <option value="300 ">300 </option>
                            <option value="400 ">400 </option>
                            <option value="500 ">500 </option>
                            <option value="600">600</option>
                            <option value="700 ">700 </option>
                            <option value="800 ">800 </option>
                            <option value="900">900 </option>
                            <option value="1000">1000 </option>
                            <option value="2000">2000</option>
                            <option value="3000 ">3000 </option>
                            <option value="4000 ">4000 </option>
                            <option value="5000 ">5000 </option>
                            <option value="6000">6000</option>
                            <option value="7000 ">7000 </option>
                            <option value="8000 ">8000 </option>
                            <option value="more">more </option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="others" class="col-sm-3 ml-4"><h5>Requirements :</h5></label>
                    <div class="col-sm-8 ">
                        <textarea for="other" type="form-control" name="other" class=" form-control col-sm-12 "  id="inputEmail3"></textarea>
                </div>
                </div>
                <div class=" container col-3 ">
                    <button  class="btn btn-primary btn-md btn-block ">POST</button>
                </div>

            </div>
        </form>

    </div>

</div>
@endsection
