<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Enseignant;
use App\Models\User;
use App\Models\Payementens;

class TeacherEarningController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
     
    public function show() {

      $allpayementens = Payementens::join('enseignants', 'enseignants.id', '=', 'payementens.enseignant_id')
                 ->join('users' ,'users.id','=','enseignants.id')
                 ->where ('enseignants.id',@Auth::user()->id)
                 ->paginate(5);

      return view('teacher.instructor_earning', compact('allpayementens'));
    }
}
