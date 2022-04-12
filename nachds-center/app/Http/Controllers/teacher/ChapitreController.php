<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use App\Models\Chapitre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Groupe;
use App\Models\Enseignant;
use App\Models\Cour;
use App\Models\User;

class ChapitreController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /* public function index(User $user, Enseignant $enseignants , Groupe $groupes)

    {
        $chapitres = Chapitre::join('cours','cours.id','=','chapitres.cour_id')
        ->join('groupes', 'cours.groupe_id', '=', 'groupes.id')
        ->join('enseignants', 'enseignants.id', '=', 'groupes.enseignant_id')
        ->join('users', 'users.id', '=', 'enseignants.id')
        ->where('users.id',@Auth::user()->id)
        ->select('chapitres.*')
        ->get();
        
       
        return view('teacher.create_new_chapter',compact('chapitres'))
            ->with('i', (request()->input('page', 1) - 1) * 5); 
    } */



     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('teacher.create_new_chapter');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)    
    {  
        $request->validate([
            'designation' => 'required',
            'description' => 'required',
            'type' => 'required',
            'files' => 'required',
            'files.*' => 'mimes:csv,txt,xlx,xls,pdf'
        ]);
            $new_chapitre = New Chapitre();
            $new_chapitre->designation = @$request->input('designation');
            $new_chapitre->description = @$request->input('description');
            $new_chapitre->type = @$request->input('type');

            if(@$request->file('files'))
            //foreach(@$request->files as $file) {
            {
                $path_files= @$request->file('file')->store('chapitres');
                $new_chapitre->files = @$path_files;
             }
            //} 
            $new_chapitre->save();
            return redirect()->route('store_new_chapter')->with('success','Cour created successfully.'); 
    }
     

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cour= Chapitre::find($id)->first();
        return view('teacher.create_new_chapter',compact('cour'));
    }
    

  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chapitre  $chapitre
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Chapitre::find($id)->delete();
        return redirect()->route('create_new_chapter')
                        ->with('success','Chapitre deleted successfully');
    }
}
