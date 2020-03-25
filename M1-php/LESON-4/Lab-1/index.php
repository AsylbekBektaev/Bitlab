<?php 
require_once('subjects.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>
	<div>
		<form action="itog.php" method="post">
			<label>ID Студента:</label>
			<input type="text" name="idstudent"><br>
			<label>Выбрать Предмет:</label>
			<select name="subject">
				<?php 
					for ($i=0;$i<count($subjects);$i++) { 
					?>?>
				<option value="<?php echo $subjects[$i]['name subject']?>"><?php echo $subjects[$i]['name subject']?></option>
				<?php
				}
				?>
			</select><br>
			<label>Баллы за предмет</label>
			<input type="text" name="ball"><br>
			<button>CLICK</button>
		</form>
	</div>
</body>
</html>