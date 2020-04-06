<?php

	  try {
        $conn = new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');

        $sql = "INSERT INTO `matches`(home_team_id,away_team_id,home_team_goals,away_team_goals) VALUES (:one,:two,:three,:four);";
        $query = $conn->prepare($sql);
        $query->execute([
        	'one'=>5,
          'two'=>2,
          'three'=>0,
          'four'=>0,
        ]);
        // matches-add.php
        // header('Location:plus.php');
        }catch(PDOException $e) {
   echo "Error!: " . $e->getMessage() . "<br/>";
  }
  ?>