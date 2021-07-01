<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Article - webApp</title>
</head>
<body>

	@foreach($data as $data)
	<form method="POST" action="/dashboard/article/update">
		@csrf
		<input type="hidden" name="id" value="{{$data->id}}">	
		<label>
			Title:
		</label>
		<br>
		<input type="text" name="title" value="{{$data->title}}">
		<br>
		<label>
			Description:
		</label>
		<br>
		<textarea name="description">{{$data->description}}</textarea>
		<br><br>
		<input type="submit" name="create" value="update article">
	</form>
	@endforeach

</body>
</html>