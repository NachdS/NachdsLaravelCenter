<?php

namespace App\Http\Controllers\publicControllers;

use App\Http\Controllers\Controller;
use App\Models\Album;

class AlbumsController extends Controller
{
    /**
     * Show albums data
     *
     * @param Albums $albums
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Album $albums)
    {
        $allalbums = Album::orderBy('created_at', 'DESC')->paginate(8);
        $page ='/gallery';
        return view('public_interface.gallery', compact('allalbums','page'));
    }

    /**
     * Show albums data
     *
     * @param Albums $albums
     *
     * @return \Illuminate\Http\Response
     */
    public function showById($id)
    {
        $detailalbums = Album::where('id', $id)->get();
        $page ='/gallery';
        return view('public_interface.gallery_single_view', compact('detailalbums','page'));
    }

}
