<?php
	function GGG($a,$b,$g){
		for($i=0;$i<$a;$i++){
?>
	<div class="row">
		<?php
		for($j=0;$j<$b;$j++){
			if(($i+$j) %2 !=0){
		?>
		<span class="badge" style="background-color:<?php echo $g?>;"> </span>
		<?php
		}else{
			?>
		<span class="badge" style="background-color:black;"> </span>
		<?php
		}
		}
		?>
	</div>
<?php
}
}
?>