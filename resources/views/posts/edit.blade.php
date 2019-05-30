@extends('layouts.app')

@section('content')
    <h1 class="mb-3">Edit Post</h1>
    {{ Form::open(array('action' => array('PostsController@update', $post->id), 'method' => 'put', 'enctype' => 'multipart/form-data')) }}
        <div class="form-group">
            {{ Form::label('title', 'Title')}}
            {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'title'])}}
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Body')}}
            {{ Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'body text'])}}
        </div>
        <div class="form-group">
            {{ Form::file('cover_image') }}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}
@endsection
