<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use App\Models\Enseignant;
use App\Models\Groupe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherSheduleController extends Controller
{
    public function show(Request $request)
    {
        //$enseignant_selected = Enseignant::find(@Auth::user()->id);
        //$groupe_selected = $request->input('groupe_id');
        $groupes = Groupe::where('groupes.enseignant_id', @Auth::user()->id)->get();
        return view('teacher.teacher_schedule', compact(
                //'enseignant_selected',
                'groupes'
            )
        );
    }

}
