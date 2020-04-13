<?php
session_start();
if(isset($_GET['id']) && !empty($_GET['id'])  && isset($_SESSION['id']) && isset($_SESSION['login']) && isset($_SESSION['password'])){

 try {

        $conn = new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');

        $sql = "DELETE FROM `tweets` WHERE tweets.id=:id";

        $query = $conn->prepare($sql);
        $query->execute(['id'=>$_GET['id']]);

        header('Location:profiluser.php');

    }catch (PDOException $e){
        echo "Error!: " . $e->getMessage() . "<br/>";
    }
}else{
	header('Location:profiluser.php');
}

   
?>