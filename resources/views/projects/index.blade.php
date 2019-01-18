@extends('projects.layout')

@section('content')

    <h1 class="title">Projects</h1>

    <ul>
    @foreach($projects as $project)

        <li>
            <a href="/project1/public/projects/{{ $project->id }}">

                {{ $project->title }}

            </a>
        </li>
    @endforeach

    </ul>

@endsection