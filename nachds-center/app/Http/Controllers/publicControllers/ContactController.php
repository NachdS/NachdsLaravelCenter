<?php

namespace App\Http\Controllers\publicControllers;
use App\Http\Controllers\Controller;
use App\Models\Coordonnee;
use Illuminate\Http\Request;

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
           $allcoordonnees = Coordonnee::latest()->paginate(10);
   
           return view('public_interface.faqs', compact('allcoordonnees'));
       }
}
