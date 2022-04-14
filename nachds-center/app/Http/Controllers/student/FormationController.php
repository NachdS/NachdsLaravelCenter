<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\Enseignant;
use App\Models\User;
use App\Models\Groupe;
use App\Models\Niv;
use App\Models\Chapitre;
use App\Models\Cour;
use App\Models\Inscription;
use PHPUnit\TextUI\XmlConfiguration\Group;

class FormationController extends Controller
{
        public function show(Formation $formations, Enseignant $enseignants, User $users, Groupe $groupes, Niv $nivs) 
        {
            //$allformations = Formation::paginate(7);

           /*  $allformations = Formation::join('nivs','nivs.id','=','formations.id')
             ->get(); */

            /*  $allformations = Formation::join('groupes','groupes.formation_id','=','formations.id')
             ->join('enseignants', 'groupes.enseignant_id', '=', 'enseignants.id')
            ->join('users','users.id',"=","enseignants.id")
            ->get();  */


            $allformations = Formation::
            join('groupes', 'formations.id', 'groupes.formation_id')
            ->join('inscriptions', 'groupes.id', 'inscriptions.groupe_id')
            ->join('matieres', 'formations.matiere_id', 'matieres.id')
            ->where('inscriptions.candidat_id',@Auth::user()->id)
            ->orderBy('formations.id', 'DESC')
            ->select(
              'formations.*',
              'groupes.designation as groupe',
              'groupes.id as groupe_id',
              'matieres.designation as matiere',
              'inscriptions.prix_total',
              'inscriptions.prix_acompte',
              )
            ->paginate(7);
              /*$allformations = Inscription::
                join('groupes', 'inscriptions.groupe_id', 'groupes.id')
                ->join('formations', 'groupes.formation_id', 'formations.id')
                ->where('inscriptions.candidat_id',@Auth::user()->id)
                ->orderBy('formations.id', 'DESC')
                ->select('formations.*')
                ->paginate(7);*/
            return view('student.search_result', compact('allformations'));
        }

        public function showById($groupe_id) 
        {
                  $groupe_info = Groupe::find($groupe_id);
                   $cours = Cour::join('groupes', 'cours.groupe_id', '=', 'groupes.id')
                   ->join('inscriptions', 'groupes.id', '=', 'inscriptions.groupe_id')
                   ->where('inscriptions.candidat_id' ,@Auth::user()->id )
                   ->where('cours.groupe_id', $groupe_id)
                   ->get();
                   return view('student.student_course_detail', compact('groupe_info','cours'));
        }
}
