@extends('Projects.layout')


@section('content')

	<h1 class="title"> View Project</h1>

	<br>

	<h2 class="subtitle">{{ $project->title }}</h2>

	<h2 class="subtitle">{{ $project->description }}</h2>

	<a href="/project/{{ $project->id }}/edit">Edit</a>
@endsection