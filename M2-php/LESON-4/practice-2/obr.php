<?php
require_once('db.php');
// log pas1 pas2 name
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		try{

			if( isset($_POST['log']) && !empty($_POST['log']) && isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['pas1']) && !empty($_POST['pas1']) && isset($_POST['pas2']) && !empty($_POST['pas2'])){


				$nnn=true;
  				$loggo=funlog();
 				foreach ($loggo as  $value) {
 					if($_POST['log'] === $value['login']){
 						$nnn=false;
 						echo "<div  class='w-100 mb-3 mt-3  alert alert-danger' role='alert'>Ваш Email есть в базе!</div>";
 						$login="";
 					}
 				}
  				if($nnn===true){
  					$login=$_POST['log'];
  				}


  				// проверка пароля
				if($_POST['pas1'] != $_POST['pas2']){
					echo "<div  class='w-100 mb-3 mt-3  alert alert-danger' role='alert'>Пароли не совпадают!</div>";
					$password="";
					
				}else{
					$password=$_POST['pas1'];
				}
				

				// проверка имени
				if(isset($_POST['name']) && !empty($_POST['name'])){
					$name=$_POST['name'];
				}

			// заполнение
				if(empty($login)){
					$login="";
				}else{
					if(isset($login) && !empty($login) && isset($name) && !empty($name) && isset($password) && !empty($password) ){
						Reg($login,$password,$name);
						echo "<div  class='w-100 mb-3 mt-3  alert alert-danger' role='alert'>Вы Зарегрестрировались!</div>";
					}
				}

			}else{
				echo "<div  class='w-100 mb-3 mt-3  alert alert-danger' role='alert'>НЕ ВСЕ ПОЛЯ ЗАПОЛНЕНЫ!</div>";
			}
	}catch(PDOException $e){
		 echo "Error!: " . $e->getMessage() . "<br/>";
	}
	}else{
		header('form.php');
	}
?>