<!DOCTYPE html>
<html>
<head>
	<title>PRACTICE-3</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
	require_once 'php/LOGO.php';
?>
<?php
	require_once 'php/MENU.php';
?>
<div>
<?php
$mas=[
	['TITLE'=>'POST#1','CONTENT'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.-1','Author'=>'AUT-1','DATA'=>'10.01.2021'],
	['TITLE'=>'POST#2','CONTENT'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.-2','Author'=>'AUT-2','DATA'=>'20.02.2022'],
	['TITLE'=>'POST#3','CONTENT'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.-3','Author'=>'AUT-3','DATA'=>'30.03.2023']
	
];

for($i=0;$i<3;$i++){
?>
<div class="NEWS">
<h2 class="m-2"><?php  echo $mas[$i]['TITLE'] ?><span class="badge badge-secondary">News</span></h2>
<span class="m-2 NEWS_span"><i><?php echo $mas[$i]['CONTENT']?></i></span>
<div class="m-2 NEWS_div"><?php echo $mas[$i]['Author']?>  <?php echo $mas[$i]['DATA']?></div>
</div>
<?php
}
?>
</div>
<?php
	require_once 'php/FOOTER.php';
?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>