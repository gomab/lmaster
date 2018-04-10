<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       if(Auth::check()){
           // $projects = Project::all();
            $projects = Project::where('user_id', Auth::user()->id)->get();

            return view('projects.index', ['projects' => $projects]);
        }

        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if(Auth::check()){
            $Project = Project::create([
                'name'        => $request->input('name'),
                'description' => $request->input('description'),
                'user_id'     => Auth::user()->id
            ]);

            if($Project){
                return redirect()->route('projects.show', ['Project' => $Project->id])
                        ->with('success', 'Project created successfully');
            }
        }

          //Redirect
          return back()->withInput()->with('error', 'Error creating new Project'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $Project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $Project)
    {
        //
        //$Project = Project::where('id', $Project->id)->first();
        $Project = Project::find($Project->id);

        return view('projects.show', ['Project' => $Project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $Project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $Project)
    {
        //
        $Project = Project::find($Project->id);

        return view('projects.edit', ['Project' => $Project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $Project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $Project)
    {
        //Save data
        $ProjectUpdate = Project::where('id', $Project->id)
                                ->update([
                                    'name' => $request->input('name'),
                                    'description' => $request->input('description')
                                ]);
        
        if($ProjectUpdate){
            return redirect()->route('projects.show', ['Project' => $Project->id])
                ->with('success', 'Project updated successfully');
        }                        

        //Redirect
        return back()->withInput();
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $Project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $Project)
    {
        //
        $findProject = Project::find($Project->id);

        if($findProject->delete()){
            //redirect
            return redirect()->route('projects.index')
                ->with('success', 'Project deleted successfully');
        }

        return back()->withInput()->with('errors', 'Project could not be deleted');
    }
}
