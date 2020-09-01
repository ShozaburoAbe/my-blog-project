@extends('layouts.admin-master')
  @section('content')
      <h1>User Profile for : {{$user->name}}</h1>

      <div class="row">

        <div class="col-sm-6">
          <form action="{{route('update.user.profile', $user->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
              <label for="name">Name</label>
              <input value="{{$user->name}}" id="name" name="name" class="form-control @error('username') is-invalid @enderror" type="text">
              @error('name')
                  <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input value="{{$user->email}}" id="email" name="email" class="form-control @error('username') is-invalid @enderror" type="text">
              @error('email')
                  <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input id="password" name="password" class="form-control @error('username') is-invalid @enderror" type="password">
              @error('password')
                  <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="password-confirm">Confirm Password</label>
              <input id="password-confirmation" name="password-confirmation" class="form-control @error('username') is-invalid @enderror" type="password">
              @error('password-confirmation')
                  <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>
            @if ($user->id == auth()->user()->id)
            <button type="submit" class="btn btn-primary">Modify</button>
            @endif
          </form>
        </div>

      </div>

  @endsection

