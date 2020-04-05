<?php
if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['country']) && isset($_GET['city'])){
    try {

 $conn = new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');

 $sql = "UPDATE `footbal` SET `Team name`=:name, `Team country`=:country, `Team city`=:city WHERE `#`=:id;";

        $query = $conn->prepare($sql);
        $query->execute([
        	'id'=>$_GET['id'],
        	'name'=>$_GET['name'],
        	'country'=>$_GET['country'],
        	'city'=>$_GET['city'],
        ]);

        header('Location:itog.php');
    }catch(PDOException $e){
        echo "Error!: " . $e->getMessage() . "<br/>";
    }
}else{
	header('Location:update.php');
}
?>