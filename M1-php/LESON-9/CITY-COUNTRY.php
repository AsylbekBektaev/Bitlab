<?php
try{
	$conn=new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');

$sql="SELECT teams.id ,teams.name as name_team,country.name as name_contry,city.name as name_city FROM  teams LEFT OUTER JOIN city ON teams.city=city.id 
	LEFT OUTER JOIN country ON teams.country=country.id";

	$query = $conn->prepare($sql);
    $query->execute();
    $result = $query->fetchall();
   
   
}catch (PDOException $e){
 echo "Error!: " . $e->getMessage() . "<br/>";
}
?>