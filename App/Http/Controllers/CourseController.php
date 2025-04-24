<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function showCourses() {
        $courses = Course::all();
        return view('admin.courses', compact('courses'));
    }

    public function createCourse() {
        $categories = Category::all();

        return view('admin.createCourse', compact('categories'));
    }

    public function storeCourse(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'score' => 'required|integer|min:1',
            'category' => 'required|exists:categories,id',
        ]);

        $user = auth()->id();
        
        $course = new Course();
        $course->name = $request->title;
        $course->description = $request->description;
        $course->score = $request->score;
        $course->creator_id = $user;
        $course->category_id = $request->category;
        $course->save();

        return redirect()->route('admin.courses')->with('success', 'Course created successfully.');
    }
}
