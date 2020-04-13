	<?php  
	session_start();
	try {
        $conn = new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');

        $sql = "SELECT * FROM `user_data` WHERE user_data.usss=:id;";

        $query = $conn->prepare($sql);
        $query->execute(['id'=>$_SESSION['id']]);
        $result = $query->fetch();
        }catch(PDOException $e) {
   echo "Error!: " . $e->getMessage() . "<br/>";
  }
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container d-flex justify-content-center">
		<form action="up.php" method="get" class="w-50 mt-5">
			<input type="hidden" name="id" value="<?php echo $result['id'];?>">
		  <div class="form-group">
		    <label class="text-">Имя:</label>
		    <input type="text" class="form-control" name="name" value="<?php if(isset($_SESSION['login']) && isset($_SESSION['password'])){
		    	echo $result['name'];
		    }?>">
		  </div>
		  <div class="form-group">
		    <label>Фамилия:</label>
		    <input type="text" class="form-control" placeholder="Введите Фамилию" name="surname" value="<?php if(isset($_SESSION['login']) && isset($_SESSION['password'])){
		    	echo $result['surname'];
		    }?>">
		  </div>
		   <div class="form-group">
		    <label>Пол:</label>
		    <div class="d-flex">
		    	<span class="ml-5"><label class="pol">Мужской</label>
		    	<label  class="type"><input  type="radio" name="pol" value="Мужской" ></label></span>
		    	<span class="ml-5"><label class="pol">Женский</label>
		    	 <label class="type"><input  type="radio" name="pol" value="Женский"></label></span>
		    </div>
		  	</div>
		  	<div  class="form-group">
		  	<label class="mr-2">Страна:</label>
		  	<select class="form-control" name="country" >
		  	<?php
				try{
	$conn=new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');
	$sql="SELECT * FROM `country`";
	$query = $conn->prepare($sql);
	 $query->execute();
		 $result = $query->fetchall();
			 	foreach ($result as  $name) {
				    ?>
				 <option value="<?php if(isset($_SESSION['login']) && isset($_SESSION['password'])){
		    	echo $name['id'];
		    }?>"><?php echo $name['name'];?></option>
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
				 <option value="<?php if(isset($_SESSION['login']) && isset($_SESSION['password'])){
		    	echo $city['id'];
		    }?>"><?php echo $city['name'];?></option>
		<?php
		}
		}catch(PDOException $e){
			 echo "Error!: " . $e->getMessage() . "<br/>";
		}
		  ?>
		</select>
		</div>
		  <button class="btn btn-outline-primary">Редактировать</button>
	</form>
	<a href="set.php"><button  class="btn btn-outline-primary">НАЗАД</button></a>
	</div>
</body>
</html>