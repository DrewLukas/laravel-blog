@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-dark mb-4">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>{!!$post->body!!}</div>
    <hr>
    <small>Written on: {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
@endsection