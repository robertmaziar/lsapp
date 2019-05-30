@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>You are logged in!</p>

                    @if (count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td>
                                        {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete', 'class' => 'float-right')) }}
                                            {{Form::submit('Delete Post', ['class' => 'btn btn-danger'])}}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p class="alert alert-warning">You have no posts!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
