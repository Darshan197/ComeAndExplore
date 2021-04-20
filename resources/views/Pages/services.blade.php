@extends('Layouts.app')
@section('content')
    <h3>Services</h3>
    @if (count($services) > 0)
        <ul class="list-group">
            @foreach ($services as $item)
            <li class="list-group-item">{{$item}}</li>
            @endforeach
        </ul>
    @endif
@endsection