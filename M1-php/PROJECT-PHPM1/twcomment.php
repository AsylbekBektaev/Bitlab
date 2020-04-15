<?php
session_start();
	if(isset($_GET['id']) && !empty($_GET['id']) && isset($_GET['userid']) && !empty($_GET['userid']) && isset($_GET['comment']) && !empty($_GET['comment'])){
		try{
		$conn=new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');
		$sql="INSERT INTO `tweet_answers`(tweetid,userid,answer) VALUES (:twid,:usid,:com)";
		 $query = $conn->prepare($sql);
        $query->execute([
        	'twid'=>$_GET['id'],
        	'usid'=>$_GET['userid'],
        	'com'=>$_GET['comment']
        ]);
        $_SESSION['twid']=$_GET['id'];
        	header('Location:profiluser.php');
    }catch(PDOException $e){
	 echo "Error!: " . $e->getMessage() . "<br/>";
	}
	}else{
		header('Location:profiluser.php');
	}
?>