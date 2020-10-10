<!DOCTYPE html>
<html>
<head>
	<title>Tula Web Cup Progger - train</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container"> 
	<h1 class="text-center">Добро пожаловать в информационную систему нашего города!</h1>
	<h3 class="text-center">Пожалуйста, пройдите регистрацию</h3>
	<form class="registr-form" action="AUTH.php" method="post">
		<input class="form-control" type="text" placeholder="login" name="user_name">
		<input class="form-control" type="password" placeholder="password" name="user_password">
		<input class="btn btn-success" type="submit" value="Войти">
	</form>
	<div class="row card-user-info">
		<div class="col-md-3">
			<h4 class="text-center">Администратор</h4>
			<div>Login: Admin</div>
			<div>Password: 12345</div>
		</div>
		<div class="col-md-3">
			<h4 class="text-center">Пользователь ПСО</h4>
			<div>Login: User_RSO</div>
			<div>Password: 54321</div>
		</div>
		<div class="col-md-3">
			<h4 class="text-center">Диспетчер</h4>
			<div>Login: Dispatcher</div>
			<div>Password: 67890</div>
		</div>
		<div class="col-md-3">
			<h4 class="text-center">Наблюдатель</h4>
			<div>Login: Observer</div>
			<div>Password: 09876</div>
		</div>
	</div>
</div>
</body>
</html>