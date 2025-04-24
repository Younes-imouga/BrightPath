<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAdmin(){
        return view('admin.dashboard');
    }

    public function showUsers(){
        return view('admin.users');
    }

    public function showReclamations(){
        return view('admin.reclamations');
    }

    public function showQuizzes(){
        return view('admin.settings');
    }
}
