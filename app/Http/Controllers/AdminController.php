<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $posts = User::findOrFail(1)->posts;
        return view('admin.index', ['posts' => $posts]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
