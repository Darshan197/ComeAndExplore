@extends('Layouts.app')
@section('content')
    <h3>Create</h3>
    <form action="/posts" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="Title">
        </div>
        <div class="form-group">
          <label for="body">Body</label>
          <textarea type="text" name="body" id="summernote" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="file" name="cover_image">
        </div>
        <div class="form-group">
          <label for="tags">Tags</label>
          <input type="text" class="form-control form-control-sm" name="tags">
          <small id="helpId" class="text-muted">Please Add Tags Related To Your Content. Tags Should Be Comma Separated. <br> Ex. Technology,Android,Mobile</small>
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
@endsection