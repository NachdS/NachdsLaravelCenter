<?php

namespace App\Http\Controllers\publicControllers;

use App\Http\Controllers\Controller;
use App\Models\Actualite;

class ActualitesController extends Controller
{
    /**
     * Show actualites data
     *
     * @param Actualites $actualites
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Actualite $actualites)
    {
        $allactualites = Actualite::latest()->paginate(8);

        return view('public_interface.news', compact('allactualites'));
    }

    /**
     * Show actualites data
     *
     * @param Actualites $actualites
     *
     * @return \Illuminate\Http\Response
     */
    public function showById($id)
    {
        $detailactualite = Actualite::where('id', $id)->get();
        return view('public_interface.news_single_view', compact('detailactualite'));
    }

}
