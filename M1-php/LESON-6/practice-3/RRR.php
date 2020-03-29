<?php
require_once('users.php');
session_start();
$tt=false;
	if(isset($_POST['login'])  &&  isset($_POST['password'])){
		for($i=0;$i<count($users);$i++){
		if($_POST['login']===$users[$i]["LOGIN"]  &&  $_POST['password']===$users[$i]["PASSWORD"]){
			$tt=true;
		
			$_SESSION['Login']=$_POST['login'];
			$_SESSION['Password']=$_POST['password'];
			header('Location:LOGO.php');
		}
	}
	if($tt===false){
		header('Location:form.php');
	}
	}else{
		header('Location:form.php');
	}
?>