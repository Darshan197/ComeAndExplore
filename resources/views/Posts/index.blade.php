@extends('Layouts.app')
@section('content')
<h3>Posts</h3>
    @if (count($posts) > 0)
        @foreach ($posts as $item)
        {{-- <div class="card card-body mt-2" style="background:#f0f5f5">
            <div class="row">
                <div class="col-md-2 col-sm-2">
                    <img class="img-rounded d-block" style="width:70px;" src="/img/postImg/{{$item->cover_image}}">
                    <small>{{$item->created_at}} : <a href="user/{{$item->user_id}}">{{$item->user->name}}</a></small>
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3><a href="/posts/{{$item->id}}">{{$item->title}}</a></h3>
                    <h6>{!!substr($item->body, 0, 80)!!}.. <small><a href="/posts/{{$item->id}}">Read more</a></small></h6>
                </div>
            </div>
        </div> --}}
        <div class="card">
            <div class="card-body">
              <h4>{{$item->title}}</h4>
              <hr class="">
              <div class="d-flex justify-content-end">
                  <small>
                      <span class="mr-3"><i class="fas fa-user"></i> {{$item->user->name}}</span> |
                      <span class="ml-3 mr-3"><i class="far fa-calendar"></i> <Dateformat time="{{$item->created_at}}" /></span> |
                      <span class="ml-3 mr-3"><i class="fa fa-tags" aria-hidden="true"></i> {{$item->tags}}</span> |
                      <span class="ml-3">
                          <i class="far fa-thumbs-up"></i> {{$item->likes->count()}}
                          {{-- <i class="fab fa-facebook" aria-hidden="true"></i>
                          <i class="fab fa-linkedin ml-2" aria-hidden="true"></i>
                          <i class="fab fa-twitter ml-2" aria-hidden="true"></i> --}}
                    </span>
                  </small>
              </div>
              <div class="row mt-3">
                  <div class="col-2"><img src="/img/postImg/{{$item->cover_image}}" width="200px" alt="..."></div>
                  <div class="col-10">
                      <p class="card-text">{{substr(strip_tags($item->body), 0, 500)}} ..</p>
                      <a href="/posts/{{$item->id}}" class="btn btn-sm float-right">Read More</a>
                  </div>
              </div>
            </div>
          </div>
        @endforeach
        @auth
        <div class="text-center card-body bg-light mt-2">
            {{$posts->links()}}
            <a href="/user" class="btn btn-outline-info float-right">Meet Blogger</a>
        </div>
        @endauth
    @else
        <p>No Posts Found</p>
    @endif
@endsection