<!DOCTYPE html>
<html>
<head>
	<title>lll</title>
</head>
<body>
<?php
	require_once('db.php');
	require_once('city.php');
	if(isset($_POST['age']) && isset($_POST['city'])){
		for($i=0;$i<count($restor);$i++){
			if($_POST['age'] >= $restor[$i]['age_limit'] && $_POST['city']==$restor[$i]['city']){
				?>
				<h1><?php echo $restor[$i]['name']?></h1>
				<label><?php echo $restor[$i]['age_limit']?></label>
				<label><?php echo $restor[$i]['city']?></label>
					<?php
			}
		}
	}
?>
</body>
</html>







































