@extends('projects.layout')



@section('content')



    <h1 class="title" style="margin-top: 30px">Edit Project</h1>

    <form method="POST" action="/project1/public/projects/{{ $project->id }}" style="margin-bottom: 50px">
        {{ method_field('PATCH') }}

        {{csrf_field()}}

        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">

            </div>
        </div>


    <div class="field">
        <label class="label" for="description">Description</label>

        <div class="control">
          <textarea name="description" class="textarea">{{ $project->description }}</textarea>

        </div>
    </div>
        <div class="field">

            <div class="control">
              <button type="submit" class="button is-link">Update Project</button>

            </div>
        </div>

    </form>

    <form method="POST" action="/project1/public/projects/{{ $project->id }}">

        {{csrf_field() }}
        {{ method_field('DELETE') }}

        <div class="field">

            <div class="control">
                <button type="submit" class="button">Delete Project</button>

            </div>
        </div>

    </form>
    @endsection


















{{--</head>--}}
{{--<body>--}}

{{--<h1>create a new Projects</h1>--}}

{{--<form method="POST" action="/projects">--}}

    {{--{{csrf_field()}}--}}

    {{--<div>--}}
        {{--<input type="text" name="title" placeholder="Project title">--}}

    {{--</div>--}}

    {{--<div>--}}

        {{--<textarea name="description" placeholder="Project description"></textarea>--}}

    {{--</div>--}}

    {{--<div>--}}

        {{--<button type="submit">Create Project</button>--}}

    {{--</div>--}}

{{--</form>--}}

{{--</body>--}}
