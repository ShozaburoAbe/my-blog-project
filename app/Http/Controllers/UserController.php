<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.show-users', ['users' => $users]);
    }

    public function show($id)
    {
        $usersPosts = User::findOrFail($id)->posts;
        return view('admin.post.show-posts', ['posts' => $usersPosts]);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }

    public function profile($id)
    {
        $user = User::findOrFail($id);
        // return $user;
        return view('admin.user.user-profile', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $inputs = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            // 'password' => ['min:6', 'max:255', 'confirmed']
        ]);
        $user->update($inputs);
        return back();
    }
}
