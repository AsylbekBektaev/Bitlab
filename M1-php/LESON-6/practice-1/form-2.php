<?php 
session_start();
require_once('city.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>form-2</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
		<div class="container">
			<form class="w-50 mt-5 ml-5"  action="ser-2.php" method="post">
						  	<div class="d-flex">
					  		<label class="w-50" for="exampleInputPassword1">City:</label>
					  		<select name="city" class="form-control w-50 m-1">
					  			<?php
					  			for($i=0;$i<count($CC);$i++){
					  			?>
					  			<option value="<?php echo $CC[$i];?>"><?php echo $CC[$i];?></option>
					  		<?php }?>
					  		</select>
					  	</div>
					

					  <div class="d-flex">
					    <label class="w-50" >Adress:</label>
					    <input name="Adress" type="text" class="form-control w-50 m-1" placeholder="Adress">
					    
					  </div>
					  <div class="d-flex">
					    <label class="w-50" for="exampleInputPassword1">Phone:</label>
					    <input name="Phone" type="text" class="form-control w-50 m-1" placeholder="Phone">
					  </div>

				
					  <button type="submit" class="btn btn-success">NEXT</button>
				</form>
		</div>

</body>
</html>