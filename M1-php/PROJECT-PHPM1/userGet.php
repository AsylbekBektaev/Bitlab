<?php
	session_start();
if(isset($_POST['login']) && ! empty($_POST['login']) && isset($_POST['password']) && ! empty($_POST['password']) ){
	try{
	$conn=new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');
	$sql="SELECT * FROM `tusers`";
	$query = $conn->prepare($sql);
    $query->execute();
    $result = $query->fetchall();
    $bool=true;
    foreach ($result as  $user) {
    	if($_POST['login']==$user[1] && 
    		$_POST['password']==$user[2]){
    		$bool=false;
      $_SESSION['id']=$user['id'];
      $_SESSION['login']=$_POST['login'];
      $_SESSION['password']=$_POST['password'];
    		header('Location:profiluser.php');
       	}
    }
   
    if($bool==true){
       		header('Location:form.php');
       	}

  	}catch(PDOException $e){
	 echo "Error!: " . $e->getMessage() . "<br/>";
	}

}else{
	 header('Location:form.php');
}

?>