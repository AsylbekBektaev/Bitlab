<!DOCTYPE html>
<html>
<head>
	<title>Practice</title>
</head>
<body>
			<div style="display: flex;">
							<?php
					for($i=0;$i<6;$i++){
				?>
				<div style="display:flex;flex-direction:column;">
				<?php
					for($i=0;$i<3;$i++){
				?>
				<div style="width:10px; height:10px; background-color:yellow;"></div><div style="width:10px; height:10px; background-color:black;"></div>
				<?php
					}
				?>
			</div>
				<div style="display:flex;flex-direction:column;">
					<?php
					for($i=0;$i<3;$i++){
				?>
				<div style="width:10px; height:10px; background-color:black;"></div><div style="width:10px; height:10px; background-color:yellow;"></div>

				<?php
					}
				?>
			</div>
			<?php
			}
				?>
			</div>
			 
			  	
			  
			
			
			
				
			
			

</body>
</html>