@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-primary mb-4">Go Back</a>
    <h1>{{ $post->title }}</h1>
    <img class="w-100 mb-3" src="/storage/cover_images/{{$post->cover_image}}" />
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if (!Auth::guest() && Auth::user()->id == $post->user_id)
        <a href="/posts/{{ $post->id }}/edit">
            <button class="btn btn-secondary">Edit</button>
        </a>
        {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete', 'class' => 'float-right')) }}
            {{Form::submit('Delete Post', ['class' => 'btn btn-danger'])}}
        {{ Form::close() }}
    @endif
@endsection
