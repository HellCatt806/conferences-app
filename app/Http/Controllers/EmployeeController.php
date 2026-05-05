<?php

namespace App\Http\Controllers;

use App\Models\Conference;

class EmployeeController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();
        return view('employee.conferences', compact('conferences'));
    }

    public function show($id)
    {
        $conference = Conference::findOrFail($id);
        $registeredClients = $conference->users()->get();
        return view('employee.show', compact('conference', 'registeredClients'));
    }
}