<!DOCTYPE html>
<html>
<head>
	<title>redtwit</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<?php 
session_start();

	if(isset($_GET['id']) && !empty($_GET['id']) && isset($_SESSION['id']) && isset($_SESSION['login']) && isset($_SESSION['password'])){
			try{
		
			$conn=new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');
		
			$sql="SELECT tws.id,tu.login as user_id,tws.tweet,tws.post_date FROM `tweets` as tws LEFT OUTER JOIN `tusers` as tu ON tws.userid=tu.id  WHERE tws.id=:id";
		
				$query = $conn->prepare($sql);
			
			    $query->execute(['id'=>$_GET['id']]);
			 
			    $twit = $query->fetch();
			   
			    print_r($twit);

		?>
		<h1>Редактировать твит</h1>
		<form action="rt.php" method="get">
			<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
		  <div class="form-group">
		    <label for="exampleInputEmail1"><?php ?></label>
		  <input type="text" name="redtwit" value="<?php echo $twit['tweet'];?>">
		  </div>
		  <button type="submit" class="btn btn-primary">Редактировать</button>
		</form>
		
		<?php
		}catch(PDOException $e){
	 echo "Error!: " . $e->getMessage() . "<br/>";
	}
	}else{
		echo "NOOO";
	}
?>
</div>
</body>
</html>