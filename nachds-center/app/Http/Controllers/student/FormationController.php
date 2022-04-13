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

            $allformations = Formation::join('inscriptions', 'inscriptions.formation_id', '=', 'formations.id')
            ->where('inscriptions.candidat_id',@Auth::user()->id)
            ->orderBy('formations.id', 'DESC')
            ->paginate(7);

            //dd($allformations);

            
            return view('student.search_result', compact('allformations'));
        }

        public function showById($id) 
        {
                   $detailFormation = Formation::where('id', $id)->first();

                   $cours = Cour::join('groupes', 'cours.groupe_id', '=', 'groupes.id')
                   ->join('inscriptions', 'groupes.id', '=', 'inscriptions.groupe_id')
                   ->join('formations', 'formations.id', '=', 'groupes.formation_id')
                   ->where('inscriptions.candidat_id' ,@Auth::user()->id )
                   ->where('formations.id',$id)
                   ->get();

                   dd($cours);

                   return view('student.student_course_detail', compact('detailFormation','cours'));
        }
}
