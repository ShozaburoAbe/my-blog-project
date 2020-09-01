<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = POST::all()->sortDesc()->take(3);

        return view('home.index', ['posts' => $posts]);
    }

    public function posts()
    {
        $posts = POST::all()->sortDesc();
        return view('home.posts', ['posts' => $posts]);
    }
}
