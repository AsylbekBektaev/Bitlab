<?php
if(isset($_POST['login']) && ! empty($_POST['login']) && isset($_POST['password']) && ! empty($_POST['password']) && isset($_POST['name']) && ! empty($_POST['name']) && isset($_POST['surname']) && ! empty($_POST['surname']) && isset($_POST['pol']) && ! empty($_POST['pol'])  &&
 isset($_POST['country']) && ! empty($_POST['country']) && isset($_POST['city']) && ! empty($_POST['city'])){
		try{

	$conn=new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');

	$sql3="INSERT INTO `tusers`(login,password) VALUES(:login,:password)";
	$query3 = $conn->prepare($sql3);
	 $query3->execute([
	 	'login'=>$_POST['login'],
	 	'password'=>$_POST['password']
	 ]);
	 $pos=$conn->lastinsertid();




	$sql2="INSERT INTO `user_data`(usss,name,surname,gender,country,city) VALUES(:login,:name,:surname,:gender,:country,:city)";
	$query2 = $conn->prepare($sql2);
	 $query2->execute([
	 	'login'=>$pos,
	 	'name'=>$_POST['name'],
	 	'surname'=>$_POST['surname'],
	 	'gender'=>$_POST['pol'],
	 	'country'=>$_POST['country'],
	 	'city'=>$_POST['city']
	 ]);

	 echo $pos;

	$sql="SELECT ud.id,tu.login,ud.name,ud.surname,ud.gender,cou.name,ci.name FROM `user_data` as ud LEFT OUTER JOIN `tusers` as tu ON ud.usss=tu.id LEFT OUTER JOIN `country`as cou ON ud.country=cou.id LEFT OUTER JOIN `city` as ci ON ud.city=ci.id";
	$query = $conn->prepare($sql);
	 $query->execute();
	
		}catch(PDOException $e){
			 echo "Error!: " . $e->getMessage() . "<br/>";
		}
	}else{
		header('Location:Reg.php');
	}

?>