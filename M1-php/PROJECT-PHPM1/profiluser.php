<?php 	
session_start();
try{
$conn=new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');
$sql="SELECT * FROM `followers`";
	$query = $conn->prepare($sql);
    $query->execute();
    $followers1 = $query->fetchall();

    $sql2="SELECT * FROM `follows`";
	$query2 = $conn->prepare($sql2);
    $query2->execute();
    $follows2 = $query2->fetchall();
}catch(PDOException $e){
	 echo "Error!: " . $e->getMessage() . "<br/>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profileuser</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
</head>
<body>
	<div class="container">
		<ul class="item">
			<?php if(isset($_GET['pp'])){
					?>
					<a href="getfollowers.php?id2=<?php echo $_GET['pp']?>" class="item_a"><li>Подписчики</li></a>
					<?php
				}else if(isset($_SESSION['login']) && isset($_SESSION['password'])){
					?>
						<a href="sesfollowers.php?id=<?php echo $_SESSION['id'];?>" class="item_a"><li>Подписчики</li></a>
					<?php
				}?>
			<a href="#" class="item_a"><li>Сообщения</li></a>	
			<?php if(isset($_GET['pp'])){
					?>
					<a href="getfollow.php?id2=<?php echo $_GET['pp']?>" class="item_a"><li>Подписки</li></a>	
					<?php
				}else if(isset($_SESSION['login']) && isset($_SESSION['password'])){
					?>
						<a href="sesfollow.php?id=<?php echo $_SESSION['id'];?>" class="item_a"><li>Подписки</li></a>	
					<?php
				}?>
		<a href = "set.php?id=<?php echo $_SESSION['id'];?>" class="item_a"><li>Настройки</li></a>
		<a href="search.php" class="item_a"><li>ПОИСК</li></a>
		<?php if(isset($_GET['pp'])){
				?>
				<a class="profexit" href="search.php"><br>НАЗАД</a>
				<?php
			}?>
		</ul>
		<div class="d-flex  justify-content-center">
			<div class="profile_img">
				<img class="iii" src="img/nout.jpg">
			</div>
			<div class="Profile_info">
				<label>
				<?php
				if(isset($_GET['pp'])){
					echo"GET";
				}else if(isset($_SESSION['login']) && isset($_SESSION['password'])){
					echo"SESIA";
				}
				?>
				</label>
				<label>
					
				</label>
			</div>
			<a class="profexit" href="EXIT.php">ВЫХОД</a>
		</div>
		<div>
			<div class="d-flex col">
				<?php
					if(isset($_GET['pp'])){
						?>
				<a href="podpiska.php?id2=<?php echo $_GET['pp']?>id=<?php echo $_SESSION['id'];?>" class="ml-5"><button type="button" class=" btn btn-light text-primary ml-5 mt-1">Подписатся</button></a>

			<a href="otpiska.php?idfollowers=<?php if($_GET['pp']==$followers1['userid'] && $_SESSION['id']==$followers1['followerid']){
				echo $followers1['id'];
			}?>

				idfollows=<?php ?>"><button type="button" class="btn btn-light text-primary mt-1 ml-2">Отписатся</button></a>
				<?php
				}
				?>
			</div>
		</div>
		<?php
		if(isset($_GET['pp'])){
					?>
				<div class="w-75 mt-2 d-flex  justify-content-end">
				<form class="w-50" method="get" action="twitadd.php">
					<textarea class="w-100" name="twit"></textarea>
					<button class="btn btn-primary">Опубликовать</button>
				</form>
				</div>
					<div class="d-flex flex-column col-xl-6 col_col">
					<?php
					if(isset($_SESSION['id']) && isset($_SESSION['login']) && isset($_SESSION['password'])){
						try{
					$conn2=new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');
    					$sql5="SELECT tws.id,tu.login as user_id,tws.tweet,tws.post_date FROM `tweets` as tws LEFT OUTER JOIN `tusers` as tu ON tws.userid=tu.id WHERE tws.userid=:id";
    					$query5 = $conn2->prepare($sql5);
    					$query5->execute(['id'=>$_GET['pp']]);
    					$twit = $query5->fetchall();
    					
    					foreach ($twit as $value){
						?>
					<div class="col px-md-5  jumbotron jumbotron-fluid w-100 h-50 mt-2">
					 <div class="container">
						<h4 class="display-5"><?php echo "Кто:  ".$value['user_id']?></h4> 
						<p class="lead"><?php echo$value['tweet'];?></p>
						<label><?php echo "Дата:  ".$value['post_date']?></label>
					  </div>
				</div>
				<?php
				}
			}catch(PDOException $e){
	 echo "Error!: " . $e->getMessage() . "<br/>";
	}
				}else{
					header('Location:profiluser.php');
				}

			
			}else if(isset($_SESSION['login']) && isset($_SESSION['password'])){
						?>
				<div class="w-75 mt-2 d-flex  justify-content-end">
				<form class="w-50" method="get" action="twitadd.php">
					<textarea class="w-100" name="twit"></textarea>
					<button class="btn btn-primary">Опубликовать</button>
				</form>
				</div>
					<div class="d-flex flex-column col-xl-6 col_col">
					<?php
					if(isset($_SESSION['id']) && isset($_SESSION['login']) && isset($_SESSION['password'])){
						try{
					$conn2=new PDO('mysql:host=localhost;dbname=bitlab', 'root', '');
    					$sql5="SELECT tws.id,tu.login as user_id,tws.tweet,tws.post_date FROM `tweets` as tws LEFT OUTER JOIN `tusers` as tu ON tws.userid=tu.id WHERE tws.userid=:id";
    					$query5 = $conn2->prepare($sql5);
    					$query5->execute(['id'=>$_SESSION['id']]);
    					$twit = $query5->fetchall();
    					
    					foreach ($twit as $value){
						?>
					<div class="col px-md-5  jumbotron jumbotron-fluid w-100 h-50 mt-2">
					 <div class="container">
						<h4 class="display-5"><?php echo "Кто:  ".$value['user_id']?></h4> 
						<p class="lead"><?php echo$value['tweet'];?></p>
						<label><?php echo "Дата:  ".$value['post_date']?></label>
						<?php
						if(isset($_SESSION['id'])){
							?>
							<form action="redtwit.php" method="get">
						<input type="hidden" name="id" value="<?php echo $value['id'];?>">
								<button  class="btn btn-light">Редактировать</button>
							</form>
								<form action="deltwit.php" method="get">
						<input type="hidden" name="id" value="<?php echo $value['id'];?>">
							<button class="btn btn-light">Удалить</button>
							</form>
						<?php
						}
						?>
					  </div>
				</div>
				<?php
				}
			}catch(PDOException $e){
	 echo "Error!: " . $e->getMessage() . "<br/>";
	}
				}else{
					header('Location:profiluser.php');
				}
				}
		?>
		
		</div>
	</div>
	
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>