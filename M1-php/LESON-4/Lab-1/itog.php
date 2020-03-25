<?php 
	require_once('students.php');
	require_once('subjects.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>itog</title>
</head>
<body>
	<!-- idstudent -->
	<!-- subject -->
	<!-- ball -->
	<?php
		if(isset($_POST['idstudent']) && isset($_POST['subject']) && isset($_POST['ball'])){
			for ($i=0;$i<count($students);$i++){
				if($_POST['idstudent']==$students[$i]['id student']){ 
				?>
				<div>
					<label><?php echo "Ваше Имя:   ".$students[$i]['name student']?></label><br>
					<label><?php echo "Ваша Фамилия:   ".$students[$i]['surname student']?></label><br>
					<label><?php echo "Ваша Группа:   ".$students[$i]['Group']?></label>
				</div><br>
				<?php
			}
			}
			for ($i=0;$i<count($subjects);$i++) { 
			if($_POST['subject']==$subjects[$i]['name subject']){
				?>
				
				<div>
					<label><?php echo "ID Предмета:   ".$subjects[$i]['id subject']?></label><br>
					<label><?php echo "Название Предмета:   ".$subjects[$i]['name subject']?></label><br>
					<label><?php echo "Кредит предмета:   ".$subjects[$i]['credit']?></label><br>
					<label><?php echo "Сумма кредита:   ".$subjects[$i]['summa']?></label><br>
				</div><br>

				<?php
			}
			}
					if($_POST['ball']>=90){

						   echo "Your mark is A";

						}else if($_POST['ball']>=70){

						   echo "Your mark is B";  

						}else if($_POST['ball']>=60){

						   echo "Your mark is C";  

						}else if($_POST['ball']>=50){

						   echo "Your mark is D";

						}else if($_POST['ball']<50){
							for ($i=0;$i<count($subjects);$i++) { 
								if($_POST['ball']<50 && $_POST['subject']==$subjects[$i]['name subject']){
									?>
										<div>
											<br><label><?php echo "Your mark is F<br>СУММА ДОЛГА: ".$subjects[$i]['summa']*$subjects[$i]['credit']?></label><br>
										</div>
									<?php
								}
							}

						}
		}
	?>
</body>
</html>