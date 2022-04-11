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

    public function index(User $user, Enseignant $enseignants , Groupe $groupes)

    {
        /*$cours = Cour::join('groupes', 'cours.groupe_id', '=', 'groupes.id')
        ->join('enseignants', 'enseignants.id', '=', 'groupes.enseignant_id')
        ->join('users', 'users.id', '=', 'enseignants.id')
        ->where('users.id',@Auth::user()->id)
        ->select('cours.*')
        ->paginate(4);*/

        $chapitres = Chapitre::join('cours','cours.id','=','chapitres.cours_id')
        ->join('groupes', 'cours.groupe_id', '=', 'groupes.id')
        ->join('enseignants', 'enseignants.id', '=', 'groupes.enseignant_id')
        ->join('users', 'users.id', '=', 'enseignants.id')
        ->where('users.id',@Auth::user()->id)
        ->select('chapitres.*')
        ->paginate(4);

        dd($chapitres);

         /*$chapitres = Chapitre::join('cours','cours.id','=','chapitres.cours_id')
         ->get();*/
       
        return view('teacher.create_new_chapter',compact('chapitres'))
            ->with('i', (request()->input('page', 1) - 1) * 5); 
    }



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
            'files' => 'image|mimes:jpeg,png,jpg,gif,svg|mimes:csv,txt,xlx,xls,pdf',
        ]);
            $new_course = New Chapitre();
            $new_course->designation = @$request->input('designation');
            $new_course->description = @$request->input('description');
            $new_course->type = @$request->input('type');
            if(@$request->file('files')){
                $path_files= @$request->file('files')->store('chapitres');
                $new_course->photo = @$path_files;
            }
            $new_course->save();
            return redirect()->route('create_new_chapter')->with('success','Cour created successfully.'); 
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
