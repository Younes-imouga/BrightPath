<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Quiz;

class AdminController extends Controller
{
    public function showAdmin(){
        return view('admin.dashboard');
    }

    public function showUsers(){
        $users = \App\Models\User::all();
        return view('admin.users', compact('users'));
    }

    public function showReclamations(){
        return view('admin.reclamations');
    }
}
