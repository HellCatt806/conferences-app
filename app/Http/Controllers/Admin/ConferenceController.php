<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConferenceRequest;
use App\Models\Conference;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();
        return view('admin.conferences.index', compact('conferences'));
    }

    public function create()
    {
        return view('admin.conferences.create');
    }

    public function store(ConferenceRequest $request)
    {
        Conference::create($request->validated());
        return redirect()->route('admin.conferences.index')->with('success', 'Konferencija sukurta');
    }

    public function edit($id)
    {
        $conference = Conference::findOrFail($id);
        return view('admin.conferences.edit', compact('conference'));
    }

    public function update(ConferenceRequest $request, $id)
    {
        $conference = Conference::findOrFail($id);
        $conference->update($request->validated());
        return redirect()->route('admin.conferences.index')->with('success', 'Konferencija atnaujinta');
    }

    public function destroy($id)
    {
        $conference = Conference::findOrFail($id);
        if ($conference->isPast()) {
            return redirect()->route('admin.conferences.index')->with('error', __('messages.conference_no_delete_past'));
        }
        $conference->delete();
        return redirect()->route('admin.conferences.index')->with('success', 'Konferencija ištrinta');
    }
}