<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherSheduleController extends Controller
{

    public function show()
    {
        return view('teacher.teacher_schedule');
    }
}
