<?php

// name
// surname
// age
// country
// gender
// card
	if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['age']) && isset($_POST['country']) && isset($_POST['gender']) && isset($_POST['card'])){
		setcookie("kuk-name",$_POST['name'],time() + (86400*31));
		setcookie("kuk-sur",$_POST['surname'],time() + (86400*31));
		setcookie("kuk-age",$_POST['age'],time() + (86400*31));
		setcookie("kuk-coun",$_POST['country'],time() + (86400*31));
		setcookie("kuk-gen",$_POST['gender'],time() + (86400*31));
		setcookie("kuk-ca",$_POST['card'],time() + (86400*31));
		header('Location:index.php');
	}else{
		header('Location:index.php');
	}

?>


