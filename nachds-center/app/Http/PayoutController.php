<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\Groupe;
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
        $groupes = Formation::join('groupes', 'formations.id', 'groupes.formation_id')
        ->join('inscriptions', 'groupes.id', 'inscriptions.groupe_id')
        ->where('inscriptions.candidat_id', @Auth::user()->id)
        ->where('groupes.id', $request->input('groupe_id'))->first(); 

        $request->validate([
            'montant' => 'required',
            'date_paiement' =>'required',
            'periode'=>'required',
            'justification' => 'file|required',
            'groupe_id' => 'required',
        ]);
        dd( $groupes);
        if ($groupes) {
            $new_pay = new Payement();
            $new_pay->montant = @$request->input('montant');
            $new_pay->date_paiement = @$request->input('date_paiement');
            $new_pay->periode =json_encode(@$request->input['periode']);
            $new_pay->groupe_id = @$request->input('groupe_id');
            if (@$request->file('justification')) {
                $path_justification = @$request->file('justification')->store('justification');
                $new_pay->justification = @$path_justification;
            }
            $new_pay->save();
            return redirect()->route('make_new_payement')->with('success', 'Payement is added successfully.');
        } else {
            return redirect()->route('make_new_payement')->with('error', 'Payement is not added successfully.');
        }

    }
}


    
    
