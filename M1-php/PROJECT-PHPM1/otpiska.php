<?php
session_start();
	if(isset($_GET['id2']) && !empty($_GET['id2']) && isset($_SESSION['id']) && !empty($_SESSION['id'])){
		try{
			
			$_SESSION['ttt']=$_GET['id2'];
			
			
			$conn=new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');

	$sql=" DELETE FROM `followers` as fol WHERE  fol.userid=:userid and fol.followerid=:followerid";
					   $query = $conn->prepare($sql);
      				  $query->execute([
      				  		'userid'=>$_SESSION['ttt'],
      				  		'followerid'=>$_SESSION['id']
      				  ]);
							
      $sql2=" DELETE FROM `follows` as fols WHERE fols.userid=:userid and fols.followid=:followid";
					   $query2 = $conn->prepare($sql2);
      				  $query2->execute([
      				  	'userid'=>$_SESSION['id'],
      				  	'followid'=>$_SESSION['ttt']
  
      				  ]);
      				  
	header('Location:profiluser.php');

					
		}catch(PDOException $e){
	 echo "Error!: " . $e->getMessage() . "<br/>";
	}
	}else{
		echo "NOOO";
	}
?>


