<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function showQuizzes() {
        $quizzes = Quiz::with('course')->get();
        return view('admin.quizzes', compact('quizzes'));
    }

    public function createQuiz() {
        $courses = Course::all();
        return view('admin.createQuiz', compact('courses'));
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

    public function editQuiz($id) {
        $quiz = Quiz::findOrFail($id);
        $courses = Course::all();
        return view('admin.editQuiz', compact('quiz', 'courses'));
    }

    public function updateQuiz(Request $request, $id) {
        $request->validate([
            'name' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id', 
        ]);

        $quiz = Quiz::findOrFail($id);
        $quiz->update([
            'name' => $request->name,
            'course_id' => $request->course_id,
        ]);

        return redirect()->route('admin.quizzes')->with('success', 'Quiz updated successfully.');
    }

    public function deleteQuiz($id) {
        $quiz = Quiz::findOrFail($id);
        $quiz->delete();

        return redirect()->route('admin.quizzes')->with('success', 'Quiz deleted successfully.');
    }
}