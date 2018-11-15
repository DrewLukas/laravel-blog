@extends('layouts.app')
        
@section('content')
    <div class="jumbotron text-center">        
        <h1 class="display-4">{{$title}}</h1>
        <p class="lead">This is the Laravel Application from the "Laravel From Scratch" YouTube series.</p>
        <p>
            <a href="#" class="btn btn-lg btn-primary my-4">Login</a>
            <a href="#" class="btn btn-lg btn-secondary my-4">Register</a>
        </p>
    </div>
@endsection
