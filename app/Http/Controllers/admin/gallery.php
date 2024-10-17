<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\project;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class gallery extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(project $project)
    {
        $images = $project->gallery()->latest()->paginate(20);
        // dd($images);
        // dd('kir');
        return view('admin.componnets.gallery.all',compact('images','project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(project $project)
    {

        return view('admin.componnets.gallery.create',compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , project $project)
    {
        $data= $request->validate([
            'image' => ['required'],
            'alt' => ['required','string'],
            'project_id'=> ['required']

        ]);
        $data['image']=Storage::disk('public')->putFile( 'files', request()->file('image'));
        
        $project->gallery()->create($data);
        return redirect(route('project.gallery.index',['project'=>$project->id]));
        //return redirect()->route('project.gallery.index','project'=>$project->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(project $project, gallery $gallery,string $id)
    {
        $d=$project->gallery()->where('id',$id)->delete();
        return back();
    }
}
