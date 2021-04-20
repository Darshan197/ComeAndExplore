@extends('Layouts.app')
@section('content')
<div class="">
    <div class="row">
        <div class="col">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Dashboard</h3></div>
                <div class="row">
                    <div class="col">
                        <div class="card card-widget widget-user">
                          <div class="widget-user-header text-white" style="background: url('./img/photo1.png') center center;">
                            <h3 class="widget-user-username text-right">{{$user->name}}</h3>
                            <h5 class="widget-user-desc text-right">Web Designer</h5>
                          </div>
                          <div class="widget-user-image">
                            <img class="img-circle" src="./img/profileImg/{{$user->user_image}}" alt="User Avatar">
                          </div>
                          <div class="card-footer">
                            <div class="row">
                              <div class="col-sm-4 border-right">
                                <div class="description-block">
                                  <h5 class="description-header">3,200</h5>
                                  <span class="description-text">SALES</span>
                                </div>
                              </div>
                              <div class="col-sm-4 border-right">
                                <div class="description-block">
                                  <h5 class="description-header">13,000</h5>
                                  <span class="description-text">FOLLOWERS</span>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <div class="description-block">
                                  <h5 class="description-header">35</h5>
                                  <span class="description-text">PRODUCTS</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="panel-body">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="float-left">Your Blog Posts</h3>
                      <div class="card-tools"><a href="/posts/create" class="btn btn-success">Create Post</a></div>
                    </div>
                    <div class="card-body">
                      @if(count($user->posts) > 0)
                          <table class="table">
                              <tr>
                                  <th>Title</th>
                                  <th>Actions</th>
                              </tr>
                              @foreach($user->posts as $post)
                                  <tr>
                                      <td><a href="/posts/{{$post->id}}">{{$post->title}}</a></td>
                                      <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary float-left mr-2 btn-sm">Edit Post</a>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => ''])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete Post', ['class' => 'btn btn-danger btn-sm'])}}
                                        {!!Form::close()!!}
                                      </td>
                                  </tr>
                              @endforeach
                          </table>
                      @else
                          <p>You have no posts</p>
                      @endif
                    </div>
                    <div class="card-footer text-muted">
                      Posts
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
