<?php require_once('users.php');
session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGO</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
<!-- логин, пароль, полное имя, возраст -->
<?php
	if(isset($_SESSION['Login']) && isset($_SESSION['Password'])){
		for($i=0;$i<count($users);$i++){
			if($_SESSION['Login']===$users[$i]["LOGIN"]   && $_SESSION['Password']===$users[$i]["PASSWORD"]){
			?>
			<div class="d-flex justify-content-center pt-5 mt-5">
				<div class="cols justify-content-center pt-5 mt-5">
				<h2><?php echo "Ваш ЛОГИН:  ".$users[$i]["LOGIN"];?></h2>
				<label><?php echo "Ваш ИМЯ:  ".$users[$i]["NAME"];?></label><br>
				<label><?php echo "Ваш ВОЗРАСТ:  ".$users[$i]["AGE"];?></label>
				</div>
			</div>
			<?php
		}
		}
	}else{
		header('Location:form.php');
	}
?>
</div>
</body>
</html>