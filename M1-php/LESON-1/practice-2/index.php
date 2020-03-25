<!DOCTYPE html>
<html>
<head>
	<title>Practice</title>
</head>
<body>
	<?php
	for($i=0;$i<5;$i++){
	?>
	<div style="display: flex; flex-direction:column;">
		<div style="background-color:black;width:10px;height:10px;"> 
		<?php
		for($i=0;$i<5;$i++){
		?>
		<div style="background-color:black;width:10px;height:10px;"> </div>
		<?php
		}
		?>
		 </div>
	</div>
	<?php
	}
	?>

</body>
</html>