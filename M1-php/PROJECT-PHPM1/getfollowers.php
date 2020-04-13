<?php 
	session_start();
	if(isset($_SESSION['login']) && isset($_SESSION['password'])){
try{
	
$conn=new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');

   $sql2="SELECT fol.id,fol.userid,tu.login as user_id,fol.followerid,tuf.login as follower_id FROM `followers` as fol LEFT OUTER JOIN `tusers` as tu ON fol.userid=tu.id
	LEFT OUTER JOIN `tusers` as tuf ON fol.followerid=tuf.id WHERE fol.userid=:id";

		$query2 = $conn->prepare($sql2);
		$query2->execute(['id'=>$_GET['id2']]);
		$result2 = $query2->fetchall();
		
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
		<h1>Подписчики</h1>
	<?php
	
	foreach ($result2 as $value) {
	?>
  	<a href="profiluser.php?pp=<?php echo $value['id'];?>"><?php echo $value['follower_id'];?></a><br>
	<?php
	}
	?>
	</div>
</body>
</html>