<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DiplomaController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\VideoController;
use App\Models\Mycourses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */
Auth::routes();

Route::get('/', function () {
    return view('index');
})->name('home.index');

Route::get('/home', function () {
    return view('index');
})->name('home.index');

Route::get('/about', function () {
    return view('about');
})->name('about.index');

Route::controller(trackController::class)->group(function () {
    Route::get('/tracks', 'index')->name('track.index');
    Route::get('/tracks/course/{id}', 'show')->name('courses.index');
});
Route::controller(diplomaController::class)->group(function () {
    Route::get('/diploma', 'index')->name('diploma.index');
    Route::get('/diploma/roadmap/{id}', 'show')->name('roadmap.index');
});
Route::controller(courseController::class)->group(function () {
    Route::get('/course/{id}', 'index')->name('lesson.index');
    Route::get('join/{id}', 'enroll')->name('enroll')->middleware('auth');
});

// authentication routes
Route::middleware('auth')->group(function () {
    Route::controller(videoController::class)->group(function () {
        Route::get('/view/{name}/{id}', 'show')->name('show.index');
        Route::get('/lesson/{id}', 'index')->name('view.index');
        Route::get('/lesson/{courseId}/{videoId}', 'show')->name('video.showOne');
    });


    Route::controller(ExamController::class)->group(function () {
        Route::get('myexam/{id}/{ques_num}', 'index')->name('exam.show')->middleware('done');
        Route::post('myexam/{id}/{ques_num}/save', 'saveAnswer')->name('exam.save');
        Route::get('myexam/{id}/{ques_num}/next', 'next')->name('exam.next');
        Route::get('myexam/{id}/{ques_num}/previous', 'previous')->name('exam.previous');
        Route::post('/exam/save_answers/{courseId}', 'saveAnswers')->name('exam.save_answers');
        Route::get('exam/score/{courseId}', function () {
            $myCourses = Mycourses::where('userId', auth()->user()->id)->get();
            return view('exam.score')->with('degree', $myCourses);
        })->name('exam.score');

    });
});

Route::post('/reg', [RegisterController::class, 'create'])->name('reg.index');
