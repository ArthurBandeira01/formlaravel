@if($errors->any())
    <ul class="alert alert-danger mt-4">
        @foreach($errors->all() as $error)
            <li class="px-1 ms-2">{{$error}}</li>
        @endforeach
    </ul>
@endif