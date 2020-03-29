<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>form-1</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
		<div class="container">
			<form class="w-50 mt-5 ml-5" action="ser-1.php" method="post">
					  <div class="d-flex">
					    <label class="w-50" >Name:</label>
					    <input name="name" type="text" class="form-control w-50 m-1" placeholder="NAME">
					    
					  </div>
					  <div class="d-flex">
					    <label class="w-50" >Surname:</label>
					    <input name="surname" type="text" class="form-control w-50 m-1" placeholder="Surname">
					  </div>

					  	<div class="d-flex">
					  		<label class="w-50" >Age:</label>
					  		<select name="age" class="form-control w-50 m-1">
					  			<?php
					  			for($i=1;$i<=100;$i++){
					  			?>
					  			<option value="<?php echo $i;?>"><?php echo $i;?></option>
					  		<?php }?>
					  		</select>
					  	</div>
					  <button type="submit" class="btn btn-success">NEXT</button>
				</form>
		</div>

</body>
</html>