<?php
try{
	$conn=new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');
	
	$sql="INSERT INTO country(name) VALUES (:name);";

	$query = $conn->prepare($sql);
    $query->execute([
    	'name'=>"UK",
    ]);
    $result = $query->fetchall();
   
   
}catch (PDOException $e){
 echo "Error!: " . $e->getMessage() . "<br/>";
}
?>