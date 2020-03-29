<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>VVV</title>
</head>
<body>
	<?php
		if(isset($_SESSION["name"]) && isset($_SESSION["surname"]) && isset($_SESSION["age"]) && isset($_SESSION["city"]) && isset($_SESSION["Adress"]) && isset($_SESSION["Phone"]) && isset($_SESSION["Univer"]) && isset($_SESSION["Facult"]) && isset($_SESSION["Group"]) ){
			?>
			<div>
				<label><?php echo "Ваше Имя:".$_SESSION["name"];?></label><br>
				<label><?php echo "Ваша Фамилия:  ".$_SESSION["surname"];?></label><br>
				<label><?php echo "Ваш Возраст:  ".$_SESSION["age"];?></label><br>
				<label><?php echo "Ваш Город:  ".$_SESSION["city"];?></label><br>
				<label><?php echo "Ваш Адресс:  ".$_SESSION["Adress"];?></label><br>
				<label><?php echo "Ваши Контакты:  ".$_SESSION["Phone"];?></label><br>
				<label><?php echo "Ваше Оброзование:  ".$_SESSION["Univer"];?></label><br>
				<label><?php echo "Ваш Факультет:  ".$_SESSION["Facult"];?></label><br>
				<label><?php echo "Ваша Группа:  ".$_SESSION["Group"];?></label><br>
			</div>
	<?php

		}
	?>

</body>
</html>