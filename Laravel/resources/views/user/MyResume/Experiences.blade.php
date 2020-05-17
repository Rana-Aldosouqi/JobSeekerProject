@if(count($data) > 0)
    @foreach($data as $experience)
        <div class="row mb-3">
            <div class="col-3 mr-0">
                <div class="row">
                    <p class="h5">
                        <span class="h6" style="color: white">To &nbsp; &nbsp;</span>
                        {{$experience->start_date}}</p>
                </div>
                <div class="row">
                    <p class="h5">
                        <span class="h6">To &nbsp; &nbsp;</span>
                        {{$experience->end_date}}</p>
                </div>
            </div>
            <div class="col-9 ml-0">
                <p class="h5"><b>{{$experience->job_name}}</b></p>
                <p class="h6">{{$experience->company}}</p>
            </div>
        </div>
    @endforeach
@else
    <div class="row"></div>
@endif