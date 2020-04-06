<!DOCTYPE html>
<html>
<head>
	<title>PLUS</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php
try{
	$conn=new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');

$sql="SELECT matches.id,home_team.name as home_team,away_team.name as away_team,matches.home_team_goals,matches.away_team_goals FROM matches  
	LEFT OUTER JOIN teams as home_team ON matches.home_team_id=home_team.id
	 LEFT OUTER JOIN teams as away_team ON matches.away_team_id=away_team.id";

	$query = $conn->prepare($sql);
    $query->execute();
    $result = $query->fetchall();
    // print_r($result);
      $Che="Chelsea";
      $playChelsea=0;
      $wonChelsea=0;
      $drawChelsea=0;
      $lostChelsea=0;
      $scoredChelsea=0;
      $missedChelsea=0;
      $pointsChelsea=0;
    // Sporting
    $Spo="Sporting";
     $playSporting=0;
    $wonSporting=0;
    $drawSporting=0;
    $lostSporting=0;
    $scoredSporting=0;
    $missedSporting=0;
    $pointsSporting=0;
    // Real Madrid
    $Rea="Real Madrid";
     $playRealMadrid=0;
    $wonRealMadrid=0;
    $drawRealMadrid=0;
    $lostRealMadrid=0;
    $scoredRealMadrid=0;
    $missedRealMadrid=0;
    $pointsRealMadrid=0;
    // Juventus
    $Juv="Juventus";
     $playJuventus=0;
    $wonJuventus=0;
    $drawJuventus=0;
    $lostJuventus=0;
    $scoredJuventus=0;
    $missedJuventus=0;
    $pointsJuventus=0;
    // Liverpool
    $Liv="Liverpool";
    $playLiverpool=0;
    $wonLiverpool=0;
    $drawLiverpool=0;
    $lostLiverpool=0;
    $scoredLiverpool=0;
    $missedLiverpool=0;
    $pointsLiverpool=0;

    // POINTS
    $won=3;
    $draw=1;
    $lost=0;

for($i=0;$i<count($result);$i++){
  // Chelsea
  if($result[0][1]===$Che && $result[0][2]===$Spo && $result[0][3]>$result[0][4] &&
    $result[1][1]===$Spo && $result[1][2]===$Che && $result[1][3]==$result[1][4] &&
    $result[4][1]===$Che  && $result[4][2]===$Rea  && $result[4][3]>$result[4][4] &&
    $result[5][1]===$Che && $result[5][2]===$Juv && $result[5][3]==$result[5][4]  &&
    $result[6][1]===$Che && $result[6][2]===$Liv && $result[6][3]==$result[6][4]  &&
    $result[10][1]===$Rea && $result[10][2]===$Che && $result[10][3]==$result[10][4] &&
    $result[13][1]===$Juv && $result[13][2]===$Che && $result[13][3]>$result[13][4] &&
    $result[16][1]===$Liv && $result[16][2]===$Che && $result[16][3]<$result[16][4] &&
    $result[20][1]===$Spo && $result[20][2]===$Che && $result[20][3]==$result[20][4] &&
    $result[21][1]===$Rea && $result[21][2]===$Che && $result[21][3]==$result[21][4] &&
    $result[22][1]===$Juv && $result[22][2]===$Che && $result[22][3]==$result[22][4] &&
    $result[23][1]===$Liv && $result[23][2]===$Che && $result[23][3]==$result[23][4] &&
    $result[24][1]===$Che && $result[24][2]===$Spo && $result[24][3]<$result[24][4] &&
    $result[28][1]===$Che && $result[28][2]===$Rea && $result[28][3]==$result[28][4] &&
    $result[32][1]===$Che && $result[32][2]===$Juv && $result[32][3]==$result[32][4] &&
    $result[36][1]===$Che && $result[36][2]===$Liv && $result[36][3]==$result[36][4]){
    
     $playChelsea=+16;
      $wonChelsea=+3;
      $drawChelsea=+11;
      $lostChelsea=+2;

      $scoredChelsea=+$result[0][3]+$result[1][4]+$result[4][3]+
      $result[5][3]+$result[6][3]+$result[10][4]+$result[13][4]+
      $result[16][4]+$result[20][4]+$result[21][4]+$result[22][4]+
      $result[23][4]+$result[24][3]+$result[28][3]+$result[32][3]+
      $result[36][3];

      $missedChelsea=+$result[0][4]+$result[1][3]+$result[4][4]+
      $result[5][4]+$result[6][4]+$result[10][3]+$result[13][3]+
      $result[16][3]+$result[20][3]+$result[21][3]+$result[22][3]+
      $result[23][3]+$result[24][4]+$result[28][4]+$result[32][4]+
      $result[36][4];

      $pointsChelsea=+$won*$wonChelsea + $draw*$drawChelsea + $lost*$lostChelsea;

  }else{
    echo "EROR-Chelsea";
  }

  // SPORTING
  if($result[0][1]===$Che && $result[0][2]===$Spo && $result[0][3]>$result[0][4] &&
    $result[1][1]===$Spo && $result[1][2]===$Che && $result[1][3]==$result[1][4] &&
    $result[7][1]===$Spo && $result[7][2]===$Rea && $result[7][3]>$result[7][4]  &&
    $result[8][1]===$Spo && $result[8][2]===$Juv && $result[8][3]==$result[8][4] &&
    $result[9][1]===$Spo && $result[9][2]===$Liv && $result[9][3]==$result[9][4] &&
    $result[11][1]===$Rea && $result[11][2]===$Spo && $result[11][3]==$result[11][4] &&
    $result[14][1]===$Juv && $result[14][2]===$Spo && $result[14][3]<$result[14][4] &&
    $result[17][1]===$Liv && $result[17][2]===$Spo && $result[17][3]==$result[17][4] &&
    $result[20][1]===$Spo && $result[20][2]===$Che && $result[20][3]==$result[20][4] &&
    $result[24][1]===$Che && $result[24][2]===$Spo && $result[24][3]<$result[24][4] &&
    $result[25][1]===$Rea && $result[25][2]===$Spo && $result[25][3]==$result[25][4] &&
   $result[26][1]===$Juv && $result[26][2]===$Spo && $result[26][3]==$result[26][4] &&
   $result[27][1]===$Liv && $result[27][2]===$Spo && $result[27][3]==$result[27][4] &&
   $result[29][1]===$Spo && $result[29][2]===$Rea && $result[29][3]==$result[29][4] &&
   $result[33][1]===$Spo && $result[33][2]===$Juv && $result[33][3]==$result[33][4] &&
   $result[37][1]===$Spo && $result[37][2]===$Liv && $result[37][3]==$result[37][4]){

   $playSporting=+16;
    $wonSporting=+3;
    $drawSporting=+12;
    $lostSporting=+1;

    $scoredSporting=+$result[0][4]+$result[1][3]+$result[7][3]+
    $result[8][3]+$result[9][3]+$result[11][4]+$result[14][4]+
    $result[17][4]+$result[20][3]+$result[24][4]+$result[25][4]+
    $result[26][4]+$result[27][4]+$result[29][3]+$result[33][3]+
    $result[37][3];

    $missedSporting=+$result[0][3]+$result[1][4]+$result[7][4]+
    $result[8][4]+$result[9][4]+$result[11][3]+ $result[14][3]+
     $result[17][3]+$result[20][4]+$result[24][3]+ $result[25][3]+
     $result[26][3]+$result[27][3]+$result[29][4]+$result[33][4]+
     $result[37][4];

    $pointsSporting=+$won*$wonSporting + $draw*$drawSporting + $lost*$lostSporting;
}else{
 echo "EROR-Sporting";
}

// REAL MADRID
  if($result[2][1]===$Rea && $result[2][2]===$Juv && $result[2][3]>$result[2][4] &&
    $result[3][1]===$Juv && $result[3][2]===$Rea && $result[3][3]<$result[3][4] &&
    $result[4][1]===$Che && $result[4][2]===$Rea && $result[4][3]>$result[4][4]  &&
    $result[7][1]===$Spo && $result[7][2]===$Rea && $result[7][3]>$result[7][4]  &&
    $result[10][1]===$Rea && $result[10][2]===$Che && $result[10][3]==$result[10][4] &&
    $result[11][1]===$Rea && $result[11][2]===$Spo && $result[11][3]==$result[11][4] &&
    $result[12][1]===$Rea && $result[12][2]===$Liv && $result[12][3]==$result[12][4] &&
    $result[18][1]===$Liv && $result[18][2]===$Rea && $result[18][3]==$result[18][4] &&
    $result[21][1]===$Rea && $result[21][2]===$Che && $result[21][3]==$result[21][4] &&
    $result[25][1]===$Rea && $result[25][2]===$Spo && $result[25][3]==$result[25][4] &&
    $result[28][1]===$Che && $result[28][2]===$Rea && $result[28][3]==$result[28][4] &&
    $result[29][1]===$Spo && $result[29][2]===$Rea && $result[29][3]==$result[29][4] &&
    $result[30][1]===$Juv && $result[30][2]===$Rea && $result[30][3]==$result[30][4] &&
    $result[31][1]===$Liv && $result[31][2]===$Rea && $result[31][3]==$result[31][4] &&
    $result[34][1]===$Rea && $result[34][2]===$Juv && $result[34][3]==$result[34][4] &&
    $result[38][1]===$Rea && $result[38][2]===$Liv && $result[38][3]==$result[38][4]){

   
    $playRealMadrid=+16;
    $wonRealMadrid=2;
    $drawRealMadrid=12;
    $lostRealMadrid=2;

    $scoredRealMadrid=+$result[2][3]+$result[3][4]+$result[4][4]+$result[7][4]+
    $result[10][3]+$result[11][3]+$result[12][3]+$result[18][4]+ $result[21][3]+
    $result[25][3]+$result[28][4]+$result[29][4]+$result[30][4]+$result[31][4]+
    $result[34][3]+ $result[38][3];

    $missedRealMadrid=+$result[2][4]+$result[3][3]+ $result[4][3]+$result[7][3]+
    $result[10][4]+$result[11][4]+$result[12][4]+$result[18][3]+$result[21][4]+
    $result[25][4]+$result[28][3]+$result[29][3]+$result[30][3]+$result[31][3]+
    $result[34][4]+$result[38][4];

    $pointsRealMadrid=+$won*$wonRealMadrid+$draw*$drawRealMadrid+$lost*$lostRealMadrid;
  

  
}else{
 echo "EROR-RealMadrid";
}

// JUVENTUS
if($result[2][1]===$Rea && $result[2][2]===$Juv && $result[2][3]>$result[2][4] &&
    $result[3][1]===$Juv && $result[3][2]===$Rea && $result[3][3]<$result[3][4] &&
    $result[5][1]===$Che && $result[5][2]===$Juv && $result[5][3]==$result[5][4]  &&
    $result[8][1]===$Spo && $result[8][2]===$Juv && $result[8][3]==$result[8][4]  &&
    $result[13][1]===$Juv && $result[13][2]===$Che && $result[13][3]>$result[13][4] &&
    $result[14][1]===$Juv && $result[14][2]===$Spo && $result[14][3]<$result[14][4] &&
    $result[15][1]===$Juv && $result[15][2]===$Liv && $result[15][3]<$result[15][4] &&
    $result[19][1]===$Liv && $result[19][2]===$Juv && $result[19][3]==$result[19][4] &&
    $result[22][1]===$Juv && $result[22][2]===$Che && $result[22][3]==$result[22][4] &&
    $result[26][1]===$Juv && $result[26][2]===$Spo && $result[26][3]==$result[26][4] &&
    $result[30][1]===$Juv && $result[30][2]===$Rea && $result[30][3]==$result[30][4] &&
    $result[32][1]===$Che && $result[32][2]===$Juv && $result[32][3]==$result[32][4] &&
    $result[33][1]===$Spo && $result[33][2]===$Juv && $result[33][3]==$result[33][4] &&
    $result[34][1]===$Rea && $result[34][2]===$Juv && $result[34][3]==$result[34][4] &&
    $result[35][1]===$Liv && $result[35][2]===$Juv && $result[35][3]==$result[35][4] &&
    $result[39][1]===$Juv && $result[39][2]===$Liv && $result[39][3]==$result[39][4] ){

    $playJuventus=+16;
    $wonJuventus=+1;
    $drawJuventus=+11;
    $lostJuventus=+4;

    $scoredJuventus=+$result[2][4]+$result[3][3]+$result[5][4]+$result[8][4]+ $result[13][3]+
     $result[14][3]+$result[15][3]+$result[19][4]+$result[22][3]+$result[26][3]+$result[30][3]+
     $result[32][4]+$result[33][4]+$result[34][4]+$result[35][4]+$result[39][3];

    $missedJuventus=+$result[2][3]+$result[3][4]+$result[5][3]+$result[8][3]+$result[13][4]+
    $result[14][4]+$result[15][4]+$result[19][3]+$result[22][4]+$result[26][4]+$result[30][4]+
    $result[32][3]+$result[33][3]+$result[34][3]+$result[35][3]+$result[39][4];

    $pointsJuventus=+$won*$wonJuventus + $draw*$drawJuventus + $lost*$lostJuventus ;

}else{
  echo "EROR-JUVENTUS";
}

// LIVERPOOL
if(  $result[6][1]===$Che && $result[6][2]===$Liv && $result[6][3]==$result[6][4] &&
     $result[9][1]===$Spo && $result[9][2]===$Liv && $result[9][3]==$result[9][4] &&
    $result[12][1]===$Rea && $result[12][2]===$Liv && $result[12][3]==$result[12][4] &&
   $result[16][1]===$Liv && $result[16][2]===$Che && $result[16][3]<$result[16][4] && 
   $result[17][1]===$Liv && $result[17][2]===$Spo && $result[17][3]==$result[17][4] &&
    $result[18][1]===$Liv && $result[18][2]===$Rea && $result[18][3]==$result[18][4] &&
    $result[15][1]===$Juv && $result[15][2]===$Liv && $result[15][3]<$result[15][4] &&
    $result[19][1]===$Liv && $result[19][2]===$Juv && $result[19][3]==$result[19][4] &&
     $result[23][1]===$Liv && $result[23][2]===$Che && $result[23][3]==$result[23][4] &&
     $result[27][1]===$Liv && $result[27][2]===$Spo && $result[27][3]==$result[27][4] &&
    $result[31][1]===$Liv && $result[31][2]===$Rea && $result[31][3]==$result[31][4] &&
    $result[35][1]===$Liv && $result[35][2]===$Juv && $result[35][3]==$result[35][4] &&
     $result[38][1]===$Rea && $result[38][2]===$Liv && $result[38][3]==$result[38][4] &&
      $result[37][1]===$Spo && $result[37][2]===$Liv && $result[37][3]==$result[37][4] &&
       $result[36][1]===$Che && $result[36][2]===$Liv && $result[36][3]==$result[36][4] &&
    $result[39][1]===$Juv && $result[39][2]===$Liv && $result[39][3]==$result[39][4] ){

  $playLiverpool=+16;
    $wonLiverpool=+1;
    $drawLiverpool=+14;
    $lostLiverpool=+1;

    $scoredLiverpool=+$result[6][4]+$result[9][4] +$result[12][4]+ $result[16][3]+
    $result[17][3]+ $result[18][3]+$result[15][4] +$result[19][3]+$result[23][3]+
    $result[27][3]+$result[31][3]+$result[35][3]+$result[38][4]+$result[37][4]+
    $result[36][4] +$result[39][4];

    $missedLiverpool=+$result[6][3]+$result[9][3]+$result[12][3]+$result[16][4]+
    $result[17][4]+$result[18][4]+$result[15][3]+$result[19][4]+$result[23][4]+
    $result[27][4]+$result[31][4]+$result[35][4]+$result[38][3]+$result[37][3]+
    $result[36][3]+$result[39][3];

    $pointsLiverpool=+$won*$wonLiverpool + $draw*$drawLiverpool + $lost*$lostLiverpool;


}else{ 
  echo "EROR-LIVERPOOL";
}

}

}catch (PDOException $e){
 echo "Error!: " . $e->getMessage() . "<br/>";
}
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Place</th>
      <th scope="col">Team</th>
      <th scope="col">Played</th>
      <th scope="col">Won</th>
      <th scope="col">Draw</th>
      <th scope="col">Lost</th>
      <th scope="col">Scored</th>
      <th scope="col">Missed</th>
      <th scope="col">Points</th>
    </tr>
  </thead>
  <tbody>
     <tr>
      <th scope="row">1</th>
       <td><?php echo $Spo;?></td>
      <td><?php echo $playSporting;?></td>
      <td><?php echo $wonSporting;?></td>
      <td><?php echo $drawSporting;?></td>
      <td><?php echo $lostSporting;?></td>
      <td><?php echo $scoredSporting;?></td>
      <td><?php echo $missedSporting;?></td>
      <td><?php echo $pointsSporting;?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><?php echo $Che;?></td>
      <td><?php echo $playChelsea;?></td>
      <td><?php echo $wonChelsea;?></td>
      <td><?php echo $drawChelsea;?></td>
      <td><?php echo $lostChelsea;?></td>
      <td><?php echo $scoredChelsea;?></td>
      <td><?php echo $missedChelsea;?></td>
      <td><?php echo $pointsChelsea;?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><?php echo $Rea;?></td>
      <td><?php echo $playRealMadrid;?></td>
      <td><?php echo $wonRealMadrid;?></td>
      <td><?php echo $drawRealMadrid;?></td>
      <td><?php echo $lostRealMadrid;?></td>
      <td><?php echo $scoredRealMadrid;?></td>
      <td><?php echo $missedRealMadrid;?></td>
      <td><?php echo $pointsRealMadrid;?></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><?php echo $Liv;?></td>
      <td><?php echo $playLiverpool;?></td>
      <td><?php echo $wonLiverpool;?></td>
      <td><?php echo $drawLiverpool;?></td>
      <td><?php echo $lostLiverpool;?></td>
      <td><?php echo $scoredLiverpool;?></td>
      <td><?php echo $missedLiverpool;?></td>
      <td><?php echo $pointsLiverpool;?></td>
    </tr>
      <tr>
      <th scope="row">5</th>
      <td><?php echo $Juv;?></td>
      <td><?php echo $playJuventus;?></td>
      <td><?php echo $wonJuventus;?></td>
      <td><?php echo $drawJuventus;?></td>
      <td><?php echo $lostJuventus;?></td>
      <td><?php echo $scoredJuventus;?></td>
      <td><?php echo $missedJuventus;?></td>
      <td><?php echo $pointsJuventus;?></td>
    </tr>
  </tbody>
</table>

</body>
</html>