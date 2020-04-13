<?php
if(isset($_GET['id']) && ! empty($_GET['id']) && isset($_GET['name']) && ! empty($_GET['name']) && isset($_GET['country']) && !empty($_GET['country']) && isset($_GET['city']) && !empty($_GET['city']) && isset($_GET['surname']) && !empty($_GET['surname']) && isset($_GET['pol']) && !empty($_GET['pol'])){
    try {
        $conn = new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');

        $sql = "UPDATE `user_data` SET name=:name , surname=:surname ,gender=:pol ,country=:country ,city=:city WHERE user_data.id = :id";

        $query = $conn->prepare($sql);
        $query->execute([
            'id'=>$_GET['id'],
            'name'=>$_GET['name'],
            'surname'=>$_GET['surname'],
            'gender'=>$_GET['pol'],
            'country'=>$_GET['country'],
            'city'=>$_GET['city']]);
 
// id,name,surname,pol,country,city,
        // header('Location:profiluser.php');
    }catch(PDOException $e){
        echo "Error!: " . $e->getMessage() . "<br/>";
    }
}else{
	header('Location:updateuser.php');
}
?>