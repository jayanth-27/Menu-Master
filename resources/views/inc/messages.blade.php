<!--Check if there are any messages within the session-->
<div class="" style=" width:50%; margin:0 auto;margin-top: 10%;">
@if(session('success'))
    <div class="alert rounded mt-5 alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert rounded mt-5 bg-red-500 alert-danger">
        {{ session('error') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert rounded mt-5 bg-red-500 alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>