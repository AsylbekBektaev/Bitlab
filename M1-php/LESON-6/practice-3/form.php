<?php
	require_once('users.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
			<form class="w-50 mt-5 m-5" action="RRR.php" method="post"> 
  <div class="d-flex">
    <label class="w-25 mr-2 mt-2" >Login :</label>
    <input type="text" class="form-control mt-1"  name="login">
  </div>

  <div class="d-flex">
    <label class="w-25 mr-2 mt-2" >Password :</label>
    <input type="password" class="form-control mt-1" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	</div>
</body>
</html>