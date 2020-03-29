<?php require_once 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<br><br><br>

	<div class="container">

		<a href="cart.php">Cart</a>

		<?php foreach($products as $id => $product) { ?>

		<div class="row">	
			<div class="card">
			  <div class="card-body">
			    <h5 class="card-title"><?php echo $product['name']; ?></h5>
			    <p class="card-text"><?php echo $product['price']; ?></p>

				<form action="index_post.php" method="post">
					<input type="hidden" name="id"
					 value="<?php echo $id; ?>">
				    <button class="btn btn-info">Add to cart</button>
				</form>
			  </div>
			</div>
		</div>

		<?php } ?>
	</div>

</body>
</html>