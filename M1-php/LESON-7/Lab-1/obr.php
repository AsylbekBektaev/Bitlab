<?php
	try{
	$conn = new PDO('mysql:host=localhost;dbname=bitlab','root','');
	$sql="INSERT INTO `items`(`name`,`price`)VALUES(:name,:price)";

	$query = $conn->prepare($sql);
    $query->execute([
    	'name'=>'RRR T55',//здесь пишется имя товара которого хотим добавить в таблицу
        'price'=>100,]);//здесь пишется сумма товара которого хотим добавить в таблицу
   	 print_r($query);
		header('Location:mag.php');	
	}catch(PDOException $e){
		echo "FAILED:  ".$e->getMessage();
	}

?>