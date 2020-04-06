<?php

	  try {
        $conn = new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');

        $sql = "INSERT INTO `teams`(name,country,city) VALUES (:name,:country,:city);";

        $query = $conn->prepare($sql);
        $query->execute([
        	'name'=>$_GET['name'],
        	'country'=>$_GET['country'],
        	'city'=>$_GET['city']
        ]);
        }catch(PDOException $e) {
   echo "Error!: " . $e->getMessage() . "<br/>";
  }
  ?>