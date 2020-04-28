<?php
	if($_SERVER['REQUEST_METHOD']=='GET'){
		try{
        
    	$conn = new PDO('mysql:host=localhost;dbname=bitlab','root','');
//
        $sql="INSERT INTO teams(name,country,city) VALUES (:nm,:cu,:ci);";
        $query = $conn->prepare($sql);
        $query->execute([
        	'nm'=>$_GET['name'],
        	'cu'=>$_GET['country'],
        	'ci'=>$_GET['city']
    	]);
        echo "<div class='alert alert-danger' role='alert'>ВЫ ДОБАВИЛИ КОМАНДУ!</div>";
    }catch(PDOException $e){
         echo "Error!: " . $e->getMessage() . "<br/>";
    }








	}else{
		header('Location:form.php');
	}

?>