<!DOCTYPE html>
<html>
<head>
	<title>SEARH</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	 <link href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" rel="stylesheet" >
</head>
<body>
	<div class="container">
	<form action="search.php" method="get" class="w-50  d-flex justify-content-center mt-5">
	<label class="mr-3 mt-1">Поиск:</label>
	<input type="text" name="poisk" class="form-control">
	<button class="btn btn-light"><i class="fas fa-search"></i></button>
	</form>
	<ul class="list-group list-group-flush">
		<?php
		if(isset($_GET['poisk']) && !empty($_GET['poisk'])){
		try{
			
	$conn=new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');
	$sql="SELECT * FROM `tusers` WHERE login LIKE :login";
	$query = $conn->prepare($sql);
	 $query->execute([
	 	'login'=>'%'.$_GET['poisk'].'%',
	 ]);
		 $users = $query->fetchall();
		 foreach ($users as $value) {
		?>
		  <a href="profiluser.php?pp=<?php echo $value['id'];?>"><li class="list-group-item"><?php echo $value['login']?></li></a>
		<?php
	}
	}catch(PDOException $e){
 echo "Error!: " . $e->getMessage() . "<br/>";
}
}else{
	echo "Поиск пустой";
}
?>	
	</ul>
		
	</div>
	<a href="profiluser.php"><button  class="btn btn-outline-primary mt-5 ml-2">НАЗАД</button></a>
</body>
</html>