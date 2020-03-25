<!DOCTYPE html>
<html>
<head>
	<title>KKK</title>
</head>
<body>
	<?php
require_once'db.php';
$pol=$_GET['pol'];
$p=true;
$rr=0;
if(isset($pol)){
	for($i=0;$i<count($questions);$i++){
	if(	$pol[$i]['otvet']==$questions[$i]['answer']){
		$p=false;
		$rr++;
}
}
if($rr<5 || $rr>5 && $rr<8){
			echo "You failed";
		}else if($rr==8 || $rr>8 && $rr<11){
			echo "Perfect";
		}else if($rr==11){
			echo "Good";
		}
echo "<br><label>Количество правильных ответов:".$rr."</label><br>";
if($p==true){
echo "LOUSER";
}

}
?>
</body>
</html>
























