@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card card-body bg-light my-4 p-3">
                {{-- <h3><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h3> --}}
                {{-- andere optie om post links op te roepen --}}
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on: {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}} {{-- voegt de links voor pagination in --}}
    @else
        <p>No posts found</p>
    @endif

@endsection