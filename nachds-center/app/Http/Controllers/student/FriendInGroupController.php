<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Inscription;
use App\Models\User;
use App\Models\Candidat;
use App\Models\Groupe;
use Illuminate\Http\Request;

class FriendInGroupController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
      public function show(User $user, Candidat $candidats , Inscription $inscription, Groupe $groupe) {
    
                 $condidat = Inscription::where('candidat_id',@Auth::user()->id)->first();
                 $amisGroupe = Candidat::join('inscriptions', 'inscriptions.candidat_id', '=', 'candidats.id')
                 ->join('users' ,'users.id','=','candidats.id')
                 ->where('inscriptions.groupe_id','=',$condidat->groupe_id)
                 ->distinct('candidat_id')
                 ->get(); 
                 return view('student.student_list_eleve', compact('amisGroupe'));
      }
}
