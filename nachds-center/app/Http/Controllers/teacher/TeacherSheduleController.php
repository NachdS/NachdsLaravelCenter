<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enseignant;
use Illuminate\Support\Facades\Auth;

class TeacherSheduleController extends Controller
{
    public function show()
    {

        $enseignant = Enseignant::find(@Auth::user()->id);

        return view('teacher.teacher_schedule');
    }

}

