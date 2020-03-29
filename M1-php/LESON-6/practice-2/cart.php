<?php 
	session_start();
	require_once 'db.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	<br><br><br>

	<div class="container">

			<?php

				foreach($_SESSION['cart'] as $productId => $quantity) {

			 ?>


			<div class="row">
				<span><?php echo $products[$productId]['name'];?></span> - 
				<b><?php echo $quantity; ?></b>
			</div>

			<?php } ?>

			<br>
		<div class="row">
			<button class="btn btn-success">Purchase</button>
		</div>

	</div>

</body>
</html>