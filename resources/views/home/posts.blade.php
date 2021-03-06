@extends('layouts.home-master')
    @section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{asset('img/home-bg.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h2>All Posts</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

            @foreach ($posts as $post)
            <div class="post-preview">
            <a href="post/{{$post->id}}">
                <h2 class="post-title">
                {{$post->title}}
                </h2>
                <h3 class="post-subtitle">
                    <?php
                        if (strlen($post->content) > 40) {
                            $brief = substr($post->content, 0, 40) . '...';
                            echo $brief;
                        }
                    ?>
                {{-- {{$post->content}} --}}
                </h3>
            </a>
            <p class="post-meta">Posted by
                <a href="{{route('show.user', [$post->user->id])}}">{{$post->user->name}}</a>
                on {{$post->updated_at->format('F j, Y')}}</p>
            </div>
            <hr>
            @endforeach
        </div>
        </div>
    </div>

    @endsection

