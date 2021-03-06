<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;


class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user);
        return view('users.edit', compact('user'));
    }

    public function update(UserRequest $request, User $user)
    {
        $this->authorize('update', $user);
        $user->update($request->all());
        return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功！');
    }

    public function changeAvatar(Request $request)
    {
        $file = $request->file('files');
        $filename = md5(time().Auth::user()->id).'.'.$file->getClientOriginalExtension();
        $file->move(public_path('images/avatars'), $filename);

        $avatar_url = 'images/avatars/'.$filename;

        return response()->json(['src' => asset($avatar_url), 'errcode' => 0]);
    }
}
