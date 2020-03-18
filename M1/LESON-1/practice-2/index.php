<!DOCTYPE html>
<html>
<head>
	<title>Practice</title>
</head>
<body>
			<div style="display:flex;flex-direction: column-reverse;">
				<?php
					for($i=0;$i<10;$i++){
				?>
			<div style="column-height:flex; ">
				<?php
					for($i=0;$i<15;$i++){
				?>
				<div style="width:10px; height:10px; background-color:yellow;"></div><div style="width:10px; height:10px; background-color:black;"></div>
				<div style="width:10px; height:10px; background-color:yellow;"></div><div style="width:10px; height:10px; background-color:black;"></div>
				
				<?php
					}
				?>
				</div>
				
			  	<?php
			  }
			  	?>
			  </div>
			
			
			
				<div style="display:flex;">
				<?php
					for($i=0;$i<15;$i++){
				?>
				<div style="width:10px; height:10px; background-color:black;"></div><div style="width:10px; height:10px; background-color:yellow;"></div>
				<div style="width:10px; height:10px; background-color:black;"></div><div style="width:10px; height:10px; background-color:yellow;"></div>

				<?php
					}
				?>
			  	</div>
			
			
			

</body>
</html>