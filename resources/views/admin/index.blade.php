@extends('layouts.admin-master')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">My Posts</h1>
    </div>
@endsection

@section('table')
    <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Posts Table</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Auther</th>
                      <th>Created At</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Title</th>
                      <th>Auther</th>
                      <th>Created At</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($posts as $post)
                        <tr>
                          <td><a href="{{route('post.show', ['id' => $post->id])}}">{{$post->title}}</a></td>
                          <td><a href="{{route('show.user', ['id' => $post->user->id])}}">{{$post->user->name}}</a></td>
                          <td>{{$post->created_at}}</td>
                          <td><a class="btn btn-success btn-sm" href="{{route('post.edit', ['id' => $post->id])}}">Update</a></td>
                          <td><a class="btn btn-danger btn-sm" href="{{route('post.destroy', ['id' => $post->id])}}">Delete</a></td>
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
