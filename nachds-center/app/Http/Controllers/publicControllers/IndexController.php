<?php

namespace App\Http\Controllers\publicControllers;

use App\Http\Controllers\Controller;
use App\Models\VideosPub;
use App\Models\Enseignant;
use App\Models\Partenaire;
use App\Models\Condidat;
use App\Models\Formation;
use App\Models\User;
use App\Models\Slide;
use App\Models\Cour;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    /**
     * Show video_Pubs data
     * 
     * @param Video_pubs $video_pubs
     * 
     * @param Enseignants $enseignants
     * 
     * @param Partenaires $partenaires
     * 
     * @return \Illuminate\Http\Response
     */
    public function show(VideosPub $video_pubs, Enseignant $enseignants, Partenaire $partenaires) 
    {
        //dd("ok");
        //dd($allvideo_Pubs);
        $allvideo_Pubs = VideosPub::latest()->paginate(10);
        $allenseignants = Enseignant::all();
        $allcondidats = Enseignant::all();
        $allformations = Formation::all();
        $allsliders = Slide::all();
        $allcours = Cour::all();
        $allpartenaires = Partenaire::latest()->paginate(10);

        $totalEnseignants = $allenseignants->count();
        $totalCondidats = $allcondidats->count();
        $totalFormations = $allformations->count();
        $totalCours = $allcours->count();

        $allenseignants = Enseignant::join('users', 'users.id', '=', 'enseignants.id')
        ->where('users.role_id','3')
        ->get(['users.name', 'users.phone', 'users.adresse', 'users.email', 'users.cin', 'users.avatar', 'enseignants.specialite','enseignants.type', 'enseignants.genre', 'enseignants.cin_delivre']);

        return view('public_interface.index', compact('allvideo_Pubs','allenseignants','allpartenaires','totalEnseignants','totalCondidats','totalFormations','allsliders','totalCours'));
    }


    /**
     * Show video_Pubs data
     * 
     * @param Video_pubs $video_pubs
     * 
     * @return \Illuminate\Http\Response
     */
    public function showById($id) 
    {
        $detailvideo_Pubs = VideosPub::where('id', $id)->get();
        return view('public_interface.video_pub_detail', compact('detailvideo_Pubs'));
    }


}




