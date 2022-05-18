<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Candidat;
use App\Models\Groupe;
use Illuminate\Support\Facades\Auth;

class SheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    public function show()
    {
        $groupes = Groupe::join('inscriptions', 'inscriptions.groupe_id', '=', 'groupes.id')
            ->where('inscriptions.candidat_id', @Auth::user()->id)
            ->get();
        $page ='/student_schedule';
        return view('student.student_schedule', compact('groupes','page'));
    }

}


