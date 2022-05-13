<?php

namespace App\Http\Controllers\publicControllers;

use App\Http\Controllers\Controller;
use App\Models\Candidat;
use App\Models\Coordonnee;
use App\Models\Cour;
use App\Models\Enseignant;
use App\Models\Formation;
use App\Models\Inscription;
use App\Models\Partenaire;

class AboutUsController extends Controller
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
        $allaboutUs = Coordonnee::first();
        $allenseignants = Enseignant::all();
        $allcondidats = Enseignant::all();
        $allformations = Formation::all();
        $allcours = Cour::all();
        $allstudents = Candidat::all();
        $allinscription = Inscription::all();
        $allpartenaires = Partenaire::latest()->paginate(10);

        $totalEnseignants = $allenseignants->count();
        $totalCondidats = $allcondidats->count();
        $totalFormations = $allformations->count();
        $totalCours = $allcours->count();
        $totalCours = $allcours->count();
        $totalInscription = $allinscription->count();
        $totalPartenaires = $allpartenaires->count();
        $totalStudents = $allstudents->count();
        $page ='about_us';

        /*   dd($allaboutUs); */

        return view('public_interface.about_us',compact('allaboutUs', 'totalEnseignants', 'totalCondidats', 'totalFormations', 'totalCours', 'totalPartenaires', 'totalInscription','totalStudents','page'));
    }
}
