<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use App\Models\Chapitre;
use App\Models\Cour;
use Illuminate\Http\Request;

class ChapitreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
            'files' => 'required',
            'files.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf,mp4',
            'cour_id' => 'required',
        ]);
        $new_chapitre = new Chapitre();
        $new_chapitre->designation = @$request->input('designation');
        $new_chapitre->description = @$request->input('description');
        $new_chapitre->type = @$request->input('type');
        $new_chapitre->cour_id = @$request->input('cour_id');
        //$new_chapitre->cour_id = $request->cour_id;

        if (@$request->file('files')) {
            foreach (@$request->file('files') as $file) {
                {   $originalName = $file->getClientOriginalName();
                    $path_files = $file->storePubliclyAs('chapitres', $originalName);
                    $fileData[] = $path_files;
                }
                $new_chapitre->files = json_encode($fileData);
            }
        }

        $new_chapitre->save();

        return redirect()->route('create_new_chapter', $request->input('cour_id'))->with('success', 'Cour created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chapitre = Chapitre::find($id)->first();
        return view('teacher.create_new_chapter', compact('chapitre'));
    }

    /* Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cour  $cour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $chapitre = Chapitre::find($id)->first();
        $request->validate([
            'designation' => 'required',
            'description' => 'required',
            'type' => 'required',
            'files.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf',
            'cour_id' => 'required',
        ]);
        $input = $request->all();
        if (@$request->file('files')) {
            foreach (@$request->file('files') as $file) {
                $originalName = $file->getClientOriginalName();
                $path_files = $file->storePubliclyAs('chapitres', $originalName);
                $input[] = $path_files;
            }
            $chapitre->files = json_encode($input);

        }
        $chapitre->update($input);

        return redirect()->route('create_new_chapter', $request->input('cour_id'))
            ->with('success', 'Chapitre updated successfully');
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
            ->with('success', 'Chapitre deleted successfully');
    }
}
