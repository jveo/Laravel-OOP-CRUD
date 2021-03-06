@extends('master')

@section('title')
    Articles
@endsection

@section('content')
<h1> Article # {{$article->id}} </h1>
name: {{$article->name}}<br/>
Description: {{$article->body}}<br/>
Author ID: {{$article->author_id}}<br/>
Article: {{$article->category_id}}

@endsection
