<?php

if(isset($_POST['st'])){
	setcookie("Cookie",$_POST['st'], time() + 60);
	header('Location:index.php');
}

?>