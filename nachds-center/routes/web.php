<?php
//require '../app/Http/Controllers/publicControllers/AlbumsController.php'; 

use App\Http\Controller\publicControllers\AlbumsController;
use App\Http\Controllers\publicControllers\FaqsController;
use App\Http\Controllers\publicControllers\ActualitesController;
use App\Http\Controllers\publicControllers\EvenementsController;
use App\Http\Controllers\publicControllers\IndexController;
use App\Http\Controllers\MailerController;
use App\Models\Album;
/* use App\Http\Controller\publicControllers\AlbumsController; */
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* public interface */
Route::get('about_us', function () {
    return view('public_interface/about_us');
});

Route::get('contact_us', function () {
    return view('public_interface/contact_us');
});

Route::get('espace_staff', function () {
    return view('public_interface/espace_staff');
});


Route::get('faqs',[FaqsController::class, 'show'])->name('faqs'); 


Route::get('forgot_password', function () {
    return view('public_interface/forgot_password');
});

Route::get('event_single_view/{id}',[EvenementsController::class,'showById'])->name('event_single_view'); 
Route::get('event',[EvenementsController::class, 'show'])->name('event'); 

Route::get('gallery',[AlbumsController::class, 'show'])->name('gallery');
Route::get('gallery_single_view/{id}',[AlbumsController::class,'showById'])->name('gallery_single_view'); 

Route::get('index',[IndexController::class, 'show'])->name('indexEnseignant'); 
Route::get('video_pub_detail/{id}',[IndexController::class,'showById'])->name('video_pub_detail'); 

Route::get('news_single_view/{id}',[ActualitesController::class,'showById'])->name('news_detail'); 
Route::get('news',[ActualitesController::class, 'show'])->name('news'); 

Route::get('search_result_formation', function () {
    return view('public_interface/search_result_formation');
});

Route::get('sign_up_steps', function () {
    return view('public_interface/sign_up_steps');
});





/* student */
Route::get('forgot_password', function () {
    return view('student/forgot_password');
});

Route::get('student_list_eleve', function () {
    return view('student/list_eleve');
});

Route::get('student_search_result', function () {
    return view('student/search_result');
});

Route::get('sign_in_student', function () {
    return view('student/sign_in_student');
});

Route::get('student_course_detail', function () {
    return view('student/student_course_detail');
});

Route::get('student_dashboard', function () {
    return view('student/student_dashboard');
});

Route::get('student_payout', function () {
    return view('student/student_payout');
});

Route::get('student_profile_view', function () {
    return view('student/student_profile_view');
});

Route::get('student_schedule', function () {
    return view('student/student_schedule');
});

/* teacher */
Route::get('create_new_chapter', function () {
    return view('teacher/create_new_chapter');
});

Route::get('create_new_course', function () {
    return view('teacher/create_new_course');
});

Route::get('explore', function () {
    return view('teacher/explore');
});

Route::get('forgot_password', function () {
    return view('teacher/forgot_password');
});

Route::get('group', function () {
    return view('teacher/group');
});

Route::get('instructor_courses', function () {
    return view('teacher/instructor_courses');
});

Route::get('instructor_dashboard', function () {
    return view('teacher/instructor_dashboard');
});

Route::get('instructor_earning', function () {
    return view('teacher/instructor_earning');
});

Route::get('instructor_payout', function () {
    return view('teacher/instructor_payout');
});

Route::get('list_eleve', function () {
    return view('teacher/list_eleve');
});

Route::get('my_instructor_profile_view', function () {
    return view('teacher/my_instructor_profile_view');
});

Route::get('saved_courses', function () {
    return view('teacher/saved_courses');
});

Route::get('sign_in_teacher', function () {
    return view('teacher/sign_in_teacher');
});

Route::get('teacher_schedule', function () {
    return view('teacher/teacher_schedule');
});

/*mailer*/
Route::get("email", [MailerController::class, "email"])->name("email");

Route::post("send-email", [MailerController::class, "composeEmail"])->name("send-email");












