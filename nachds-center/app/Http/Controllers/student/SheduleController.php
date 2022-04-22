<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Candidat;
use Illuminate\Support\Facades\Auth;

class SheduleController extends Controller
{
    public function show()
    {
        $candidat = Candidat::find(@Auth::user()->id);

        return view('student.student_schedule', compact('candidat'));
    }

}


