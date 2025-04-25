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

    public function deleteQuiz($id) {
        $quiz = Quiz::findOrFail($id);
        $quiz->delete();

        return redirect()->route('admin.quizzes')->with('success', 'Quiz deleted successfully.');
    }

    public function storeQuiz(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
        ]);

        Quiz::create([
            'name' => $request->name,
            'course_id' => $request->course_id,
        ]);

        return redirect()->route('admin.quizzes')->with('success', 'Quiz created successfully.');
    }

    public function updateQuiz(Request $request, $id) {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id', // Ensure the course exists
        ]);

        // Find the quiz by ID and update it
        $quiz = Quiz::findOrFail($id);
        $quiz->update([
            'name' => $request->name,
            'course_id' => $request->course_id,
        ]);

        return redirect()->route('admin.quizzes')->with('success', 'Quiz updated successfully.');
    }
}
