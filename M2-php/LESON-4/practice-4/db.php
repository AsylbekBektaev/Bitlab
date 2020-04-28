<?php

	
		 function getBlog(){
		 	try{
		$conn = new PDO('mysql:host=localhost;dbname=bitlab','root','');
		$sql="SELECT * FROM `blog`";
        $query = $conn->prepare($sql);
        $query->execute();
        $blog=$query->fetchall();
        return $blog;
        
       
        }catch(PDOException $e){
		 echo "Error!: " . $e->getMessage() . "<br/>";
		}
    	}


    	function inserBlog($z,$c){
    		try{
    	$conn = new PDO('mysql:host=localhost;dbname=bitlab','root','');
		$sql="INSERT INTO `blog`(Zag,Content) VALUES (:z,:c);";
        $query = $conn->prepare($sql);
        $query->execute([
        	'z'=>$z,
        	'c'=>$c
    	]);
    	}catch(PDOException $e){
		 echo "Error!: " . $e->getMessage() . "<br/>";
		}
    	}
	
?>