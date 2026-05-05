<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'    => 'required',
            'surname' => 'required',
            'email'   => 'required|email',
        ]);
        $user = User::findOrFail($id);
        $user->update($request->only('name', 'surname', 'email'));
        return redirect()->route('admin.users.index')->with('success', 'Naudotojas atnaujintas');
    }
}