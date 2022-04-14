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
            'files.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf',
            'cour_id' => 'required',
        ]);
            $new_chapitre = New Chapitre();
            $new_chapitre->designation = @$request->input('designation');
            $new_chapitre->description = @$request->input('description');
            $new_chapitre->type = @$request->input('type');
            $new_chapitre->cour_id = @$request->input('cour_id');
            //$new_chapitre->cour_id = $request->cour_id;

            if(@$request->file('files'))

            foreach(@$request->file('files') as $file) {
            {
                $path_files = $file->store('chapitres');
                $fileData[] = $path_files; 
            }
                $new_chapitre->files = json_encode($fileData);
            } 
            $new_chapitre->save();

            return redirect()->route('create_new_chapter',$request->input('cour_id'))->with('success','Cour created successfully.'); 
    }
     

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chapitre= Chapitre::find($id)->first();
        return view('teacher.create_new_chapter',compact('chapitre'));
    }
    
    /* Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Cour  $cour
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
       $chapitre= Chapitre::find($id)->first();
       $request->validate([
        'designation' => 'required',
        'description' => 'required',
        'type' => 'required',
        'files.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf',
        'cour_id' => 'required',
           ]);
       $input = $request->all();
       if(@$request->file('files'))
       {
            foreach(@$request->file('files') as $file)
            {
                $path_files = $file->store('chapitres');
                $input[] = $path_files; 
            }
                $chapitre->files = json_encode($input);
                
        }
        $chapitre->update($input);

           return redirect()->route('create_new_chapter',$request->input('cour_id'))
           ->with('success','Chapitre updated successfully');            
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
