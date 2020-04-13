
<!DOCTYPE html>
<html>
<head>
	<title>REGISTR</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container text-center">
		<div class="block_title">
			<h1 class=" block_h1 mt-5  font-weight-light">
				Зарегистрироваться
			</h1>
			<a type="button" href="form.php" class=" mt-2  text-black"><button type="button" class="btn btn-outline-success">Я Зарегистрирован</button></a>
		</div>
	
	<div class="container w-50 mt-2 d-flex justify-content-center">
		<form class="text-left mt-1 w-75" action="userReg.php"  method="post">
			<div class="form-group">
		    <label class="text-">Логин:</label>
		    <input type="text" class="form-control" placeholder="Введите Логин" name="login" >
		  	</div>
			<div class="form-group">
		    <label class="text-">Пароль:</label>
		    <input type="text" class="form-control" placeholder="Введите Пароль" name="password">
		  	</div>
		  <div class="form-group">
		    <label class="text-">Имя:</label>
		    <input type="text" class="form-control" placeholder="Введите Имя" name="name">
		  </div>
		  <div class="form-group">
		    <label>Фамилия:</label>
		    <input type="text" class="form-control" placeholder="Введите Фамилию" name="surname">
		  </div>
		   <div class="form-group">
		    <label>Пол:</label>
		    <div class="d-flex">
		    	<span class="ml-5"><label class="pol">Мужской</label>
		    	<label  class="type"><input  type="radio" name="pol" value="Мужской"></label></span>
		    	<span class="ml-5"><label class="pol">Женский</label>
		    	 <label class="type"><input  type="radio" name="pol" value="Женский"></label></span>
		    </div>
		  	</div>
		  	<div  class="form-group">
		  	<label class="mr-2">Страна:</label>
		  	<select class="form-control" name="country">
		  	<?php
				try{
	$conn=new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');
	$sql="SELECT * FROM `country`";
	$query = $conn->prepare($sql);
	 $query->execute();
		 $result = $query->fetchall();
			 	foreach ($result as  $name) {
				    ?>
				 <option value="<?php echo $name['id'];?>"><?php echo $name['name'];?></option>
		<?php
		}
		}catch(PDOException $e){
			 echo "Error!: " . $e->getMessage() . "<br/>";
		}
		  ?>
		</select>
		</div>

		 	<div  class="form-group">
		  	<label class="mr-2">Город:</label>
		  	<select class="form-control" name="city">
		  	<?php
				try{
	$sql="SELECT * FROM `city`";
	$query = $conn->prepare($sql);
	 $query->execute();
		 $city = $query->fetchall();
			 	foreach ($city as  $city) {
				    ?>
				 <option value="<?php echo $city['id'];?>"><?php echo $city['name'];?></option>
		<?php
		}
		}catch(PDOException $e){
			 echo "Error!: " . $e->getMessage() . "<br/>";
		}
		  ?>
		</select>
		</div>
		  <button class="btn btn-outline-primary">Зарегистрироваться</button>
	</form>
	</div>
	</div>
</body>
</html>>