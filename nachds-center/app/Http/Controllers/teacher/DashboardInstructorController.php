<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use App\Models\Candidat;
use App\Models\Cour;
use App\Models\Enseignant;
use App\Models\Groupe;
use App\Models\Inscription;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardInstructorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(User $user, Enseignant $enseignants, Groupe $groupes, Candidat $candidats, Cour $cours, Inscription $inscriptions)
    {

        $groupe = Enseignant::join('groupes', 'groupes.enseignant_id', '=', 'enseignants.id')
            ->join('users', 'users.id', '=', 'enseignants.id')
            ->where('users.id', @Auth::user()->id)
            ->get();
        $condidat = Candidat::join('inscriptions', 'inscriptions.candidat_id', '=', 'candidats.id')
            ->join('groupes', 'groupes.id', '=', 'inscriptions.groupe_id')
            ->where('groupes.enseignant_id', @Auth::user()->id)
            ->get();

        $cours = Cour::join('groupes', 'cours.groupe_id', '=', 'groupes.id')
            ->where('groupes.enseignant_id', @Auth::user()->id)
            ->get();

        $coursprof = Cour::join('groupes', 'cours.groupe_id', '=', 'groupes.id')
            ->join('enseignants', 'enseignants.id', '=', 'groupes.enseignant_id')
            ->join('users', 'users.id', '=', 'enseignants.id')
            ->where('users.id', @Auth::user()->id)
            ->select('cours.*')
            ->paginate(4);

        $totalGroupes = $groupe->count();
        $totalCondidats = $condidat->count();
        $totalCours = $cours->count();
        $page ='/instructor_dashboard';

        return view('teacher.instructor_dashboard', compact('user', 'totalGroupes', 'totalCours', 'totalCondidats', 'coursprof','page'));
    }
}
