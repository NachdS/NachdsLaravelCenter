<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Groupe;
use App\Models\Cour;

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

    public function index()

    {
        $cours = Cour::latest()->paginate(5);
        return view('teacher.instructor_courses',compact('cours'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.create_new_course');
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
            'name' => 'required',
            'detail' => 'required',
        ]);

        Cour::create($request->all());
        return redirect()->route('teacher.instructor_courses')
        ->with('success','Cour created successfully.');

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
    public function edit(Cour $cour)

    {
        return view('teacher.create_new_course',compact('cour'));
    }

    /**

     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cour  $cour
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Cour $cour)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        $cour->update($request->all());

        return redirect()->route('teacher.instructor_courses')
         ->with('success','Cour updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cour  $cour
     * @return \Illuminate\Http\Response
     */

    public function destroy(Cour $cour)
    {
        $cour->delete();
        return redirect()->route('cours.index')
        ->with('success','Cour deleted successfully');

    }
}
