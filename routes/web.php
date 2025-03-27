<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [UserController::class, 'showLogIn'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/signup', [UserController::class, 'showRegister']);
Route::post('/signup', [UserController::class, 'register']);
Route::get('/logout', [UserController::class, 'logout']);

Route::get('/about', [UserController::class, 'showAbout']);
Route::get('/courses', [UserController::class, 'showCourses']);

Route::get('/admin', [AdminController::class, 'showAdmin'])->name('admin.dashboard');
Route::get('/admin/users', [AdminController::class, 'showUsers'])->name('admin.users');
Route::get('/admin/courses', [AdminController::class, 'showCourses'])->name('admin.courses');
Route::get('/admin/reclamations', [AdminController::class, 'showReclamations'])->name('admin.reclamations');
Route::get('/admin/quizzes', [AdminController::class, 'showQuizzes'])->name('admin.quizzes');

Route::get('/student', [StudentController::class, 'index'])->name('student.dashboard');
Route::get('/student/courses', [StudentController::class, 'showCourses'])->name('student.courses');
Route::get('/student/my-courses', [StudentController::class, 'showMyCourses'])->name('student.myCourses');
Route::get('/student/course-content', [StudentController::class, 'showCourseContent'])->name('student.courseContent');
Route::get('/student/profile', [StudentController::class, 'showProfile'])->name('student.profile');
Route::get('/student/progress', [StudentController::class, 'showProgress'])->name('student.progress');
Route::get('/student/quiz-rules', [StudentController::class, 'showQuizRules'])->name('student.quizRules');
Route::get('/student/quiz', [StudentController::class, 'showQuiz'])->name('student.quiz');
Route::get('/student/quiz-result', [StudentController::class, 'showQuizResult'])->name('student.quizResult');
Route::get('/student/leaderboard', [StudentController::class, 'showLeaderboard'])->name('student.leaderboard');
Route::get('/student/achievements', [StudentController::class, 'showAchievements'])->name('student.achievements');
Route::get('/student/support', [StudentController::class, 'showSupport'])->name('student.support');