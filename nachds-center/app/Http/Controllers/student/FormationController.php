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
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show(Formation $formations, Enseignant $enseignants, User $users, Groupe $groupes, Niv $nivs)
    {
        $allformations = Formation::
            join('groupes', 'formations.id', 'groupes.formation_id')
            ->join('inscriptions', 'groupes.id', 'inscriptions.groupe_id')
            ->join('matieres', 'formations.matiere_id', 'matieres.id')
            ->join('nivs', 'formations.niveau_id', 'nivs.id')
            ->where('inscriptions.candidat_id', @Auth::user()->id)
            ->orderBy('formations.id', 'DESC')
            ->select(
                'formations.*',
                'nivs.*',
                'groupes.designation as grpdesignation',
                'groupes.id as groupe_id',
                'matieres.designation as matiere',
                'inscriptions.prix_total',
                'inscriptions.prix_acompte',
                'matieres.id as matiere_id',
                'nivs.designation as nivdesignation',
            )
            ->paginate(7);
            $page ='/student_search_result';
            

        return view('student.search_result', compact('allformations','page'));
    }

    public function showById($groupe_id)
    {
        $groupe_info = Groupe::find($groupe_id);
        $cours = Cour::join('groupes', 'cours.groupe_id', '=', 'groupes.id')
            ->join('inscriptions', 'groupes.id', '=', 'inscriptions.groupe_id')
            ->where('inscriptions.candidat_id', @Auth::user()->id)
            ->where('cours.groupe_id', $groupe_id)
            ->get('cours.*');
            $page ='/student_search_result';
        return view('student.student_course_detail', compact('groupe_info', 'cours','page'));
    }

    public function formationGrp(Request $request)
    {
        $mat_id = $request->matiere_id;
        $niv_id = $request->niveau_id;
        $type = $request->type;
        $page ='/student_search_result';

        if ($niv_id != "" && $mat_id != "" && $type != "") {

            //echo "3 are selected";
            $data = Formation::
                join('groupes', 'formations.id', 'groupes.formation_id')
                ->join('inscriptions', 'groupes.id', 'inscriptions.groupe_id')
                ->join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs', 'formations.niveau_id', 'nivs.id')
                ->where('inscriptions.candidat_id', @Auth::user()->id)
                ->where('nivs.id', $niv_id)
                ->where('matieres.id', $mat_id)
                ->where('formations.type', $type)
                ->orderBy('formations.id', 'DESC')
                ->select(
                    'formations.*',
                    'nivs.*',
                    'groupes.designation as grpdesignation',
                    'groupes.id as groupe_id',
                    'matieres.designation as matiere',
                    'inscriptions.prix_total',
                    'inscriptions.prix_acompte',
                    'matieres.id as matiere_id',
                    'nivs.designation as nivdesignation',
                )
                ->paginate(7);

        } else if ($niv_id == "" && $mat_id == "") {
            //echo "mat is selected";
            $data = Formation::
                join('groupes', 'formations.id', 'groupes.formation_id')
                ->join('inscriptions', 'groupes.id', 'inscriptions.groupe_id')
                ->join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs', 'formations.niveau_id', 'nivs.id')
                ->where('inscriptions.candidat_id', @Auth::user()->id)
                ->where('formations.type', $type)
                ->orderBy('formations.id', 'DESC')
                ->select(
                    'formations.*',
                    'nivs.*',
                    'groupes.designation as grpdesignation',
                    'groupes.id as groupe_id',
                    'matieres.designation as matiere',
                    'inscriptions.prix_total',
                    'inscriptions.prix_acompte',
                    'matieres.id as matiere_id',
                    'nivs.designation as nivdesignation',
                )
                ->paginate(7);

        } else if ($mat_id == "" && $type == "") {
            //echo "mat is selected";
            $data = Formation::
                join('groupes', 'formations.id', 'groupes.formation_id')
                ->join('inscriptions', 'groupes.id', 'inscriptions.groupe_id')
                ->join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs', 'formations.niveau_id', 'nivs.id')
                ->where('inscriptions.candidat_id', @Auth::user()->id)
                ->where('nivs.id', $niv_id)
                ->orderBy('formations.id', 'DESC')
                ->select(
                    'formations.*',
                    'nivs.*',
                    'groupes.designation as grpdesignation',
                    'groupes.id as groupe_id',
                    'matieres.designation as matiere',
                    'inscriptions.prix_total',
                    'inscriptions.prix_acompte',
                    'matieres.id as matiere_id',
                    'nivs.designation as nivdesignation',
                )
                ->paginate(7);

        } else if ($niv_id == "" && $type == "") {
            //echo "mat is selected";
            $data = Formation::
                join('groupes', 'formations.id', 'groupes.formation_id')
                ->join('inscriptions', 'groupes.id', 'inscriptions.groupe_id')
                ->join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs', 'formations.niveau_id', 'nivs.id')
                ->where('inscriptions.candidat_id', @Auth::user()->id)
                ->where('matieres.id', $mat_id)
                ->orderBy('formations.id', 'DESC')
                ->select(
                    'formations.*',
                    'nivs.*',
                    'groupes.designation as grpdesignation',
                    'groupes.id as groupe_id',
                    'matieres.designation as matiere',
                    'inscriptions.prix_total',
                    'inscriptions.prix_acompte',
                    'matieres.id as matiere_id',
                    'nivs.designation as nivdesignation',
                )
                ->paginate(7);

        } else if ($mat_id == "") {
            //echo "mat is selected";
            $data = Formation::
                join('groupes', 'formations.id', 'groupes.formation_id')
                ->join('inscriptions', 'groupes.id', 'inscriptions.groupe_id')
                ->join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs', 'formations.niveau_id', 'nivs.id')
                ->where('inscriptions.candidat_id', @Auth::user()->id)
                ->where('nivs.id', $niv_id)
                ->where('formations.type', $type)
                ->orderBy('formations.id', 'DESC')
                ->select(
                    'formations.*',
                    'nivs.*',
                    'groupes.designation as grpdesignation',
                    'groupes.id as groupe_id',
                    'matieres.designation as matiere',
                    'inscriptions.prix_total',
                    'inscriptions.prix_acompte',
                    'matieres.id as matiere_id',
                    'nivs.designation as nivdesignation',
                )
                ->paginate(7);

        } else if ($niv_id == "") {
            //echo "grp is selected";
            $data = Formation::
                join('groupes', 'formations.id', 'groupes.formation_id')
                ->join('inscriptions', 'groupes.id', 'inscriptions.groupe_id')
                ->join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs', 'formations.niveau_id', 'nivs.id')
                ->where('inscriptions.candidat_id', @Auth::user()->id)
                ->where('matieres.id', $mat_id)
                ->where('formations.type', $type)
                ->orderBy('formations.id', 'DESC')
                ->select(
                    'formations.*',
                    'nivs.*',
                    'groupes.designation as grpdesignation',
                    'groupes.id as groupe_id',
                    'matieres.designation as matiere',
                    'inscriptions.prix_total',
                    'inscriptions.prix_acompte',
                    'matieres.id as matiere_id',
                    'nivs.designation as nivdesignation',
                )
                ->paginate(7);
        } else if ($type == "") {
            //echo "type is selected";
            $data = Formation::
                join('groupes', 'formations.id', 'groupes.formation_id')
                ->join('inscriptions', 'groupes.id', 'inscriptions.groupe_id')
                ->join('matieres', 'formations.matiere_id', 'matieres.id')
                ->join('nivs', 'formations.niveau_id', 'nivs.id')
                ->where('inscriptions.candidat_id', @Auth::user()->id)
                ->where('nivs.id', $niv_id)
                ->where('matieres.id', $mat_id)
                ->orderBy('formations.id', 'DESC')
                ->select(
                    'formations.*',
                    'nivs.*',
                    'groupes.designation as grpdesignation',
                    'groupes.id as groupe_id',
                    'matieres.designation as matiere',
                    'inscriptions.prix_total',
                    'inscriptions.prix_acompte',
                    'matieres.id as matiere_id',
                    'nivs.designation as nivdesignation',
                )
                ->paginate(7);
        } else {
            //echo "nothing is slected";
            return "<h1 align='center'>Please select atleast one filter from dropdown</h1>";

        }

        if ($data->count() == 0) {
            return view('student.search_result_filtre_vide', [
                'data' => $data, 'mat_id'=> $mat_id, 'niv_id'=> $niv_id,'type'=> $type,'page'=>$page
            ]);
        } else {
            return view('student.search_result_filtre', [
                'data' => $data, 'mat_id'=> $mat_id, 'niv_id'=> $niv_id,'type'=> $type,'page'=>$page
            ]);
        }

    }

}
