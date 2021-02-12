@if($errors->any())
    <ul class="list-unstyled pt-2">
    @foreach($errors->all() as $error)
        <li class="alert alert-danger">{{$error}}</li>
    @endforeach
    </ul>
@endif