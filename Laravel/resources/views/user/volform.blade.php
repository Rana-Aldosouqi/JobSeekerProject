@extends('user.shared.template')
@section('content')
<head>
    <title>{{env('APP_NAME','job seeker')}}</title>

</head>




	<body>
<div class="row">
  <div class="col-sm-8 mx-auto">

<form action="" method="POST" class="card m-5 p-3  rounded bg-light shadow" style="font-family: 'Permanent Marker', cursive;
                        font-family: 'Alegreya', serif;" >
    @csrf
<div class="mx-auto" style="width: 350px;">
 <h1> <u>Add Volunteer Job</u> </h1>
</div>
</br>
    <div class="container">@include('user.massege')</div>
<div class="container col-12 mt-3">

  <div class="form-group row">
    <label for="job_title" class="col-sm-3 ml-5"><h5>Job Title:</h5></label>

      <input  name="job_title" type="text" class="form-control col-sm-7" id="usr" >

  </div>

    <div class="form-group row">
        <label for="company" class="col-sm-3 ml-5"><h5>Company name:</h5></label>

        <input  name="company" type="text" class="form-control col-sm-7" id="usr" >

    </div>

    <div class="form-group row">
        <label for="type" class=" col-sm-3 ml-5"><h5>Job Type :</h5></label>

        <select name="type" class="form-control col-md-7">
            <option selected value="1">Full Time</option>
            <option value="2">Part Time</option>

        </select>
    </div>
    <div class="form-group row">
        <label for="city" class=" col-sm-3 ml-5 col-form-label"><h5>City :</h5></label>

        <select name="city" class="form-control col-md-7">
            <option id="showMans" selected value=" 1">Mansoura</option>
            <option id="showCairo" value="2">Cairo</option>
            <option value="3">Alxandria</option>
            <option value="4">Dommitta</option>
            <option value="5">others</option>
        </select>
    </div>



    <div class="form-group row">
        <label for="date_start_at" class="col-sm-3 ml-5"><h5>Work date:</h5></label>
        <input type="date" id="start" name="date_start_at"for="date_start_at" class=" form-control col-sm-3 " placeholder="start" >
        <div class="col-1"></div>
        <input type="date" id="start" name="date_end_at" for="date_end_at" class=" form-control col-sm-3 " placeholder="End">
    </div>




    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-3 ml-5"><h5>Work times:</h5></label>

            <select name="time_start_at" for="time_start_at" class=" form-control col-sm-3 " placeholder="min" >

                <option selected value="min">from</option>
                <option value="8 ">8</option>
                <option value="9 ">9 </option>
                <option value="10 ">10 </option>
                <option value="11 ">11 </option>
                <option value="12">12 </option>
            </select>

            <div class="col-1  "></div>
            <select name="time_end_at" for="time_end_at" class=" form-control col-sm-3 " >
                <option placeholder="min" selected>to</option>
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



    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-3 ml-5"><h5>Age:</h5></label>

        <select name="age" class="form-control col-md-7 " placeholder="age" >
            <option selected value="16-25">16-25</option>
            <option value="25-45">25-45</option>
            <option value="45-65">45-65</option>
        </select>

    </div>






    <div class="form-group row">
    <label for="vacancies" class="col-sm-3 ml-5"><h5>vacancies :</h5></label>

       <select  name="vacancies" for="vacancies" class="form-control  col-sm-7">
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

    <div class="form-group row">
        <label for="others" class="col-sm-3 ml-5"><h5>Other Requirements:</h5></label>
        <Textarea  for="other" type="text" name="other" class=" form-control col-sm-7 "  id="inputEmail3"></textarea>
    </div>



  <div class=" container col-3 ">
	<button  class="btn btn-primary btn-md btn-block ">POST</button>


       </div>
	   </div>
</form>

</div>

</div>


</body>
@endsection



