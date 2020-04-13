<?php
session_start();
	if(isset($_GET['twit']) && !empty($_GET['twit']) && isset($_SESSION['id'])){
		
		$conn4=new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');
				$sql4="INSERT INTO `tweets`(userid,tweet) VALUES (:id,:twit);";
						$query4 = $conn4->prepare($sql4);
    					$query4->execute([
    						'id'=>$_SESSION['id'],
    						'twit'=>$_GET['twit']
    					]);
    					header('Location:profiluser.php');

}else{
	echo "NOOOOO";
}


?>