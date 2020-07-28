@extends('layouts.admin-master')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Create Post</h1>
    </div>
<form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Content</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="content"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
