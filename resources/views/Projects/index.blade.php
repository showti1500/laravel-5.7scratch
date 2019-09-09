
@extends('Projects.layout')


@section('content')

	<h1 class="title">Project</h1>

	<ul>

	@foreach( $projects as $project)
		<li><a href="/project/{{ $project->id }}">{{ $project->title }}</a></li>



	@endforeach

	</ul>

@endsection