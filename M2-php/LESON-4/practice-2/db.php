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

    	function Reg($a,$b,$c){
    	$conn = new PDO('mysql:host=localhost;dbname=bitlab','root','');
		$sql="INSERT INTO `tusers`(login,password,full_name) VALUES (:log,:pas,:fn);";
        $query = $conn->prepare($sql);
        $query->execute([
        	'log'=>$a,
            'pas'=>$b,
        	'fn'=>$c
        	
        ]);
    	}

	}catch(PDOException $e){
		 echo "Error!: " . $e->getMessage() . "<br/>";
	}
?>