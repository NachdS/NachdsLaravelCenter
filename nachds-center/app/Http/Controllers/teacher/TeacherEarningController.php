<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Enseignant;
use App\Models\User;
use App\Models\Payementens;
use Illuminate\Support\Carbon;

class TeacherEarningController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
     
    public function show() {

      $allpayementens = Payementens::join('enseignants', 'enseignants.id', '=', 'payementens.enseignant_id')
                 ->join('users' ,'users.id','=','enseignants.id')
                 ->where ('enseignants.id',@Auth::user()->id)
                 ->select('payementens.id','payementens.montant','payementens.created_at')
                 ->paginate(5);
      $year = Payementens::join('enseignants', 'enseignants.id', '=', 'payementens.enseignant_id')
                 ->distinct()
                 ->get([Payementens::raw('YEAR(payementens.created_at) as year')]);
      /* $yearOption= Payementens::join('enseignants', 'enseignants.id', '=', 'payementens.enseignant_id') 
                 ->whereDate ('payementens.created_at',$year) 
                 ->get();    */   

       $last_7_days = Payementens::join('enseignants', 'enseignants.id', '=', 'payementens.enseignant_id')
       ->join('users' ,'users.id','=','enseignants.id')
       ->whereBetween('payementens.created_at',[Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])
       ->where('enseignants.id', @Auth::user()->id)
       ->sum('payementens.montant');

       $last_session = Payementens::join('enseignants', 'enseignants.id', '=', 'payementens.enseignant_id')
       ->join('users' ,'users.id','=','enseignants.id')
       ->whereBetween('payementens.created_at',[Carbon::now()->subMonth(6), Carbon::now()])
       ->where('enseignants.id', @Auth::user()->id)
       ->sum('payementens.montant');

       $last_month = Payementens::join('enseignants', 'enseignants.id', '=', 'payementens.enseignant_id')
       ->join('users' ,'users.id','=','enseignants.id')
       ->whereMonth('payementens.created_at', '=', Carbon::now()->subMonth()->month)
       ->where('enseignants.id', @Auth::user()->id)
       ->sum('payementens.montant');

       $last_year = Payementens::join('enseignants', 'enseignants.id', '=', 'payementens.enseignant_id')
       ->join('users' ,'users.id','=','enseignants.id')
       ->whereYear('payementens.created_at', date('Y', strtotime('-1 year')))
       ->where('enseignants.id', @Auth::user()->id)
       ->sum('payementens.montant');

      return view('teacher.instructor_earning', compact('allpayementens','last_7_days','last_session','last_month','last_year'));
    }
}
