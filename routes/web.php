<?php

use App\Http\Controllers\AbroadController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContestController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\DashboardController as StudentDashboardController;
use App\Http\Controllers\Admin\ExamController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\FrontContestController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\PracticeRoomController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\WarningController;
use Illuminate\Support\Facades\Route;

// Admin
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
/*Route::get('/chua-dang-nhap', [AuthController::class, function () {
    return view('student.not_log_in');
}])->name('not.login');*/

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('exams', ExamController::class);
    Route::resource('contests', ContestController::class);
});

// Student
Route::get('/', [StudentDashboardController::class, 'index'])->name('home'); // Trang chủ
Route::get('/de-thi', [ExerciseController::class, 'index'])->name('exam.index'); // Trang đề thi
Route::get('/luyen-tap', [PracticeController::class, 'index'])->name('practice.index'); // Trang luyện tập
Route::get('/doi-tac', [PartnerController::class, 'index'])->name('partner.index'); // Trang luyện tập
Route::get('/du-hoc', [AbroadController::class, 'index'])->name('abroad.index'); // Trang luyện tập
Route::get('/cuoc-thi', [FrontContestController::class, 'index'])->name('contest.index'); // Trang cuộc thi
Route::get('/cuoc-thi/{slug}', [FrontContestController::class, 'detail'])->name('contest.detail'); // Trang cuộc thi chi tiết
Route::get('/cuoc-thi/{slug}/bang-xep-hang', [FrontContestController::class, 'rank'])->name('contest.detail.rank'); // Trang cuộc thi chi tiết

Route::get('/phong-luyen-tap', [PracticeRoomController::class, 'index'])->name('practice_room.index');
Route::get('/phong-luyen-tap/{slug}/', [PracticeRoomController::class, 'detail'])->name('practice_room.detail');
Route::get('/phong-luyen-tap/{slug}/bang-xep-hang', [PracticeRoomController::class, 'rank'])->name('practice_room.detail.rank');

Route::get('/lam-bai', [ExerciseController::class, 'startTest'])->name('test');
Route::post('/lam-bai/tinh-diem', [ExerciseController::class, 'checkAnswer'])->name('test.score');

Route::get('/khao-sat-first', [SurveyController::class, 'first'])->name('survey.first');
Route::get('/khao-sat-second', [SurveyController::class, 'second'])->name('survey.second');
Route::get('/khao-sat-third', [SurveyController::class, 'third'])->name('survey.third');
Route::get('/khao-sat-fourth', [SurveyController::class, 'fourth'])->name('survey.fourth');

Route::get('/warning', [WarningController::class, 'index'])->name('survey.index');



