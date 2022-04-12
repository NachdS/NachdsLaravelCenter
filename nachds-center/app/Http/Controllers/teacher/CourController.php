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

class CourController extends Controller
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
        $cours = Cour::join('groupes', 'cours.groupe_id', '=', 'groupes.id')
        ->join('enseignants', 'enseignants.id', '=', 'groupes.enseignant_id')
        ->join('users', 'users.id', '=', 'enseignants.id')
        ->where('users.id',@Auth::user()->id)
        ->select('cours.*')
        ->paginate(4);
       // $chapitres = Chapitre::join('cours','cours.id','=','chapitres.cours_id')
        //->get();
        //$totalchapitres = $chapitres->count();
        return view('teacher.instructor_courses',compact('cours'))
            ->with('i', (request()->input('page', 1) - 1) * 5); 
    }


    public function showChapitresById($id) 
    {
        $detailchapitre = Chapitre::where('cour_id', $id)->get();
        $cour = Cour::find($id);
        return view('teacher.create_new_chapter', compact('detailchapitre' , 'cour'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $groupes = Groupe::where('enseignant_id', Auth::user()->id)->orderby('designation')->get();
        return view('teacher.create_new_course',compact('groupes'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $grps = Groupe::where('enseignant_id', Auth::user()->id)->where('id' ,$request->input('groupe_id'))->first();
        $request->validate([
            'designation' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'groupe_id' => 'required',
        ]);
        if($grps){
            $new_course = New Cour();
            $new_course->designation = @$request->input('designation');
            $new_course->groupe_id = @$request->input('groupe_id');
            if(@$request->file('photo')){
                $path_photo = @$request->file('photo')->store('cours');
                $new_course->photo = @$path_photo;
            }
            $new_course->save();
            return redirect()->route('create_new_course')->with('success','Cour created successfully.');
        } else{
            return redirect()->route('create_new_course')->with('error','Cour is not created .');
        }
            
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function show(Cour $cour)
    {
        return view('teacher.create_new_course',compact('cour'));
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cour= Cour::find($id)->first();
        $groupes = Groupe::where('enseignant_id', Auth::user()->id)->orderby('designation')->get();
        return view('teacher.edit_new_course',compact('cour','groupes'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cour= Cour::find($id)->first();
        /*$grps = Groupe::where('enseignant_id', Auth::user()->id)->where('id' ,$request->input('groupe_id'))->first();
        $request->validate([
            'designation' => 'required',
            'groupe_id' => 'required',
        ]);
        
        $input = $request->all();
  
        if (@$request->file('photo')) {
            $path_photo = @$request->file('photo')->store('cours');
            $input['photo'] = "$path_photo";
        }else{
            unset($input['photo']);
        }
          
        $cour->update($input);
    
        return redirect()->route('instructor_courses')
                        ->with('success','Cour updated successfully');*/
        
        $request->validate([
            'designation' => 'required',
            'groupe_id' => 'required',
            ]);
        $input = $request->all();
            if (@$request->file('image')) {
                $path_photo = @$request->file('photo')->store('cours');
                $input['photo'] = "$path_photo";
            }else{
                unset($input['photo']);
                }
                $cour->update($input);
            return redirect()->route('instructor_courses')
            ->with('success','Product updated successfully');
                    
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cour::find($id)->delete();
        return redirect()->route('instructor_courses')
                        ->with('success','Cour deleted successfully');
    }

}