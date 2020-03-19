<!DOCTYPE html>
<html>
<head>
	<title>PRACTICE-1</title>
</head>
<body>
	<?php
	 $news = [];
	$news[0]['title'] = "Cristiano Ronaldo won the Champions League again";
	$news[0]['content'] = "Cristiano Ronaldo scored 3 goals in final";
	$news[0]['author'] = "John Smith";
	$news[1]['title'] = "Leo Messi won the La Liga";
	$news[1]['content'] = "Leo Messi scored maximum goal in La Liga";
	$news[1]['author'] = "Javier Correa";
	$news[2]['title'] = "Real Madrid won European Super Cup";
	$news[2]['content'] = "Real Madrid won Atletico in Super Cup final";
	$news[2]['author'] = "Alfredo Relano";
	$news[3]['title'] = "Portugal won The World Cup 2018";
	$news[3]['content'] = "Cristiano Ronaldo won The World Cup 2018";
	$news[3]['author'] = "Michele Henry";

	for($i=0;$i<count($news);$i++){

?>


<div>
	BLOK-0
	<h1><?php echo $news[$i][0]['title']?></h1>
	<span><?php echo $news[$i][0]['content']?></span>
	<span><?php echo $news[$i][0]['author']?></span>
</div>
<div>
	BLOK-1
	<h1><?php echo $news[$i][1]['title']?></h1>
	<span><?php echo $news[$i][1]['content']?></span>
	<span><?php echo $news[$i][1]['author']?></span>
</div>
<div>
	BLOK-2
	<h1><?php echo $news[$i][2]['title']?></h1>
	<span><?php echo $news[$i][2]['content']?></span>
	<span><?php echo $news[$i][2]['author']?></span>
</div>
<div>
	BLOK-3
	<h1><?php echo $news[$i][3]['title']?></h1>
	<span><?php echo $news[$i][3]['content']?></span>
	<span><?php echo $news[$i][3]['author']?></span>
</div>
	
	
<?php
	}
?>


</body>
</html>