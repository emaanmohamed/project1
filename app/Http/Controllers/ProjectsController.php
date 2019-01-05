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

        dd($projects);

        return view('projects.index', compact('projects'));

    }

    public function show(Project $project)
    {

        return view('projects.show', compact('project'));
    }

    public function create()
     {

         return view('projects.create');
     }
     public function store()
     {
         request()->validate([
             'title'       => 'required',
             'description' => 'required'
         ]);

         Project::created(request(['title'], 'description'));
//         Project::created([
//             'title'        => request('title'),
//             'description'  => request('description')
//         ]);

//         $project = new Project();
//
//         $project->title = request('title');
//
//         $project->description = request('description');

//         $project->save();

         return redirect('/project1/public/projects');
     }
     public function edit(Project $project)
     {

            return view('projects.edit', compact('project'));
     }

     public function update(Project $project)
     {

         $project->update(request(['title', 'description']));

//         $project->title = request('title');
//
//         $project->description = request('description');

//         $project = Project::findOrFail($id);
//
//         $project->title = request('title');
//
//         $project->description = request('description');
//
   //
         //        $project->save();

         return redirect('/projects');
     }

     public function destroy(Project $project)
     {
        $project->delete();
        return redirect('/projects');
     }



}
