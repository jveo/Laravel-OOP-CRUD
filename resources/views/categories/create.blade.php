@extends('master')

@section('title')

@endsection


@section('content')
    <h1>New Category Form</h1>

<form method="POST" action="{{ action ('CategoryController@store') }}">
    {{ csrf_field() }}

    <label for="name">Name:</label>
    <input name="name" type="text"><br>
    <label for="description">Description:</label>
    <input name="description" type="text">
    <input type="submit" value="submit">

</form>

    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}} <br>
        @endforeach
    @endif
@endsection
