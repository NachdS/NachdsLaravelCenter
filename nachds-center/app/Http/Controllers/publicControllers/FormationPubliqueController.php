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
        $allformations = Formation::join('matieres', 'formations.matiere_id', 'matieres.id')
        ->select('formations.*','matieres.designation as matiere')
        ->orderBy('formations.id', 'DESC')
        ->paginate(7);
        $page ='/search_result_formation';
        return view('public_interface.search_result_formation', compact('allformations','page'));
    }

    
    public function formationFiltre(Request $request)
    {
        $mat_id = $request->matiere_id;
        $niv_id = $request->niveau_id;
        $type = $request->type;
        $page ='/search_result_formation';

        if ($niv_id != "" && $mat_id != "" && $type != "" ) {

            //echo "3 are selected";
            $data = Formation::join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs','formations.niveau_id','nivs.id')
                ->where('nivs.id', $niv_id)
                ->where('matieres.id', $mat_id)
                ->where('formations.type', $type)
                ->select('formations.*','nivs.*','matieres.designation as matiere','formations.designation as formationsdes')
                ->orderBy('formations.id', 'DESC')
                ->paginate(7);
               

        }  else if ($niv_id == "" && $mat_id == "") {
            //echo "mat is selected";
            $data = Formation::join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs','formations.niveau_id','nivs.id')
                ->where('formations.type', $type)
                ->select('formations.*','nivs.*','matieres.designation as matiere','formations.designation as formationsdes')
                ->orderBy('formations.id', 'DESC')
                ->paginate(7);

        }
        else if ($mat_id == "" && $type == "") {
            //echo "mat is selected";
            $data = Formation::join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs','formations.niveau_id','nivs.id')
                ->where('nivs.id', $niv_id)
                ->select('formations.*','nivs.*','matieres.designation as matiere','formations.designation as formationsdes')
                ->orderBy('formations.id', 'DESC')
                ->paginate(7);

        }
        else if ($niv_id == "" && $type == "") {
            //echo "mat is selected";
            $data = Formation::join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs','formations.niveau_id','nivs.id')
                ->where('matieres.id', $mat_id)
                ->select('formations.*','nivs.*','matieres.designation as matiere','formations.designation as formationsdes')
                ->orderBy('formations.id', 'DESC')
                ->paginate(7);

        }
        else if ($mat_id == "") {
            //echo "mat is selected";
            $data = Formation::join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs','formations.niveau_id','nivs.id')
                ->where('nivs.id', $niv_id)
                ->where('formations.type', $type)
                ->select('formations.*','nivs.*','matieres.designation as matiere','formations.designation as formationsdes')
                ->orderBy('formations.id', 'DESC')
                ->paginate(7);

        } else if ($niv_id == "") {
            //echo "grp is selected";
            $data = Formation::join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs','formations.niveau_id','nivs.id')
                ->where('matieres.id', $mat_id)
                ->where('formations.type', $type)
                ->select('formations.*','nivs.*','matieres.designation as matiere','formations.designation as formationsdes')
                ->orderBy('formations.id', 'DESC')
                ->paginate(7);
        }else if ($type == "") {
            //echo "type is selected";
            $data = Formation::join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs','formations.niveau_id','nivs.id')
                ->where('nivs.id', $niv_id)
                ->where('matieres.id', $mat_id)
                ->select('formations.*','nivs.*','matieres.designation as matiere','formations.designation as formationsdes')
                ->orderBy('formations.id', 'DESC')
                ->paginate(7);
        } else {
            //echo "nothing is slected";
            return "<h1 align='center'>Please select atleast one filter from dropdown</h1>";

        }

        if ($data->count() == 0) {
            return view('public_interface.search_result_formation_filter_vide', [
                'data' => $data, 'mat_id'=> $mat_id, 'niv_id'=> $niv_id,'type'=> $type,'page'=>$page
            ]);
        } else {
            return view('public_interface.search_result_formation_filter', [
                'data' => $data, 'mat_id'=> $mat_id, 'niv_id'=> $niv_id,'type'=> $type,'page'=>$page
                
            ]);
        }

    }
}



