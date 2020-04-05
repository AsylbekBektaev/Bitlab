<?php
	if(isset($_POST['name']) && isset($_POST['country']) && isset($_POST['city'])){
	try{
		$conn = new PDO('mysql:host=localhost;dbname=bitlab','root','');
		$sql="INSERT INTO `footbal` (`Team name`, `Team country`, `Team city`) VALUES (:name, :country, :city);";

		 $query = $conn->prepare($sql);
         $query->execute([
         	'name'=>$_POST['name'],
         	'country'=>$_POST['country'],
         	'city'=>$_POST['city'],
         ]);
		header('Location:itog.php');	
	}catch(PDOException $e){
		echo "FAILED:  ".$e->getMessage();
	}
}else{
	header('Location:form.php');
}
?>