<?php 
require_once('db.php');
if ($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['zag']) && !empty($_POST['zag']) && isset($_POST['con']) && !empty($_POST['con'])){
		$zag=$_POST['zag'];
		$con=$_POST['con'];
		inserBlog($zag,$con);
		}else{
		echo "<div  class='w-100 mb-3 mt-3  alert alert-danger' role='alert'>НЕ ЗАПОЛНЕНЫ ВСЕ ПОЛЯ!</div>";
		}
}else{
	echo "NO SERVER POST";
}
?>