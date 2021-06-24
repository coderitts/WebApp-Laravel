<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<head>
	<meta charset="utf-8">
	<title>webApp - Laravel</title>
</head>
<body>

<div class="container">

	<h1>
		Project Crud - webApp Laravel
	</h1>

	<br>

	<form method="POST" action="/article/store">
		@csrf
		<div class="form-group">
		<label>
			Title:
		</label>
		<br>
		<input class="form-control" type="text" name="title">
		</div>
		<br>
		<div class="form-group">
		<label>
			Description:
		</label>
		<br>
		<textarea class="form-control" name="description"></textarea>
		</div>
		<br><br>
		<input class="btn btn-success" type="submit" name="create" value="create article">
	</form>

	<br> 
	<br>

	<table class="table" border="2">
		<thead>
		<tr>
			<th scope="col">No</th>
			<th scope="col">Title</th>
			<th scope="col">Description</th>
			<th scope="col">Action</th>
		</tr>
		</thead>

		<tbody>
		@foreach($index as $indeks)
		<tr>
			<th scope="row">{{$loop->iteration}}</th>
			<td>{{$indeks->title}}</td>
			<td>{{$indeks->description}}</td>
			<td>
				<a class="btn btn-sm btn-dark" href="/article/edit/{{$indeks->id}}">
					edit
				</a>

				<a class="btn btn-sm btn-danger" href="/article/delete/{{$indeks->id}}">
					delete
				</a>
			</td>
		</tr>
		@endforeach
		</tbody>

	</table>

</div>	

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>