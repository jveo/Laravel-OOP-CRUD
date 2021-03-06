@extends('master')

@section('title')
Categories
@endsection


@section('content')

    <h1>All Categories</h1>

    @foreach($categories as $category)
        Category ID: {{$category->id}}<br>
        Category Name: {{$category->name}}<br>
        Category Description: {{$category->description}}<br><br>
    @endforeach


@endsection
