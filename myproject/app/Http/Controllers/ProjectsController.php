<?php

namespace App\Http\Controllers;

use App\project;

class ProjectsController extends Controller
{
    public function index(){
        $projects = project::all();
//        return $projects;
//        return view('projects.index');
//        return view('projects.index',compact('projects'));
        return view('projects.index', ['projects' => $projects]);
    }

    public function create(){
        return view('projects.create');
    }
    public function store(){
        $project = new Project();
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        return redirect('/projects');
    }
    public function edit($id){
        $project = Project::find($id);
        return view('/projects.edit', compact('project'));
    }
    public function update($id){
        $project = Project::find($id);
        $project -> title = request('title');
        $project -> description = request('description');
        $project -> save();
        return redirect('/projects');
//                dd(request()->all());
        //        dd('Hello');
    }
}
