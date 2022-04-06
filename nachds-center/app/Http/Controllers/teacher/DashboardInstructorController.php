<?php

namespace App\Http\Controllers\teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Enseignant;
use App\Models\User;
use App\Models\Groupe;
use App\Models\Cour;
use App\Models\Candidat;
use App\Models\Inscription;


class DashboardInstructorController extends Controller {
  public function __construct() {
    $this->middleware('auth');
  }


  public function dashboard(User $user, Enseignant $enseignants , Groupe $groupes , Candidat $candidats, Cour $cours, Inscription $inscriptions) {

    $groupe = Enseignant::join('groupes', 'groupes.enseignant_id', '=', 'enseignants.id')
    ->join('users', 'users.id', '=', 'enseignants.id')
    ->where('users.id',@Auth::user()->id)
    ->get();
    $condidat = Candidat::join('inscriptions', 'inscriptions.candidat_id', '=', 'candidats.id')
    ->join('groupes','groupes.id' , '=', 'inscriptions.groupe_id')
    ->where('groupes.enseignant_id',@Auth::user()->id)
    ->get();

    $cours = Cour::join('groupes', 'cours.groupe_id', '=', 'groupes.id')
    ->where('groupes.enseignant_id',@Auth::user()->id)
    ->get();  

   $totalGroupes = $groupe->count();
   $totalCondidats = $condidat->count();
   $totalCours = $cours->count();

    return view('teacher.instructor_dashboard', compact('user','totalGroupes','totalCours','totalCondidats'));
  }
}