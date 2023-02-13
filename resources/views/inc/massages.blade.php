@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>&#9785; {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
