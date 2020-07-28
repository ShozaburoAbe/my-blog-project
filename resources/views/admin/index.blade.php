@extends('layouts.admin-master')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">All Posts</h1>
    </div>
@endsection

@section('table')
    <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Id</th>
                      <th>Name</th>
                      <th>Title</th>
                      <th>Created At</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Id</th>
                      <th>Name</th>
                      <th>Title</th>
                      <th>Created At</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($posts as $post)
                        <tr>
                          <td>{{$post->id}}</td>
                          <td>{{$post->user->name}}</td>
                          <td><a href="{{route('post.show', ['id' => $post->id])}}">{{$post->title}}</a></td>
                          <td>{{$post->created_at}}</td>
                          <td><a href="{{route('post.edit', ['id' => $post->id])}}">Update</a></td>
                          <td><a href="{{route('post.destroy', ['id' => $post->id])}}">Delete</a></td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
@endsection

@section('scripts')
  <!-- Page level plugins -->
  <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
@endsection
