<?php

namespace App\Http\Controllers\publicControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Evenement;

class EvenementsController extends Controller
{
    /**
     * Show evenements data
     * 
     * @param Evenements $evenements
     * 
     * @return \Illuminate\Http\Response
     */
    public function show(Evenement $evenements) 
    {
        $allEvenements = Evenement::latest()->paginate(10);

        return view('public_interface.event', compact('allEvenements'));
    }


        /**
     * Show evenements data
     * 
     * @param Evenements $evenements
     * 
     * @return \Illuminate\Http\Response
     */
    public function showById($id) 
    {
        $detailEvenement = Evenement::where('id', $id)->get();
        return view('public_interface.event_single_view', compact('detailEvenement'));
    }
}
