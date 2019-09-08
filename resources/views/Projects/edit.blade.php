@extends('Projects.layout')

@section('content')



	<form method="POST" action="/project/{{ $project->id }}">

		@method('PATCH')
		@csrf

		<h1 class="title">Edit Page</h1>

		<div class="field">
		  <label class="label">Title</label>
		  <div class="control">
		    <input class="input" type="text" placeholder="Text input" name="title" value="{{ $project->title }}">
		  </div>
	
		</div>


		<div class="field">
		  <label class="label">Description</label>
		  <div class="control">
		   <textarea class="textarea" name="description" placeholder="hello">{{ $project->description }}</textarea>
		  </div>
	
		</div>	

		<div class="control">
		  <button type="submit" class="button is-primary">Update Project</button>
		</div>

	</form>

	<form method="POST" action="/project/{{ $project->id }}">

		@method('DELETE')
		@csrf

		<div class="control">
		  <button type="submit" class="button is-primary">Delete Project</button>
		</div>

	</form>



@endsection

