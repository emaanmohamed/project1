<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));

    }

    public function show($id)
    {

        $project = Project::findOrFail($id);

       // dd($project);

        return view('projects.show', compact('project'));
    }

    public function create()
     {

         return view('projects.create');
     }

    public function store()
     {

//         Project::create(
//
//             request()->validate([
//             'title'       => ['required', 'min:3'],
//             'description' => ['required', 'min:3'],
//             'password'    => ['required' ,'confirmed']
//
//             ])
//
//         );
//         return redirect( url('/projects'));

       //  Project::created(request(['title'], 'description'));
//
//        $x = request()->validate([
//             'title'       => ['required', 'min:3'],
//             'description' => ['required', 'min:3']
//        ]);


         $project = new Project();

         $project->title = request('title');

         $project->description = request('description');

         $project->save();

           return redirect( url('/projects'));
     }

    public function edit($id)
     {
         $project = Project::findOrFail($id);

         return view('projects.edit', compact('project'));

     }

     public function update($id)
     {

         $project = Project::findOrFail($id);

         $project->title = request('title');

         $project->description = request('description');

         $project->update();

         $project->save();

         //dd($project);

            redirect(url('/projects'));
     }

     public function destroy($id)
     {

         $project = Project::findOrFail($id);

        $project->delete();

        return redirect('/projects');

     }



}
