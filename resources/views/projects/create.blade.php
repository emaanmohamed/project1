@extends('projects.layout')



@section('content')



    <h1 class="title" style="margin-top: 30px">Create a new Project</h1>

    <form method="POST" action="/project1/public/projects" style="margin-bottom: 50px">
        {{ method_field('POST') }}

        {{csrf_field()}}

        <div class="field">
            <label class="label" for="title">Project Title</label>

            <div class="control">
                <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" value="{{ old('title') }}">

            </div>
        </div>


        <div class="field">
            <label class="label" for="description">Project Description</label>

            <div class="control">
                <textarea name="description" class="textarea {{ $errors->has('title') ? 'is-danger' : '' }}" >{{ old('description') }}</textarea>

            </div>
        </div>
        <div class="field">

            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>

            </div>
        </div>

        @if (count($errors) > 0)

        <div class="notification is-danger">
            <ul>
                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                    @endforeach

            </ul>
        </div>

            @endif
    </form>

    @endsection