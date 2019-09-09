@extends('Projects.layout')


@section('content')

	
	<h1 class="title"> Create Project</h1>

	<form method="POST" action="/project">

	@csrf
	<div class="field">
	  <label class="label">Title</label>
	  <div class="control">
	    <input class="input {{ $errors -> has('title') ? 'is-danger':'' }} " type="text" placeholder="Text input" name="title" value={{ old('title') }}>
	  </div>
	</div>

	<div class="field">
	  <label class="label">Description</label>
	  <div class="control">
	    <textarea class="textarea {{ $errors -> has('description') ? 'is-danger':'' }}" name="description">{{ old('description') }}</textarea>
	  </div>
	</div>

	<div class="control">
	  <button class="button is-primary" type="submit">Submit</button>
	</div>


	</form>

	@if ($errors->any())
		<div class="notification is-danger">
			<ul>
		  	@foreach($errors->all() as $error)
		  		<li>{{ $error }}</li>

		  	@endforeach

		  </ul>


		</div>

	@endif



@endsection