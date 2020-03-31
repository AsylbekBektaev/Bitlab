<?php 
	require_once('COUNT.php');
	require_once('city.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<form class="w-50 mt-5 m-5" action="obr.php" method="post"> 
  <div class="d-flex">
    <label class="w-25 mr-2 mt-2" >Team name :</label>
    <input type="text" class="form-control mt-1"  name="name">
  </div>

  <div class="d-flex">
    <label class="w-25 mr-2 mt-2" >Team country :</label>
    <select class="form-control mt-1" name="country">
    	<?php 
    	foreach ($countrys as $val){
    	?>
    	<option><?php echo $val['Country'];?></option>
    	<?php
    	}
    	?>
    </select>
  </div>

  <div class="d-flex">
    <label class="w-25 mr-2 mt-2" >Team city :</label>
    <select class="form-control mt-1" name="city">
    	<?php 
    	foreach ($citys as $value){
    	?>
    	<option><?php echo $value['City'];?></option>
    	<?php
    	}
    	?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary mt-3">ADD TEAM</button>
</form>
	</div>
</body>
</html>