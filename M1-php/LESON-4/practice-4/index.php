<?php 
	require_once('city.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>ooo</title>
</head>
<body>
	<form action="res.php" method="post">
		<label>NAME:</label>
		<input type="text" ><br>
		<label>Surname:</label>
		<input type="text" ><br>
		<label>Age:</label>
		<select  name="age">
			<?php 
			for($i=1;$i<100;$i++){?>
				<option value="<?php echo $i?>"><?php echo $i?></option>
				<?php
				}
				?>
		</select><br>
		<label>City:</label>
		<select  name="city">
			<?php 
				for($i=0;$i<count($city);$i++){
			?>
			<option value="<?php echo $city[$i]?>"><?php echo $city[$i]?></option>
			<?php
			}
			?>
		</select><br>
		<button>CLICK</button>
	</form>
</body>
</html>