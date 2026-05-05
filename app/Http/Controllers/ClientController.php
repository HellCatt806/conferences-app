<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $conferences = [];
        return view('client.conferences', compact('conferences'));
    }

    public function show($id)
    {
        $conference = null;
        return view('client.show', compact('conference'));
    }

    public function register(Request $request, $id)
    {
        return redirect()->route('client.conferences')->with('success', 'Sėkmingai užsiregistruota');
    }
}