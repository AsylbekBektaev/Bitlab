<?php
if(isset($_POST['id']) && ! empty($_POST['id']) && isset($_POST['name']) && ! empty($_POST['name']) && isset($_POST['country']) && !empty($_POST['country']) && isset($_POST['city']) && !empty($_POST['city']) && isset($_POST['surname']) && !empty($_POST['surname']) && isset($_POST['pol']) && !empty($_POST['pol'])){
    try {
        $conn = new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');

$sql = "UPDATE `user_data`as ud SET id=:id name=:name , surname=:surname , gender=:gender , country=:country , city=:city WHERE ud.id = :id";

        $query = $conn->prepare($sql);
        $query->execute([
            'id'=>$_POST['id'],
            'name'=>$_POST['name'],
            'surname'=>$_POST['surname'],
            'gender'=>$_POST['pol'],
            'country'=>$_POST['country'],
            'city'=>$_POST['city']
        ]);
 
// id,name,surname,pol,country,city,
        header('Location:profiluser.php');
    }catch(PDOException $e){
        echo "Error!: " . $e->getMessage() . "<br/>";
    }
}else{
	header('Location:updateuser.php');
}
?>