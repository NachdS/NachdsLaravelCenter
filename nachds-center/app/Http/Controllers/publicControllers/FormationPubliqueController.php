<?php

namespace App\Http\Controllers\publicControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Formation;
use App\Models\Enseignant;
use App\Models\User;
use App\Models\Groupe;
use App\Models\Niv;

class FormationPubliqueController extends Controller
{
   
    public function show(Formation $formations, Enseignant $enseignants, User $users, Groupe $groupes, Niv $nivs) 
    {
        $allformations = Formation::paginate(7);

        return view('public_interface.search_result_formation', compact('allformations'));
    }
}





