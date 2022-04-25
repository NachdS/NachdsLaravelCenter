<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\Groupe;
use App\Models\Inscription;
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
            ->join('groupes' , 'groupes.id' , 'inscriptions.groupe_id')
            ->join('formations' , 'formations.id' , 'groupes.formation_id')
            ->join('candidats', 'inscriptions.candidat_id', 'candidats.id')
            ->where('candidats.id', @Auth::user()->id)
            ->select('payements.*',
            'formations.designation as designation',
            'inscriptions.prix_total',
            'payements.montant as montant',
            'payements.date_paiement as date',
            'payements.periode as periode',
            'payements.approuve as approuve',
            )
            ->paginate(5);

            $alltotals = Inscription::join('candidats', 'inscriptions.candidat_id', 'candidats.id')
            ->where('candidats.id', @Auth::user()->id)
            ->select('inscriptions.prix_total')
            ->get();

            $allpayementsum = $allpayements->sum('montant');
            $alltotalsum = $alltotals->sum('prix_total');

        return view('student.student_payout', compact('allpayements','allpayementsum','alltotalsum'));
    }

    public function addPayment(){
        { $groupes = Groupe::join('inscriptions', 'groupes.id', 'inscriptions.groupe_id')
            ->join('candidats', 'inscriptions.candidat_id', 'candidats.id')
            ->where('candidats.id', Auth::user()->id)->orderby('groupes.designation')->select('groupes.*')->get(); 

            $formations = Formation::join('groupes' , 'groupes.formation_id' , 'formations.id')->whereIn('groupes.id' , $groupes)->get();
        return view('student.make_new_payement', compact('groupes' , 'formations'));
    }}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $ins = Inscription::where('groupe_id', $request->input('groupe_id'))
        ->where('candidat_id', @Auth::user()->id)
        ->first(); 


         $request->validate([
            'montant' => 'required',
            'date_paiement' =>'required',
            'periode'=>'required',
            'justification' => 'file|required',
            'approuve' => 'a approuver',
        ]); 

        if ($ins) {
            $new_pay = new Payement();
            $new_pay->montant = @$request->input('montant');
            $new_pay->date_paiement = @$request->input('date_paiement');
            $new_pay->periode = json_encode($request->input('periode'));
            $new_pay->inscription_id = $ins->id;
            $new_pay->approuve ='a approuver';
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


    
    
