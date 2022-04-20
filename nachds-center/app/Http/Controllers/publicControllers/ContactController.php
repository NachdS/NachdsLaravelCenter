<?php

namespace App\Http\Controllers\publicControllers;

use App\Http\Controllers\Controller;
use App\Models\Coordonnee;

class ContactController extends Controller
{
    /**
     * Show coordonnees data
     *
     * @param Coordonnees $coordonnees
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Coordonnee $coordonnees)
    {
        $allcontacts = Coordonnee::first();

        return view('public_interface.contact_us', compact('allcontacts'));
    }
}
