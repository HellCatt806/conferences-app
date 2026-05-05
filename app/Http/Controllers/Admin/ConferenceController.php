<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConferenceRequest;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = [];
        return view('admin.conferences.index', compact('conferences'));
    }

    public function create()
    {
        return view('admin.conferences.create');
    }

    public function store(ConferenceRequest $request)
    {
        return redirect()->route('admin.conferences.index')->with('success', 'Konferencija sukurta');
    }

    public function edit($id)
    {
        $conference = null;
        return view('admin.conferences.edit', compact('conference'));
    }

    public function update(ConferenceRequest $request, $id)
    {
        return redirect()->route('admin.conferences.index')->with('success', 'Konferencija atnaujinta');
    }

    public function destroy($id)
    {
        return redirect()->route('admin.conferences.index')->with('success', 'Konferencija ištrinta');
    }
}