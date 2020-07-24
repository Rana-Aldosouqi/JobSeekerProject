@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul class="list-unstyled mb-0">
            @foreach($errors->all() as $error)
                <li class="mb-0">
                    <i class="fa fa-caret-right"></i>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
@endif
