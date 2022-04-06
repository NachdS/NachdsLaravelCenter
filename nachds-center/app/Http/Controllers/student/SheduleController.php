<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Enseignant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\salle;
use App\Models\Horaire;
use App\Models\Seance;

class SheduleController extends Controller
{
     public function show() {
    
        $enseignant = Enseignant::find(@Auth::user()->id);
        
       
        return view('student.student_list_eleve', compact('amisGroupe'));
} 

}
