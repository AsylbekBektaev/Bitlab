<?php
	try{
		function funlog(){
		$conn = new PDO('mysql:host=localhost;dbname=bitlab','root','');
		$sql="SELECT * FROM `tusers`";
        $query = $conn->prepare($sql);
        $query->execute();
        $loggo=$query->fetchall();
        return $loggo;
    	}
	}catch(PDOException $e){
		 echo "Error!: " . $e->getMessage() . "<br/>";
	}

?>