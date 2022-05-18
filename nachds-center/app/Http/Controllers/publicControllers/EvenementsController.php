<?php

namespace App\Http\Controllers\publicControllers;

use App\Http\Controllers\Controller;
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
        $allEvenements = Evenement::orderBy('created_at', 'DESC')->paginate(8);
        $page ='/event';
        return view('public_interface.event', compact('allEvenements','page'));
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
        $page ='/event';
        $detailEvenement = Evenement::where('id', $id)->get();
        return view('public_interface.event_single_view', compact('detailEvenement','page'));
    }
}
