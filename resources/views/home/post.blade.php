@extends('layouts.home-master')
@section('content')
  <!-- Page Header -->
<header class="masthead" style="background-image: url({{asset('img/post-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h2>{{$post->title}}</h2>
            <span class="meta">Posted by
              <a href="{{route('show.posts', [$post->user->id])}}">{{$post->user->name}}</a>
              on August 24, 2019</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          {{$post->content}}
        </div>
      </div>
    </div>
  </article>
@endsection
