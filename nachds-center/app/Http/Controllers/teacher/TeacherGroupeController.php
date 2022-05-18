<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use App\Models\Candidat;
use App\Models\Enseignant;
use App\Models\Groupe;
use App\Models\GroupeIndivs;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TeacherGroupeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show(User $user, Enseignant $enseignants, Groupe $groupe, GroupeIndivs $groupeIndivs)
    {

        $allGroupe = Groupe::where('enseignant_id', @Auth::user()->id)->get();
        $totalGroupes = $allGroupe->count();

        $arr = [];
        foreach ($allGroupe as $g) {
            array_push($arr, $g->id);
        }

        $elevesGroupe = Candidat::join('inscriptions', 'inscriptions.candidat_id', '=', 'candidats.id')
            ->join('users', 'users.id', '=', 'candidats.id')
            ->join('groupes', 'groupes.id', '=', 'inscriptions.groupe_id')
            ->whereIn('inscriptions.groupe_id', $arr)
            ->get();

        $allCapacite = Groupe::where('enseignant_id', @Auth::user()->id)
            ->select('capacite')
            ->get();

        //$totalCapacité = $allCapacite->sum();
        $totalelevesGroupe = $elevesGroupe->count();

        $page ='/group';
        return view('teacher.group', compact('allGroupe', 'totalGroupes', 'totalelevesGroupe','page'));
    }

    public function showById($id)
    { 
        $candidats = Candidat::join('inscriptions', 'inscriptions.candidat_id', '=', 'candidats.id')
        ->join('users', 'users.id', '=', 'candidats.id')
        ->join('groupes', 'groupes.id', '=', 'inscriptions.groupe_id')
        ->where('inscriptions.groupe_id', $id)
        ->select('users.*')
        ->get();
        $page ='/group';
        return view('teacher.list_eleve', compact('candidats','page'));
    }
}
