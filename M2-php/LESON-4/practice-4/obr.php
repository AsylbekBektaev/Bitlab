<?php 
require_once('db.php');
	if ($_SERVER['REQUEST_METHOD']=='GET') {

		$mas=getBlog();
		echo json_encode($mas);
		 
	}else{
		echo "NO SERVER GET";
	}
?>