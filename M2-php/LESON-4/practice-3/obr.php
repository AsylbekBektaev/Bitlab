<?php
require_once('db.php');
// <div  class='w-100 mb-3 mt-3  alert alert-danger' role='alert'>НЕ ЗАПОЛНЕНЫ ВСЕ ПОЛЯ!</div>

	if ($_SERVER['REQUEST_METHOD']=='POST'){

		if(isset($_POST['log']) && !empty($_POST['log']) && isset($_POST['pas']) && !empty($_POST['pas'])){
			$bul=true;
			$users=funlog();
			foreach ($users as  $value) {
				if($_POST['log'] == $value['login'] && $_POST['pas'] == $value['password']){
					$bul=false;
					echo"<div  class='w-100 mb-3 mt-3  alert alert-danger' role='alert'>ВЫ ПРОХОДИТЕ ДАЛЬШЕ Логин и Пароль правильный!</div>";
				}
			}
			if($bul===true){
				echo"<div  class='w-100 mb-3 mt-3  alert alert-danger' role='alert'>Ваш Логин или Пароль Неправильный</div>";
			}
			





		}else{
			echo "<div  class='w-100 mb-3 mt-3  alert alert-danger' role='alert'>НЕ ЗАПОЛНЕНЫ ВСЕ ПОЛЯ!</div>";
		}
	}else{
		header('form.php');
	}
?>