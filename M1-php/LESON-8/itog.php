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

<div class="container pt-3">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Team name</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>
      <?php
    try {
          $conn = new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');

        $sql = "SELECT `#`,`Team name`, `Team country`, `Team city` FROM `footbal`";

        $query = $conn->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();

        foreach($result as $user){
          ?>
<tr>
      <td>
    <?php echo $user['#'];?>
      </td>
      <td>
        <?php echo $user['Team name'];?>
      </td>
       <td>
          <a href="obr1.php?id=<?php echo $user['#'];?>">DETAILS</a>
        </td>
</tr> 
<?php      
 }
 }catch (PDOException $e) {
   echo "Error!: " . $e->getMessage() . "<br/>";
  }
?>
</tbody>
</table>
</div>
</body>
</html>