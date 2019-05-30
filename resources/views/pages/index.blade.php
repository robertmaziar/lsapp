@extends('layouts.app')

@section('content')
    <div class="jumbotron bg-light text-center">
        <div class="content">
            <div class="title m-b-md">
                <h1 class="display-3">{{$title}}</h1>
                <p class="lead">
                    This is the Laravel application from the "Laravel From Scratch" Youtube Series
                </p>
            </div>
            @guest
                <a href="/login"><button class="btn btn-primary btn-lg rounded-0">Login</button></a>
                <a href="/register"><button class="btn btn-success btn-lg rounded-0">Register</button></a>
            @endguest
        </div>
    </div>
@endsection
