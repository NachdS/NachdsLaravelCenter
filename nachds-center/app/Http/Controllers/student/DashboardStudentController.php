<?php

namespace App\Http\Controllers\student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Candidat;
use App\Models\Session;
use App\Models\Tuteur;
use App\Models\User;
use App\Models\Groupe;
use App\Models\Cour;
use App\Models\Formation;

class DashboardStudentController extends Controller {
  public function __construct() {
    $this->middleware('auth');
  }
  public function index(User $user, Candidat $candidats , Tuteur $tuteurs , Groupe $groupes , Cour $cours, Session $sessions, Formation $formations) {

             $groupe = Groupe::join('inscriptions', 'inscriptions.groupe_id', '=', 'groupes.id')
             ->where('inscriptions.candidat_id',@Auth::user()->id)
             ->first(); 

             $session = Session::join('inscriptions', 'inscriptions.session_id', '=', 'sessions.id')
             ->where('inscriptions.candidat_id',@Auth::user()->id)
             ->first();

              $cours = Cour::join('groupes', 'groupes.id', '=', 'cours.groupe_id')
             ->join('inscriptions', 'inscriptions.groupe_id' , '=','groupes.id')
             ->where('inscriptions.candidat_id',@Auth::user()->id)
             ->first(); 

             $formation = Formation::join('inscriptions', 'inscriptions.formation_id', '=', 'formations.id')
             ->where('inscriptions.candidat_id',@Auth::user()->id)
             ->orderBy('formations.id', 'DESC')
             ->limit(8)
             ->get();

             $totalCours= $cours->count();   
 
    return view('student.student_dashboard', compact('user','groupe','session','totalCours','formation'));
  }

  /*public function showById($id) 
  {
             $detailFormation = Formation::where('id', $id)->first();
             return view('student.student_course_detail', compact('detailFormation'));
  }*/
}