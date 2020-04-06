<?php
try{
	$conn=new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');
	
	$sql="INSERT INTO city(name) VALUES (:name);";

	$query = $conn->prepare($sql);
    $query->execute([
    	'name'=>"Chelsea",
    ]);
    $result = $query->fetchall();
   
   
}catch (PDOException $e){
 echo "Error!: " . $e->getMessage() . "<br/>";
}
?>