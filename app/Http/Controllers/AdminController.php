<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $posts = Auth::user()->posts;
        return view('admin.index', ['posts' => $posts]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
