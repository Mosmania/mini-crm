@if(Session::has('message_success'))
    <div class="alert alert-success">
        <p>{{session('message_success')}}</p>
    </div>
@endif
@if(Session::has('message_danger'))
    <div class="alert alert-danger">
        <p>{{session('message_danger')}}</p>
    </div>
@endif

