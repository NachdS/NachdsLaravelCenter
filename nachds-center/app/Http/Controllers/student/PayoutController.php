<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\Payement;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class PayoutController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $allpayements = Payement::join('inscriptions', 'payements.inscription_id', '=', 'inscriptions.id')
            ->join('candidats', 'inscriptions.candidat_id', 'candidats.id')
            ->join('users', 'users.id', '=', 'candidats.id')
            ->where('candidats.id', @Auth::user()->id)
            ->select('payements.*')
            ->paginate(5);

        return view('student.student_payout', compact('allpayements'));
    }

    public function addPayment(){
        { $groupes = Formation::join('groupes', 'formations.id', 'groupes.formation_id')
            ->join('inscriptions', 'groupes.id', 'inscriptions.groupe_id')
            ->join('candidats', 'inscriptions.candidat_id', 'candidats.id')
            ->where('candidats.id', Auth::user()->id)->orderby('formations.designation')->get(); 
        return view('student.make_new_payement', compact('groupes'));
    }}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formations = Formation::join('groupes', 'formations.id', 'groupes.formation_id')
        ->join('inscriptions', 'groupes.id', 'inscriptions.groupe_id')
        ->join('candidats', 'inscriptions.candidat_id', 'candidats.id')
        ->where('candidats.id', Auth::user()->id)
        ->where('formations.id', $request->input('formation_id'))->first(); 

        $request->validate([
            'montant' => 'required',
            'date_paiement' =>'required',
            'periode'=>'required',
            'justification' => 'file|required',
            'formation_id' => 'required',
        ]);
        if ($formations) {
            $new_pay = new Payement();
            $new_pay->montant = @$request->input('montant');
            $new_pay->date_paiement = @$request->input('date_paiement');
            $new_pay->periode = @$request->input('periode');
            $new_pay->formation_id = @$request->input('formation_id');
            if (@$request->file('justification')) {
                $path_justification = @$request->file('justification')->store('justification');
                $new_pay->justification = @$path_justification;
            }
            $new_pay->save();
            return redirect()->route('student_payout')->with('success', 'Payement is added successfully.');
        } else {
            return redirect()->route('student_payout')->with('error', 'Payement is not added successfully.');
        }

    }
}


    
    
