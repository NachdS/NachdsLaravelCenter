<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Chapitre;
use App\Models\Cour;
use App\Models\Groupe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourChapitreController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show(User $user, Groupe $groupes)
    {
        $chapitres = Chapitre::join('cours', 'cours.id', '=', 'chapitres.cour_id')
            ->join('groupes', 'cours.groupe_id', '=', 'groupes.id')
            ->join('inscriptions', 'groupes.id', '=', 'inscriptions.groupe_id')
            ->join('candidats', 'inscriptions.candidat_id', '=', 'candidats.id')
            ->join('users', 'users.id', '=', 'candidats.id')
            ->where('users.id', @Auth::user()->id)
            ->select('chapitres.*')
            ->get();

        $cours = Cour::join('groupes', 'cours.groupe_id', '=', 'groupes.id')
            ->join('inscriptions', 'groupes.id', '=', 'inscriptions.groupe_id')
            ->join('candidats', 'inscriptions.candidat_id', '=', 'candidats.id')
            ->join('users', 'users.id', '=', 'candidats.id')
            ->where('users.id', @Auth::user()->id)
            ->select('cours.*')
            ->get();
        $page ='/create_new_chapter';

        return view('student.create_new_chapter', compact('chapitres', 'cours', 'page'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
