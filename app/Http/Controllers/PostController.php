<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create-post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);
        $user->posts()->create([
            'user_id' => $user->id,
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, $id)
    { //ここでどのPostを送るのかを送られてきたidで判別する。
        // $post = User::findOrFail(1)->posts->where('id', $id);
        $post = Post::findOrFail($id);
        return view('home.post', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, $id)
    {
        $post = POST::findOrFail($id);
        return view('admin.edit-post', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post, $id)
    {
        $post = Post::findOrFail($id);
        $post->update([
            'user_id' => $post->user->id,
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, $id)
    {
        $post = POST::findOrFail($id);
        $post->delete();
        return redirect('/admin');
    }
}
