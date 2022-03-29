<?php

namespace App\Http\Controllers\publicControllers;

use App\Http\Controllers\Controller;
use App\Models\Faqs;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
     /**
     * Show faqs data
     * 
     * @param Faqs $faqs
     * 
     * @return \Illuminate\Http\Response
     */
    public function show(Faqs $faqs) 
    {
        $allfaqs = Faqs::latest()->paginate(10);

        return view('public_interface.faqs', compact('allfaqs'));
    }

}
