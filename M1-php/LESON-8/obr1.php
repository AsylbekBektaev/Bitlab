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
	<title>OBR1</title>
</head>
<body>
	<h5>Team name:</h5>
	<label><?php echo $result['Team name'];?></label>
	<h5>Team country:</h5>
	<label><?php echo $result['Team country'];?></label>
	<h5>Team city:</h5>
	<label><?php echo $result['Team city'];?></label>
  <br><br>
   <a href="update.php?id=<?php echo $result['#'];?>">UPDATE</a><br>
   <a href="del.php?id=<?php echo $result['#'];?>">DELETE</a>
</body>
</html>