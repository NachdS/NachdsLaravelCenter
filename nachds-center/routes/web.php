<?php

use App\Http\Controllers\MailerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| public Controllers
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\publicControllers\AlbumsController;
use App\Http\Controllers\publicControllers\FaqsController;
use App\Http\Controllers\publicControllers\ActualitesController;
use App\Http\Controllers\publicControllers\EvenementsController;
use App\Http\Controllers\publicControllers\IndexController;
use App\Http\Controllers\publicControllers\ContactController;
use App\Http\Controllers\publicControllers\AboutUsController;
use App\Http\Controllers\publicControllers\FormationPubliqueController;
/*
|--------------------------------------------------------------------------
| Student Controllers
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\student\DashboardStudentController;
use App\Http\Controllers\teacher\ProfileTeacherController;
use App\Http\Controllers\student\ProfileStudenteController;
use App\Http\Controllers\student\FriendInGroupController;
use App\Http\Controllers\student\FormationController;
/*
|--------------------------------------------------------------------------
| Teacher Controllers
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\teacher\DashboardInstructorController;
use App\Http\Controllers\teacher\TeacherGroupeController;
use App\Http\Controllers\teacher\TeacherEarningController;
use App\Http\Controllers\teacher\CourController;
use App\Http\Controllers\teacher\ChapitreController;


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

Route::get('about_us',[AboutUsController::class, 'show'])->name('about_us'); 

Route::get('contact_us',[ContactController::class, 'show'])->name('contact_us'); 

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


Route::get('index',[IndexController::class, 'show'])->name('index'); 
Route::get('video_pub_detail/{id}',[IndexController::class,'showById'])->name('video_pub_detail'); 

Route::get('news_single_view/{id}',[ActualitesController::class,'showById'])->name('news_detail'); 
Route::get('news',[ActualitesController::class, 'show'])->name('news'); 

Route::get('search_result_formation',[FormationPubliqueController::class, 'show'])->name('search_result_formation'); 

Route::get('sign_up_steps', function () {
    return view('public_interface/sign_up_steps');
});





/* student */
Route::get('forgot_password', function () {
    return view('student/forgot_password');
});

/* Route::get('student_list_eleve', function () {
    return view('student/list_eleve');
}); */

Route::get('student_list_eleve',[FriendInGroupController::class,'show'])->name('student_list_eleve'); 

/* Route::get('student_search_result', function () {
    return view('student/search_result');
});
 */
Route::get('student_search_result',[FormationController::class,'show'])->name('student_search_result'); 

/* Route::get('student_course_detail', function () {
    return view('student/student_course_detail');
}); */

Route::get('student_course_detail/{groupe_id}',[FormationController::class,'showById'])->name('student_course_detail'); 



Route::get('student_payout', function () {
    return view('student/student_payout');
});

Route::get('student_profile_view',[ProfileStudenteController::class,'show'])->name('student_profile_view'); 

Route::get('student_schedule', function () {
    return view('student/student_schedule');
});

/* teacher */


Route::get('create_new_chapter/{id}',[CourController::class,'showChapitresById'])->name('create_new_chapter'); 
Route::get('create_new_course',[CourController::class,'create'])->name('create_new_course'); 
Route::post('store_new_course',[CourController::class,'store'])->name('store_new_course'); 
Route::get('delete_new_course/{id}',[CourController::class,'destroy'])->name('delete_new_course'); 
Route::get('edit_new_course/{id}',[CourController::class,'edit'])->name('edit_new_course'); 
Route::put('update_new_course',[CourController::class,'update'])->name('update_new_course'); 

Route::post('store_new_chapter',[ChapitreController::class,'store'])->name('store_new_chapter');
/*Route::get('create_chapter',[CourController::class,'create'])->name('create_chapter'); */
Route::get('delete_new_chapter/{id}',[ChapitreController::class,'destroy'])->name('delete_new_chapter'); 
Route::get('edit_new_chapter/{id}',[ChapitreController::class,'edit'])->name('edit_new_chapter'); 
Route::put('update_new_chapter/{id}',[ChapitreController::class,'update'])->name('update_new_chapter'); 

Route::get('explore', function () {
    return view('teacher/explore');
});

Route::get('forgot_password', function () {
    return view('teacher/forgot_password');
});

/* Route::get('group', function () {
    return view('teacher/group');
}); */

Route::get('group',[TeacherGroupeController::class,'show'])->name('group'); 

Route::get('instructor_courses',[CourController::class,'index'])->name('instructor_courses'); 
/* Route::get('instructor_courses',[CourController::class,'destroy']);  */

/* Route::resource('cour', CourController::class); */

Route::get('instructor_earning',[TeacherEarningController::class,'show'])->name('instructor_earning'); 

Route::get('list_eleve', function () {
    return view('teacher/list_eleve');
});

Route::get('my_instructor_profile_view',[ProfileTeacherController::class,'show'])->name('my_instructor_profile_view'); 

Route::get('saved_courses', function () {
    return view('teacher/saved_courses');
});



Route::get('teacher_schedule', function () {
    return view('teacher/teacher_schedule');
});

/*mailer*/
Route::get("email", [MailerController::class, "email"])->name("email");

Route::post("send-email", [MailerController::class, "composeEmail"])->name("send-email");






/**********auth route  **************/
Auth::routes();

Route::get('sign_in_student', [App\Http\Controllers\Auth\LoginController::class, 'showStudentForm']);
Route::get('sign_in_teacher', [App\Http\Controllers\Auth\LoginController::class, 'showTeacherForm']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, "logout"]);

Route::get('instructor_dashboard', [DashboardInstructorController::class, "dashboard"])->middleware('role_id:3');
Route::get('student_dashboard', [DashboardStudentController::class, "index"])->middleware('role_id:4');
