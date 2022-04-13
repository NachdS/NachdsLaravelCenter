<?php

namespace App\Http\Controllers\publicControllers;

use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;

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
        $allalbums = Album::latest()->paginate(8);

        return view('public_interface.gallery', compact('allalbums'));
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
        return view('public_interface.gallery_single_view', compact('detailalbums'));
    }

}


