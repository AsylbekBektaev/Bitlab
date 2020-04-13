<!DOCTYPE html>
<html>
<head>
	<title>Twitter form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container text-center">
		<div class="d-flex div_class">
			<h1 class="mt-5 ml-5 font-weight-light">
					Добро Пожаловать в TWITTER!
			</h1>
			<a type="button" href="Reg.php" class=" class_a ml-5 mt-2  text-black"><button type="button" class="btn btn-outline-success">Зарегистрироваться</button></a>
		</div>
	
	<div class="container w-50 mt-5 d-flex justify-content-center">
		<form class="text-left mt-1 w-75" action="userGet.php"  method="post">
		  <div class="form-group">
		    <label class="text-">ЛОГИН:</label>
		    <input type="text" class="form-control" placeholder="Введите логин" name="login">
		  </div>
		  <div class="form-group">
		    <label>ПАРОЛЬ:</label>
		    <input type="password" class="form-control" placeholder="Введите пароль" name="password">
		  </div>
		  <button class="btn btn-outline-primary">Войти</button>
	</form>
	</div>
	</div>
</body>
</html>