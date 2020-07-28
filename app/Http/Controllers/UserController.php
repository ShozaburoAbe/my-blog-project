<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.show-users', ['users' => $users]);
    }

    public function show($id)
    {
        $usersPosts = User::findOrFail($id)->posts;
        return view('admin.show-posts', ['posts' => $usersPosts]);
    }
}
