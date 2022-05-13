<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Candidat;
use App\Models\Cour;
use App\Models\Groupe;
use App\Models\Session;
use App\Models\Tuteur;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ProfileStudenteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show candidats data
     *
     * @param Candidats $candidats
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Candidat $candidats, Tuteur $tuteurs, Groupe $groupes, Cour $cours, Session $sessions)
    {
        $user = Candidat::join('users', 'candidats.id', 'users.id')
            ->where('candidats.id', Auth::user()->id)
            ->first();

        $groupe = Groupe::join('inscriptions', 'inscriptions.groupe_id', '=', 'groupes.id')
            ->where('inscriptions.candidat_id', @Auth::user()->id)
            ->get();

        $session = Session::join('inscriptions', 'inscriptions.session_id', '=', 'sessions.id')
            ->where('inscriptions.candidat_id', @Auth::user()->id)
            ->where('inscriptions.created_at', '=' ,Carbon::today())
            ->first();

        $cours = Cour::join('groupes', 'groupes.id', '=', 'cours.groupe_id')
            ->join('inscriptions', 'inscriptions.groupe_id', '=', 'groupes.id')
            ->where('inscriptions.candidat_id', @Auth::user()->id)
            ->first();

        $totalCours = $cours->count();

        return view('student.student_profile_view', compact('user', 'groupe', 'session', 'totalCours'));
    }
}
