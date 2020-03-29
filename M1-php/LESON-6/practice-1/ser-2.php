<?php
session_start();
if(isset($_POST['city'])  &&  isset($_POST['Adress']) && isset($_POST['Phone'])){
	setcookie(session_name(),session_id());
	 $_SESSION["city"] = $_POST['city'];
	 $_SESSION["Adress"]= $_POST['Adress'];
	 $_SESSION["Phone"]= $_POST['Phone'];
	 header('Location:form-3.php');
}else{
	header('Location:form-2.php');
}

?>