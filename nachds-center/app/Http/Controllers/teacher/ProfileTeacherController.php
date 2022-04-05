<?php

namespace App\Http\Controllers\teacher;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Enseignant;
use App\Models\User;
use App\Models\Groupe;
use App\Models\Cour;
use App\Models\Candidat;
use App\Models\Tuteur;
use App\Models\Inscription;
use Illuminate\Http\Request;

class ProfileTeacherController extends Controller
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
        * Show enseignants data
        * 
        * @param Enseignants $enseignants
        * 
        * @return \Illuminate\Http\Response
        */
        public function show(User $user, Enseignant $enseignants , Groupe $groupes , Candidat $candidats, Cour $cours, Tuteur $tuteurs, Inscription $inscriptions) 
        {
            
            $user = Enseignant::find(Auth::user()->id);
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


            

            return view('teacher.my_instructor_profile_view', compact('user','totalGroupes','totalCours','totalCondidats'));
        }
}


