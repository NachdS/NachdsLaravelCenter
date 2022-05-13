<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use App\Models\Enseignant;
use App\Models\Groupe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherSheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    public function show(Request $request)
    {
        $groupes = Groupe::where('groupes.enseignant_id', @Auth::user()->id)->get();
        return view('teacher.teacher_schedule', compact(
                'groupes'
            )
        );
    }

}
