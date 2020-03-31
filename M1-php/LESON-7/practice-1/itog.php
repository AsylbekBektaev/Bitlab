<?php 
	require_once('COUNT.php');
	require_once('city.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>ITOG</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Team name</th>
      <th scope="col">Team country</th>
      <th scope="col">Team city</th>
    </tr>
  </thead>
  	<?php  
  	try{
	$conn = new PDO('mysql:host=localhost;dbname=bitlab','root','');
	 $sql = "SELECT '#',Team name,Team country,Team city FROM footbal";
      $VVV=$conn->query($sql);
		foreach($VVV as $user){
?>
 	<tr>
      <th scope="row"><?php  $user['#'];?></th>
      <td><?php echo $user['Team name'];?></td>
      <td><?php echo $user['Team country'];?></td>
      <td><?php echo $user['Team city'];?></td>
    </tr>
<?php
      }
	}catch(PDOException $e){
	echo $e->getMessage().'<br>';
   	}
  	?>
  </tbody>
</table>
</div>
</body>
</html>