@extends('projects.layout')


@section('content')

    <h1 class="title">{{ $project->title  }} eman </h1>

    <div class="content">{{ $project->description }}</div>

   <p>

       <a href="/projects/{{ $project->id }}/edit">Edit</a>
   </p>

    @if ($project->tasks->count())

    <div>

        @foreach ($project->tasks as $task)

            <div>
                <form method="POST" action="project1/public/tasks/{{ $task->id }}">

                    {{ method_field('PATCH') }}

                    {{ csrf_field() }}

                    <label class="checkbox" for="completed">

                        <input type="checkbox" name="completed">

                    </label>
                </form>

            </div>

            @endforeach

    </div>

    @endif

    <p>
        <a href="/project1/public/projects/{{$project->id }}/edit">Edit</a>
    </p>
    @endsection