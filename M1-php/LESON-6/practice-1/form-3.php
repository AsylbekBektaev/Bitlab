<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>form-2</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
		<div class="container">
			<form class="w-50 mt-5 ml-5" action=ser-3.php method="post">
						  
					  <div class="d-flex">
					    <label class="w-50" >University:</label>
					    <input name="Univer" type="text" class="form-control w-50 m-1" placeholder="University">
					    
					  </div>
					

					  <div class="d-flex">
					    <label class="w-50" >Faculty:</label>
					    <input name="Facult" type="text" class="form-control w-50 m-1" placeholder="Faculty">
					    
					  </div>
					  <div class="d-flex">
					    <label class="w-50" for="exampleInputPassword1">Group:</label>
					    <input name="Group" type="text" class="form-control w-50 m-1" placeholder="Group">
					  </div>

				
					  <button type="submit" class="btn btn-success">FINISH</button>
				</form>
		</div>

</body>
</html>