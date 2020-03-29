<?php
	if(isset($_POST['langu'])){
		setcookie('YAZ',$_POST['langu']);
		header('Location:form.php');
	}

?>