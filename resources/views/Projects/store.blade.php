<html>
<head></head>

<body>
	<h1>Create Project</h1>

	<form method="POST" action="/project">

		{{ csrf_field() }}
		<div>
			<input type="text" name="title" placeholder="Enter Title">
		</div>

		<div>
			<textarea name="description" placeholder="Enter description"></textarea>
		</div>

		<input type="submit" value="SUBMIT">
	</form>


</body>
</html>