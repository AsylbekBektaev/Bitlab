<?php 
	session_start();
	if(isset($_SESSION['id']) && isset($_GET['id2'])){
		try{
			
					$conn=new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');
					$sql="INSERT INTO `followers`(userid,followerid) VALUES (:userid,:followerid);";
					$query = $conn->prepare($sql);
				    $query->execute([
				    	'userid'=>$_GET['id2'],
				    	'followerid'=>$_SESSION['id']
				    ]);
				   
				   	$sql3="INSERT INTO `follows`(userid,followid) VALUES (:userid,:followid);";
				   	$query3 = $conn->prepare($sql3);
					$query3->execute([
						'userid'=>$_SESSION['id'],
						'followid'=>$_GET['id2']
					]);

	

	$sql2="SELECT fol.id,tu.login as user_id,tuf.login as follower_id FROM `followers` as fol LEFT OUTER JOIN `tusers` as tu ON fol.userid=tu.id
	LEFT OUTER JOIN `tusers` as tuf ON fol.followerid=tuf.id";

		$query2 = $conn->prepare($sql2);
		$query2->execute();
		$result2 = $query2->fetchall();



		$sql4="SELECT fol.id,tu.login as user_id,tuf.login as follow_id FROM `follows` as fol LEFT OUTER JOIN `tusers` as tu ON fol.userid=tu.id
	LEFT OUTER JOIN `tusers` as tuf ON fol.followid=tuf.id";

		$query4 = $conn->prepare($sql4);
		$query4->execute();
		$result4 = $query4->fetchall();
		header('Location:profiluser.php');

		}catch(PDOException $e){
	 echo "Error!: " . $e->getMessage() . "<br/>";
	}
	}else{
		header('Location:profiluser.php');
	}
?>