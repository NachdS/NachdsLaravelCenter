<?php

namespace App\Http\Controllers\publicControllers;

use App\Http\Controllers\Controller;
use App\Models\Enseignant;
use App\Models\Formation;
use App\Models\Groupe;
use App\Models\Niv;
use App\Models\User;
use Illuminate\Http\Request;

class FormationPubliqueController extends Controller
{

    public function show(Formation $formations, Enseignant $enseignants, User $users, Groupe $groupes, Niv $nivs)
    {
        $allformations = Formation::paginate(7);

        return view('public_interface.search_result_formation', compact('allformations'));
    }

    public function formationFiltre(Request $request)
    {
        $mat_id = $request->matiere_id;
        $grp_id = $request->groupe_id;
        $niv_id = $request->niv_id;
        $type = $request->type;

        if ($grp_id != "" && $mat_id != "") {

            //echo "3 are selected";
            $data = Formation::join('groupes', 'formations.id', 'groupes.formation_id')
                ->join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs', 'formations.niveau_id', 'nivs.id')
                ->where('groupes.id', $grp_id)
                ->where('matieres.id', $mat_id)
                ->where('formations.type', $type)
                ->orderBy('formations.id', 'DESC')
                ->select(
                    'formations.*',
                    'groupes.designation as groupe',
                    'groupes.id as groupe_id',
                    'matieres.designation as matiere',
                    'matieres.id as matiere_id',
                    'nivs.*'
                )
                ->paginate(7);

        } else if ($mat_id != "") {
            //echo "mat is selected";
            $data = Formation::join('groupes', 'formations.id', 'groupes.formation_id')
                ->join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs', 'formations.niveau_id', 'nivs.id')
                ->where('matieres.id', $mat_id)
                ->orderBy('formations.id', 'DESC')
                ->select(
                    'formations.*',
                    'groupes.designation as groupe',
                    'groupes.id as groupe_id',
                    'matieres.designation as matiere',
                    'matieres.id as matiere_id',
                    'nivs.*'
                )
                ->paginate(7);

        } else if ($grp_id != "") {
            //echo "grp is selected";
            $data = Formation::join('groupes', 'formations.id', 'groupes.formation_id')
                ->join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs', 'formations.niveau_id', 'nivs.id')
                ->where('groupes.id', $grp_id)
                ->orderBy('formations.id', 'DESC')
                ->select(
                    'formations.*',
                    'groupes.designation as groupe',
                    'groupes.id as groupe_id',
                    'matieres.designation as matiere',
                    'matieres.id as matiere_id',
                    'nivs.*'
                )
                ->paginate(7);
        } else if ($type != "") {
            //echo "type is selected";
            $data = Formation::join('groupes', 'formations.id', 'groupes.formation_id')
                ->join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs', 'formations.niveau_id', 'nivs.id')
                ->where('formations.type', $type)
                ->orderBy('formations.id', 'DESC')
                ->select(
                    'formations.*',
                    'groupes.designation as groupe',
                    'groupes.id as groupe_id',
                    'matieres.designation as matiere',
                    'matieres.id as matiere_id',
                    'nivs.*'
                )
                ->paginate(7);
        } else {
            //echo "nothing is slected";
            return "<h1 align='center'>Please select atleast one filter from dropdown</h1>";

        }

        if (count($data) == "0") {
            echo "<h1 align='center'>no products found under this Category</h1>";
        } else {
            return view('public_interface.search_result_formation_filter', [
                'data' => $data,
            ]);
        }

    }
}
