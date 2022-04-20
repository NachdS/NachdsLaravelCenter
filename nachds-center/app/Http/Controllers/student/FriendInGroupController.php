<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Candidat;
use App\Models\Groupe;
use App\Models\Inscription;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FriendInGroupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show(User $user, Candidat $candidats, Inscription $inscription, Groupe $groupe)
    {

        $groupes = Inscription::where('candidat_id', @Auth::user()->id)->select('groupe_id')->get();

        $amisGroupe = Candidat::join('inscriptions', 'inscriptions.candidat_id', '=', 'candidats.id')
            ->join('users', 'users.id', '=', 'candidats.id')
            ->whereIn('inscriptions.groupe_id', $groupes)
            ->select('users.*')
            ->distinct('users.id')
            ->get();
        // dd($amisGroupe);
        return view('student.student_list_eleve', compact('amisGroupe'));
    }
}
