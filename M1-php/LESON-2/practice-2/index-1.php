<!DOCTYPE html>
<html>
<head>
	<title>PRACTICE-2</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body >
	<?php
	require_once('php/INFO.php');
	?>
	<?php
	require_once('php/NEWS.php');
	?>
<?php
	require_once('DB.php');
?>
<?php
	for($i=0;$i<count($MAS);$i++) {
		if($MAS[$i]["CATEGORIA"]=="Cultura"){
?>
<div class="card w-50 m-3">
  <div class="card-header">
   <?php echo $MAS[$i]['TITLE']?>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p><?php echo $MAS[$i]['CONTENT']?></p>
      <footer class="blockquote-footer"><?php echo $MAS[$i]['AUTHOR']?> <br><cite title="Source Title"><?php echo $MAS[$i]['CATEGORIA']?></cite></footer>
    </blockquote>
  </div>
</div>
<?php
}
}
?>
<?php
	require_once('php/FOOTER.php');
?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>