<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register - webApp</title>
</head>
<body>

	<form method="POST" action="/auth/postregister">
		@csrf
		<label>
			Email:
		</label>
		<br>
		<input type="email" name="email">
		<br><br>
		<label>
			Name:
		</label>
		<br>
		<input type="text" name="name">
		<br><br>
		<label>
			Password:
		</label>
		<br>
		<input type="password" name="password">
		<br><br>
		<input type="submit" name="register" value="register">
	</form>

</body>
</html>