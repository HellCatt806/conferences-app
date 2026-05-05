<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [];
        return view('admin.users.index', compact('users'));
    }

    public function edit($id)
    {
        $user = null;
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'    => 'required',
            'surname' => 'required',
            'email'   => 'required|email',
        ]);
        return redirect()->route('admin.users.index')->with('success', 'Naudotojas atnaujintas');
    }
}