@extends('Layouts.app')
@section('content')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            @foreach ($users as $item)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="/img/profileImg/{{$item->user_image}}" alt="Image" width="100%" height="225">
                    <div class="card-body">
                        <h4>{{$item->name}}</h4>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="/user/{{$item->id}}" class="btn btn-sm btn-outline-primary">view</a>
                                @if (Auth::user()->id == $item->id)
                                <a href="/user/edit/{{$item->id}}" class="btn btn-sm btn-outline-primary">Edit</a>
                                @endif
                            </div>
                            <small class="text-muted">{{$item->created_at}}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
