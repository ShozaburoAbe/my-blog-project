@extends('layouts.admin-master')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">All Users</h1>
    </div>
@endsection

@section('table')
    <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Users Table</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>Id</th>
                      <th>Name</th>
                      <th>Posts</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Id</th>
                      <th>Name</th>
                      <th>Posts</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($users as $user)
                        <tr>
                          <td>{{$user->id}}</td>
                          <td><a href="{{route('show.user', ['id' => $user->id])}}">{{$user->name}}</a></td>
                          <td><a href="{{route('show.posts', ['id' => $user->id])}}">Show Posts</a></td>
                          <td><a class="btn btn-group-sm btn-danger" href="{{route('delete.user', ['id' => $user->id])}}">Delete</a></td>
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
