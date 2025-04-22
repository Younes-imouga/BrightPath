<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAdmin(){
        return view('admin.dashboard');
    }

    public function showUsers(){
        $users = \App\Models\User::all();
        return view('admin.users', compact('users'));
    }

    public function showCourses(){
        $courses = \App\Models\Course::all();
        return view('admin.courses', compact('courses'));
    }

    public function showReclamations(){
        return view('admin.reclamations');
    }

    public function showQuizzes(){
        return view('admin.settings');
    }

    public function createCourse() {
        return view('admin.create');
    }

    public function storeCourse(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'required|integer|min:1',
        ]);

        $course = new Course();
        $course->title = $request->title;
        $course->description = $request->description;
        $course->duration = $request->duration;
        $course->save();

        return redirect()->route('admin.courses')->with('success', 'Course created successfully.');
    }
}
