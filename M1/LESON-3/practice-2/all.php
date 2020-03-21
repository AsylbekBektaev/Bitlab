<?php
$MAS=[
	["TITLE"=>"Lorem-CULTURA-1","CONTENT"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, temporibus.","AUTHOR"=>"CULTURA-1","CATEGORIA"=>"Cultura"],
	["TITLE"=>"Lorem-CULTURA-2","CONTENT"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, temporibus.","AUTHOR"=>"CULTURA-2","CATEGORIA"=>"Cultura"],
	["TITLE"=>"Lorem-CULTURA-3","CONTENT"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, temporibus.","AUTHOR"=>"CULTURA-3","CATEGORIA"=>"Cultura"],
	["TITLE"=>"Lorem-SPORT-1","CONTENT"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, temporibus.","AUTHOR"=>"SPORT-1","CATEGORIA"=>"SPORT"],
	["TITLE"=>"Lorem-SPORT-2","CONTENT"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, temporibus.","AUTHOR"=>"SPORT-2","CATEGORIA"=>"SPORT"],
	["TITLE"=>"Lorem-SPORT-3","CONTENT"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, temporibus.","AUTHOR"=>"SPORT-3","CATEGORIA"=>"SPORT"],
	["TITLE"=>"Lorem-CINEMA-1","CONTENT"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, temporibus.","AUTHOR"=>"CINEMA-1","CATEGORIA"=>"CINEMA"],
	["TITLE"=>"Lorem-CINEMA-2","CONTENT"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, temporibus.","AUTHOR"=>"CINEMA-2","CATEGORIA"=>"CINEMA"],
	["TITLE"=>"Lorem-CINEMA-3","CONTENT"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, temporibus.","AUTHOR"=>"CINEMA-3","CATEGORIA"=>"CINEMA"]
];


function getNEWS(){
	global $MAS;
	for($i=0;$i<count($MAS);$i++){
?>
	<div >
		<h2><?php echo $MAS[$i]['TITLE']?></h2>
		<div class="text-primary"><?php echo $MAS[$i]['CONTENT']?></div>
		<div class="text-danger"><?php echo $MAS[$i]['AUTHOR']?></div>
	</div>

<?php
	
	}
	}
?>

