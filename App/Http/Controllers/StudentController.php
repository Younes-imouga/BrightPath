<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class StudentController extends Controller
{
    public function index(){
        return view('student.LearnerDashboard');
    }

    public function showCourses(){
        $courses = Course::all();
        return view('student.courses', compact('courses'));
    }

    public function showMyCourses(){
        return view('student.myCourses');
    }

    public function showProfile(){
        return view('student.profile');
    }

    public function showLeaderboard(){
        return view('student.leaderboard');
    }

    public function showSupport(){
        return view('student.support');
    }

    public function showQuiz(){
        return view('student.quiz');
    }

    public function showQuizResult(){
        return view('student.quizResult');
    }

    public function showCourseContent(){
        return view('student.courseContent');
    }

    public function showAchievements(){
        return view('student.achievements');
    }
    
    public function showProgress(){
        return view('student.progress');
    }

    public function showQuizRules(){
        return view('student.quizRules');
    }

    public function showCourse($id) {
        $course = Course::with('contents')->findOrFail($id);
        return view('student.courseDetails', compact('course'));
    }
}
