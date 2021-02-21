@if(session('create'))

    <div class="col-8 offset-2 alert alert-success">
        <h5 class="text-capitalize text-center">{{session('create')}}</h5>
    </div>
@endif
@if(session('delete'))

    <div class="col-8 offset-2 alert alert-success">
        <h5 class="text-capitalize text-center">{{session('delete')}}</h5>
    </div>
@endif
@if(session('update'))

    <div class="col-8 offset-2 alert alert-success">
        <h5 class="text-capitalize text-center">{{session('update')}}</h5>
    </div>


@endif
