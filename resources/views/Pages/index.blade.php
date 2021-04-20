@extends('Layouts.app')
@section('content')
<div class="jumbotron text-center">
    <h3>{{$title}}</h3>
    <h2>Home</h2>
    <p>
        <a href="/login" class="btn btn-primary" role="button">Login</a>
        <a href="/register" class="btn btn-success" role="button">Register</a>
    </p>
</div>
@endsection