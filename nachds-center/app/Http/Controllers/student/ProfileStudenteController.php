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


class ProfileStudenteController extends Controller
{
        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct() {
            $this->middleware('auth');
          }
    

        /**
        * Show candidats data
        * 
        * @param Candidats $candidats
        * 
        * @return \Illuminate\Http\Response
        */
        public function show(User $user, Candidat $candidats , Tuteur $tuteurs , Groupe $groupes , Cour $cours, Session $sessions) 
        {
            $user = Candidat::join('users', 'candidats.id', 'users.id')
            ->where('candidats.id',Auth::user()->id)
            ->first();

             $groupe = Groupe::join('inscriptions', 'inscriptions.groupe_id', '=', 'groupes.id')
             ->where('inscriptions.candidat_id',@Auth::user()->id)
             ->first(); 

             $session = Session::join('inscriptions', 'inscriptions.session_id', '=', 'sessions.id')
             ->where('inscriptions.candidat_id',@Auth::user()->id)
             ->first();

            
            /*  $cours = Cour::join('groupes', 'cours.groupe_id', '=', 'groupes.id')
             ->join('inscriptions.groupe_id','=', 'groupes.id')
             ->where('inscriptions.candidat_id',@Auth::user()->id)
             ->get();   */

             $totalCours= $cours->count();


            return view('student.student_profile_view', compact('user','session','totalCours'));
        }
}
