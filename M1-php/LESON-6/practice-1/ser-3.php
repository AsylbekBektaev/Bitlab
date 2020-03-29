<?php
session_start();
if(isset($_POST['Univer'])  &&  isset($_POST['Facult']) && isset($_POST['Group'])){

	 $_SESSION["Univer"] = $_POST['Univer'];
	 $_SESSION["Facult"]= $_POST['Facult'];
	 $_SESSION["Group"]= $_POST['Group'];

	 header('Location:VVV.php');
}else{
	header('Location:form-3.php');
}


?>