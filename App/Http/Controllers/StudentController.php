<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('student.LearnerDashboard');
    }

    public function showCourses(){
        return view('student.courses');
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
}
