<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Project;
use App\Task;

class ProjectTasksController extends Controller
{

    public function update()
    {

        dd('hello');
    }
    public function store(Project $project)
    {
        Task::create([

            'project_id'  => $project->id,

            'description' => request('description')
        ]);

        return back();
    }
}
