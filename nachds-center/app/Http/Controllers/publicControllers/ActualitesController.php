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
        $allactualites = Actualite::orderBy('created_at', 'DESC')->paginate(8);
        $page ='/news';
        return view('public_interface.news', compact('allactualites','page'));
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
        $page ='/news';
        $detailactualite = Actualite::where('id', $id)->get();
        return view('public_interface.news_single_view', compact('detailactualite','page'));
    }

}
