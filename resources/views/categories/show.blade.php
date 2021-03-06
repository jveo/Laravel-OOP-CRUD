@extends('master')

@section('title')
    Search Results
@endsection

@section('content')

    <h1> Category # {{$category->id}} </h1>
    name: {{$category->name}}<br/>
    Description: {{$category->body}}<br/>
    Author ID: {{$category->description}}


    <h3> Belongs to </h3>
    @foreach($category->articles as $article)

        <h1> Article # {{$article->id}} </h1>
        name: {{$article->name}}<br/>
        Description: {{$article->body}}<br/>
        Author ID: {{$article->author_id}}<br/>
        Article: {{$article->category_id}}

    @endforeach


@endsection
