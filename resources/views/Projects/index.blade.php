<html>
<head></head>

<body>
	<h1>Project</h1>

	<ul>
	@foreach( $projects as $project)

			<li><a href="/project/{{ $project->id }}">{{ $project->title }}</a></li>
			
	@endforeach
	</ul>

</body>
</html>