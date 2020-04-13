<?php
	session_start();
	session_destroy($_SESSION['login'] && $_SESSION['password']);
	header("Location:form.php");
?>