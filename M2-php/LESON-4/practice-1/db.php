<?php
 if($_SERVER['REQUEST_METHOD']=='GET'){
	try{
		$conn = new PDO('mysql:host=localhost;dbname=bitlab','root','');

		
		
		$conn = new PDO('mysql:host=localhost;dbname=bitlab','root','');
        $sql="SELECT * FROM `country`";
        $query = $conn->prepare($sql);
        $query->execute();
        $cou=$query->fetchall();
        echo  json_encode($cou);

		
      

	}catch(PDOException $e){
		 echo "Error!: " . $e->getMessage() . "<br/>";
	}
}else{
	header('Location:form.php');
}

?>