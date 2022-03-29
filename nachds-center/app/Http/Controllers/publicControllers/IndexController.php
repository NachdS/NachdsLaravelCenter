<?php

namespace App\Http\Controllers\publicControllers;

use App\Http\Controllers\Controller;
use App\Models\VideosPub;
use App\Models\Enseignant;
use App\Models\Partenaire;
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
        $allenseignants = Enseignant::latest()->paginate(10);
        $allpartenaires = Partenaire::latest()->paginate(10);

        return view('public_interface.index', compact('allvideo_Pubs','allenseignants','allpartenaires'));
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
        return view('public_interface.index', compact('detailvideo_Pubs','allenseignants'));
    }


     /**
     * Show enseignants data
     * 
     * @param Enseignants $enseignants
     * 
     * @return \Illuminate\Http\Response
     */
      public function showEnseignant(Enseignant $enseignants) 
    {
        $allenseignants = Enseignant::latest()->paginate(10);

        return view('public_interface.indexEnseignant', compact('allenseignants'));
    }



}




