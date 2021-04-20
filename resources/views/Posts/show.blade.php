@extends('Layouts.app')
@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h2>{{$post->title}}</h2>
    <small>Writen On {{$post->created_at}}</small>
    <div class="text-center">
        <img src="/img/postImg/{{$post->cover_image}}" alt="" class="img-rounded" style="width:25%">
    </div>
    <div class="mt-5">
        {!!$post->body!!}
    </div>
    <div>
        @auth
        <form action="/posts/{{$post->id}}/like" style="display: inline" method="POST">
            @csrf
            <button class="btn"><i class="fas fa-thumbs-up {{$post->isLiked(Auth::user()) ? 'text-primary' : ''}}"></i></button>
        </form>
        <span class="badge badge-light">{{count($post->likes)}}</span>
        @endauth
    </div>
    <div class="mt-2">
        @if (!Auth::guest() && Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST','class' => 'float-right']) !!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        @endif
    </div>
@endsection
