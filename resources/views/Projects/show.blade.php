@extends('Projects.layout')


@section('content')

	<h1 class="title"> {{ $project->title }}</h1>

	<h2 class="subtitle">{{ $project->description }}</h2>

	<a href="/project/{{ $project->id }}/edit">Edit</a>

	@if($project->tasks->count())

	<div>
		

		@foreach($project->tasks as $task)
		<div>
		  	<form method="POST" action="/complete-task/{{ $task->id }}">
		
		  	
		  	@if ($task->completed)
		  		@method('DELETE')
		  	@endif

		  	@csrf
			  	<label class="checkbox {{ $task->completed ? 'checked' : '' }}" for="completed">
			  		<input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked':''}} >
			  			{{ $task->description }}
			  
				</label>
			</form>
		</div?

		@endforeach

	</div>
	@endif

	<form method="POST" action="/project/{{ $project->id }}/task">
	@csrf

				<div class="field">
				  <label class="label">Add Task</label>
				  <div class="control">
				    <input class="input" type="text" placeholder="Text input" name="description" required>
				  </div>
				</div>

				<div class="control">
				  <button class="button is-primary" type="submit">Submit</button>
				</div>


			</form>

			@include('error')

@endsection