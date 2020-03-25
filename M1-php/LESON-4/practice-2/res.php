<?php
// "login"=>"log1", "Password"=>"password1"
require_once'db.php';
$o=true;
if(isset($_POST['loginnn']) && isset($_POST['passworddd'])){
	for($i=0;$i<count($mas);$i++){
	if($_POST['loginnn'] == $mas[$i]['login'] && $_POST['passworddd']== $mas[$i]['PasswordP']){
		$o=false;
		 header("Location:ITOG.php");
		}
		
	}
	if($o==true){
header("Location:index-4.php");	
		
}

	}


?>