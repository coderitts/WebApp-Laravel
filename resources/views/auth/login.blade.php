<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login - WebApp</title>
</head>
<body>

	<form method="POST" action="/auth/postlogin">
		@csrf
		<label>
			Email:
		</label>
		<br>
		<input type="email" name="email">
		<br><br>
		<label>
			Password:
		</label>
		<br>
		<input type="password" name="password">
		<br><br>
		<input type="submit" name="login" value="login">
	</form>

</body>
</html>