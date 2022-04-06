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
use PHPUnit\TextUI\XmlConfiguration\Group;

class FormationController extends Controller
{
        public function show(Formation $formations, Enseignant $enseignants, User $users, Groupe $groupes, Niv $nivs) 
        {
            $allformations = Formation::get();

           /*  $allformations = Formation::join('nivs','nivs.id','=','formations.id')
             ->get(); */

            /*  $allformations = Formation::join('groupes','groupes.formation_id','=','formations.id')
             ->join('enseignants', 'groupes.enseignant_id', '=', 'enseignants.id')
            ->join('users','users.id',"=","enseignants.id")
            ->get();  */

            
            return view('student.search_result', compact('allformations'));
        }
}
