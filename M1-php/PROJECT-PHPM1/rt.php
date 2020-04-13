<?php
session_start();
if(isset($_GET['redtwit']) && !empty($_GET['redtwit']) && isset($_GET['id']) && !empty($_GET['id']) && isset($_SESSION['id']) && isset($_SESSION['login']) && isset($_SESSION['password'])){
 try {

        $conn = new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');

        $sql = "UPDATE `tweets` SET `tweet`=:tw WHERE tweets.id = :id ";

        $query = $conn->prepare($sql);
        $query->execute(
        	['id'=>$_GET['id'],
        	 'tw'=>$_GET['redtwit']
    	]);
		header('Location:profiluser.php');
    }catch (PDOException $e){
        echo "Error!: " . $e->getMessage() . "<br/>";
    }
}else{
	header('Location:redtwit.php');
}
?>