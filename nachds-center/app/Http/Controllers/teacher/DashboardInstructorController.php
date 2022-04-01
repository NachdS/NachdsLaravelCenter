<?php

namespace App\Http\Controllers\teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardInstructorController extends Controller {
  public function __construct() {
    $this->middleware('auth');
  }
  public function dashboard() {
    return view('teacher.instructor_dashboard');
  }
}