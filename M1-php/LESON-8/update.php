<?php

	  try {
        $conn = new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');

        $sql = "SELECT `#`,`Team name`, `Team country`, `Team city` FROM `footbal` WHERE `#`=:id;";

        $query = $conn->prepare($sql);
        $query->execute(['id'=>$_GET['id']]);
        $result = $query->fetch();
        }catch(PDOException $e) {
   echo "Error!: " . $e->getMessage() . "<br/>";
  }
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATE</title>
</head>
<body>
	<form action="up.php" method="get">
		<h6>TEAM NAME:</h6>
		<input type="hidden" name="id" value="<?php echo $result['#'];?>">
		<input type="text" name="name" value="<?php echo $result['Team name'];?>"><br>
		<h6>TEAM COUNTRY:</h6>
		<input type="text" name="country" value="<?php echo $result['Team country'];?>"><br>
		<h6>TEAM CITY:</h6>
		<input type="text" name="city" value="<?php echo $result['Team city'];?>"><br><br>
		<button>UPDATE</button>
	</form>
</body>
</html>