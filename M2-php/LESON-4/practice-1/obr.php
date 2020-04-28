<?php 

     if($_SERVER['REQUEST_METHOD']=='GET'){
            try{
        
    $conn = new PDO('mysql:host=localhost;dbname=bitlab','root','');
//
        $sql="SELECT * FROM `city` WHERE city.cou_id=:id ";
        $query = $conn->prepare($sql);
        $query->execute(['id'=>$_GET['cou']]);
        $city=$query->fetchall();
        
        echo json_encode($city);
     
       

    }catch(PDOException $e){
         echo "Error!: " . $e->getMessage() . "<br/>";
    }
     }else{
      header('Location:form.php');
     }
?>