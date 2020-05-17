@if(count($data) > 0)
    @foreach($data as $skill)
        <div class="row">
            <div class="col-4">
                <ul class="ml-0">
                    <li><p class="h5">{{$skill->skill}}</p></li>
                </ul>
            </div>
            {{--                            <div class="col-3">--}}
            {{--                                <div class="row">--}}
            {{--                                    <span class="fa fa-star" style="color: orange;"></span>--}}
            {{--                                    <span class="fa fa-star"></span>--}}
            {{--                                    <span class="fa fa-star"></span>--}}
            {{--                                    <span class="fa fa-star"></span>--}}
            {{--                                    <span class="fa fa-star"></span>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
        </div>
    @endforeach
@else
    <div class="row"></div>
@endif