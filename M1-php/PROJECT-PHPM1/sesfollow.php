<?php 
	session_start();
	if(isset($_SESSION['login']) ){
try{
	
$conn=new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');

  $sql4="SELECT fol.id,tu.login as user_id,tuf.login as follow_id FROM `follows` as fol LEFT OUTER JOIN `tusers` as tu ON fol.userid=tu.id
	LEFT OUTER JOIN `tusers` as tuf ON fol.followid=tuf.id WHERE fol.userid=:id";

		$query4 = $conn->prepare($sql4);
		$query4->execute(['id'=>$_SESSION['id']]);
		$result4 = $query4->fetchall();
		
}catch(PDOException $e){
	 echo "Error!: " . $e->getMessage() . "<br/>";
	}
}else{
	echo "NOO";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>followers</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Подписки</h1>
	<?php
	
	foreach ($result4 as $value) {
	?>
  	<a href="profiluser.php?pp=<?php echo $value['id'];?>"><?php echo $value['follow_id'];?></a><br>
	<?php
	}
	?>
	</div>
</body>
</html>