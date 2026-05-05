<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index()
    {
        $conferences = Conference::where('date', '>=', now()->toDateString())->get();
        return view('client.conferences', compact('conferences'));
    }

    public function show($id)
    {
        $conference = Conference::findOrFail($id);
        return view('client.show', compact('conference'));
    }

    public function register(Request $request, $id)
    {
        $conference = Conference::findOrFail($id);
        $user = Auth::user();
        if (!$conference->users()->where('user_id', $user->id)->exists()) {
            $conference->users()->attach($user->id);
        }
        return redirect()->route('client.conferences')->with('success', 'Sėkmingai užsiregistruota');
    }
}