<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Enseignant;
use Illuminate\Support\Facades\Auth;

class SheduleController extends Controller
{
    public function show()
    {

        $enseignant = Enseignant::find(@Auth::user()->id);

        return view('student.student_list_eleve', compact('amisGroupe'));
    }

}
