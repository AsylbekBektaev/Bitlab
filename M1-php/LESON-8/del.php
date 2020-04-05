<?php
    try {

        $conn = new PDO('mysql:host=localhost;dbname=bitlab', 'root','');

        $sql = "
               DELETE FROM `footbal`
               WHERE `#` = :user_id
        ";

        $query = $conn->prepare($sql);
        $query->execute(['user_id'=>$_GET['id']]);
        header('Location:itog.php');

    }catch (PDOException $e){
        echo "Error!: " . $e->getMessage() . "<br/>";
    }
?>