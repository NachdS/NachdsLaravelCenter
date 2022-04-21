<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Cour;
use App\Models\Enseignant;
use App\Models\Formation;
use App\Models\Groupe;
use App\Models\Niv;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            ->join('nivs','formations.niveau_id','nivs.id')
            ->where('inscriptions.candidat_id', @Auth::user()->id)
            ->orderBy('formations.id', 'DESC')
            ->select(
                'formations.*',
                'nivs.*',
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
            ->where('inscriptions.candidat_id', @Auth::user()->id)
            ->where('cours.groupe_id', $groupe_id)
            ->get('cours.*');
        return view('student.student_course_detail', compact('groupe_info', 'cours'));
    }

    public function formationGrp(Request $request)
    {
        $mat_id = $request->matiere_id;
        $niv_id = $request->niveau_id;
        $type = $request->type;

        if ($niv_id != "" && $mat_id != "" && $type != "" ) {

            //echo "3 are selected";
            $data = Formation::
                join('groupes', 'formations.id', 'groupes.formation_id')
                ->join('inscriptions', 'groupes.id', 'inscriptions.groupe_id')
                ->join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs','formations.niveau_id','nivs.id')
                ->where('inscriptions.candidat_id', @Auth::user()->id)
                ->where('nivs.id', $niv_id)
                ->where('matieres.id', $mat_id)
                ->where('formations.type', $type)
                ->orderBy('formations.id', 'DESC')
                ->select(
                    'formations.*',
                    'nivs.*',
                    'groupes.designation as groupe',
                    'groupes.id as groupe_id',
                    'matieres.designation as matiere',
                    'inscriptions.prix_total',
                    'inscriptions.prix_acompte',
                    'matieres.id as matiere_id',
                )
                ->paginate(7);

        }  else if ($niv_id != "" && $mat_id != "") {
            //echo "mat is selected";
            $data = Formation::
                join('groupes', 'formations.id', 'groupes.formation_id')
                ->join('inscriptions', 'groupes.id', 'inscriptions.groupe_id')
                ->join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs','formations.niveau_id','nivs.id')
                ->where('inscriptions.candidat_id', @Auth::user()->id)
                ->where('nivs.id', $niv_id)
                ->where('matieres.id', $mat_id)
                ->orderBy('formations.id', 'DESC')
                ->select(
                    'formations.*',
                    'nivs.*',
                    'groupes.designation as groupe',
                    'groupes.id as groupe_id',
                    'matieres.designation as matiere',
                    'inscriptions.prix_total',
                    'inscriptions.prix_acompte',
                    'matieres.id as matiere_id',
                )
                ->paginate(7);

        }
        else if ($mat_id != "" && $type != "") {
            //echo "mat is selected";
            $data = Formation::
                join('groupes', 'formations.id', 'groupes.formation_id')
                ->join('inscriptions', 'groupes.id', 'inscriptions.groupe_id')
                ->join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs','formations.niveau_id','nivs.id')
                ->where('inscriptions.candidat_id', @Auth::user()->id)
                ->where('matieres.id', $mat_id)
                ->where('formations.type', $type)
                ->orderBy('formations.id', 'DESC')
                ->select(
                    'formations.*',
                    'nivs.*',
                    'groupes.designation as groupe',
                    'groupes.id as groupe_id',
                    'matieres.designation as matiere',
                    'inscriptions.prix_total',
                    'inscriptions.prix_acompte',
                    'matieres.id as matiere_id',
                )
                ->paginate(7);

        }
        else if ($niv_id != "" && $type != "") {
            //echo "mat is selected";
            $data = Formation::
                join('groupes', 'formations.id', 'groupes.formation_id')
                ->join('inscriptions', 'groupes.id', 'inscriptions.groupe_id')
                ->join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs','formations.niveau_id','nivs.id')
                ->where('inscriptions.candidat_id', @Auth::user()->id)
                ->where('nivs.id', $niv_id)
                ->where('formations.type', $type)
                ->orderBy('formations.id', 'DESC')
                ->select(
                    'formations.*',
                    'nivs.*',
                    'groupes.designation as groupe',
                    'groupes.id as groupe_id',
                    'matieres.designation as matiere',
                    'inscriptions.prix_total',
                    'inscriptions.prix_acompte',
                    'matieres.id as matiere_id',
                )
                ->paginate(7);

        }
        else if ($mat_id != "") {
            //echo "mat is selected";
            $data = Formation::
                join('groupes', 'formations.id', 'groupes.formation_id')
                ->join('inscriptions', 'groupes.id', 'inscriptions.groupe_id')
                ->join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs','formations.niveau_id','nivs.id')
                ->where('inscriptions.candidat_id', @Auth::user()->id)
                ->where('matieres.id', $mat_id)
                ->orderBy('formations.id', 'DESC')
                ->select(
                    'formations.*',
                    'nivs.*',
                    'groupes.designation as groupe',
                    'groupes.id as groupe_id',
                    'matieres.designation as matiere',
                    'inscriptions.prix_total',
                    'inscriptions.prix_acompte',
                    'matieres.id as matiere_id',
                )
                ->paginate(7);

        } else if ($niv_id != "") {
            //echo "grp is selected";
            $data = Formation::
                join('groupes', 'formations.id', 'groupes.formation_id')
                ->join('inscriptions', 'groupes.id', 'inscriptions.groupe_id')
                ->join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs','formations.niveau_id','nivs.id')
                ->where('inscriptions.candidat_id', @Auth::user()->id)
                ->where('matieres.id', $niv_id)
                ->orderBy('formations.id', 'DESC')
                ->select(
                    'formations.*',
                    'nivs.*',
                    'groupes.designation as groupe',
                    'groupes.id as groupe_id',
                    'matieres.designation as matiere',
                    'inscriptions.prix_total',
                    'inscriptions.prix_acompte',
                    'matieres.id as matiere_id',
                )
                ->paginate(7);
        }else if ($type != "") {
            //echo "type is selected";
            $data = Formation::
                join('groupes', 'formations.id', 'groupes.formation_id')
                ->join('inscriptions', 'groupes.id', 'inscriptions.groupe_id')
                ->join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs','formations.niveau_id','nivs.id')
                ->where('inscriptions.candidat_id', @Auth::user()->id)
                ->where('formations.type', $type)
                ->orderBy('formations.id', 'DESC')
                ->select(
                    'formations.*',
                    'nivs.*',
                    'groupes.designation as groupe',
                    'groupes.id as groupe_id',
                    'matieres.designation as matiere',
                    'inscriptions.prix_total',
                    'inscriptions.prix_acompte',
                    'matieres.id as matiere_id',
                )
                ->paginate(7);
        } else {
            //echo "nothing is slected";
            return "<h1 align='center'>Please select atleast one filter from dropdown</h1>";

        }

        if (count($data) == "0") {
            echo "<h1 align='center'>Groupe not found</h1>";
        } else {
            return view('student.search_result_filtre', [
                'data' => $data,
            ]);
        }

    }

}
