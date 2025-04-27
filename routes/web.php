<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('register', [UserController::class, 'showRegister'])->name('register');
    Route::post('register', [UserController::class, 'register']);
    Route::get('login', [UserController::class, 'showLogIn'])->name('login');
    Route::post('login', [UserController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [UserController::class, 'LogOut'])->name('logout');
});

Route::get('/about', [UserController::class, 'showAbout']);
Route::get('/courses', [UserController::class, 'showCourses']);

Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'showAdmin'])->name('admin.dashboard');

    Route::get('/admin/users', [AdminController::class, 'showUsers'])->name('admin.users');
    Route::put('/admin/users/{id}/role', [UserController::class, 'updateRole'])->name('admin.updateRole');
    Route::put('/admin/users/{id}/ban', [UserController::class, 'banUser'])->name('admin.banUser');
    Route::put('/admin/users/{id}/unban', [UserController::class, 'unbanUser'])->name('admin.unbanUser');

    Route::get('/admin/courses', [CourseController::class, 'showCourses'])->name('admin.courses');
    Route::get('/admin/reclamations', [CourseController::class, 'showReclamations'])->name('admin.reclamations');
    Route::get('/admin/quizzes', [QuizController::class, 'showQuizzes'])->name('admin.quizzes');
    Route::get('/admin/quizzes/create', [QuizController::class, 'createQuiz'])->name('admin.createQuiz');
    Route::post('/admin/quizzes', [QuizController::class, 'storeQuiz'])->name('admin.storeQuiz');
    Route::get('/admin/quizzes/{id}/edit', [QuizController::class, 'editQuiz'])->name('admin.editQuiz');
    Route::put('/admin/quizzes/{id}', [QuizController::class, 'updateQuiz'])->name('admin.updateQuiz');
    Route::delete('/admin/quizzes/{id}', [QuizController::class, 'deleteQuiz'])->name('admin.deleteQuiz');

    Route::get('/admin/courses/create', [CourseController::class, 'createCourse'])->name('admin.createCourse');
    Route::post('/admin/courses', [CourseController::class, 'storeCourse'])->name('admin.storeCourse');
    Route::get('/admin/courses/{id}', [CourseController::class, 'showCourse'])->name('admin.showCourse');
    Route::get('/admin/courses/{id}/edit', [CourseController::class, 'editCourse'])->name('admin.editCourse');
    Route::put('/admin/courses/{id}/edit', [CourseController::class, 'updateCourse'])->name('admin.updateCourse');
    Route::delete('/admin/courses/{id}/delete', [CourseController::class, 'deleteCourse'])->name('admin.deleteCourse');

    Route::get('/admin/categories', [CategoryController::class, 'showCategories'])->name('admin.categories');
    Route::get('/admin/categories/create', [CategoryController::class, 'createCategory'])->name('admin.createCategory');
    Route::post('/admin/categories', [CategoryController::class, 'storeCategory'])->name('admin.storeCategory');
    Route::get('/admin/categories/{id}/edit', [CategoryController::class, 'editCategory'])->name('admin.editCategory');
    Route::put('/admin/categories/{id}', [CategoryController::class, 'updateCategory'])->name('admin.updateCategory');
    Route::delete('/admin/categories/{id}', [CategoryController::class, 'deleteCategory'])->name('admin.deleteCategory');
});

Route::middleware(['auth','role:user'])->group(function () {
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
    Route::get('/student/courses/{id}', [StudentController::class, 'showCourse'])->name('student.showCourse');
});

Route::middleware(['auth','role:agent'])->group(function () {
    Route::get('/agent', [AgentController::class, 'index'])->name('agent.dashboard');
    Route::get('/agent/courses', [AgentController::class, 'showCourses'])->name('agent.courses');
    Route::get('/agent/reclamations', [AgentController::class, 'showReclamations'])->name('agent.reclamations');
});