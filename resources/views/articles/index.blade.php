@extends('master');

@section('title')
    Contact
@endsection

@section('content')

    <h1>All Articles</h1>

    @foreach($articles as $article)
        Article ID: {{$article->id}}<br>
        Article Name: {{$article->name}}<br>
        Article Description: {{$article->body}}<br>
        Article Author ID: {{$article->author_id}}<br><br>
    @endforeach

@endsection

