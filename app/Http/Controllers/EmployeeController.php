<?php

namespace App\Http\Controllers;

class EmployeeController extends Controller
{
    public function index()
    {
        $conferences = [];
        return view('employee.conferences', compact('conferences'));
    }

    public function show($id)
    {
        $conference = null;
        $registeredClients = [];
        return view('employee.show', compact('conference', 'registeredClients'));
    }
}