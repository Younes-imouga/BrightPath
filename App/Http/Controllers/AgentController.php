<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index()
    {
        return view('agent.AgentDashboard');
    }

    public function showCourses()
    {
        return view('agent.AgentActivity');
    }

    public function showReclamations()
    {
        return view('agent.AgentReclamations');
    }
}
