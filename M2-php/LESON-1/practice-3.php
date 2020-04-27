<?php 
	class Player{
		public $number;
		public $name;
		public $surname;
		public $position;

		public function __construct($number2,$name2,$surname2,$position2){
			$this->number=$number2;
			$this->name=$name2;
			$this->surname=$surname2;
			$this->position=$position2;
		}

		public function getData(){
			 echo $this->number.' '.$this->name.' '.$this->surname.' '.$this->position.'<br>';
		}



	}

	
	class  Club{
		public $name3;
		public $country3;
		public $ratingPoints3;
		public $mas=[];

		public function __construct($name4,$country4,$ratingPoints4,$PP){
			$this->name3=$name4;
			$this->country3=$country4;
			$this->ratingPoints3=$ratingPoints4;
			$this->mas=$PP;
		}

		public function printClubData(){
			echo $this->name3.' '.$this->country3.' '.$this->ratingPoints3.'<br>';
			foreach ($this->mas as $value) {
					echo $value->getData();
				}	
		}



	}


	$Players1=[
		new Player(12,'name1','surname1','center'),
		new Player(13,'name2','surname2','left'),
		new Player(14,'name3','surname3','right'),
		new Player(15,'name4','surname4','left center'),
		new Player(16,'name5','surname5','right center')
	];
	
	$Players2=[
		new Player(17,'name6','surname6','center'),
		new Player(18,'name7','surname7','left'),
		new Player(19,'name8','surname8','right'),
		new Player(20,'name9','surname9','left center'),
		new Player(21,'name10','surname10','right center')
	];

		
	$CLUB=[
		new Club('Real madrid','Spain',222,$Players1),
		new Club('Portu','Portugal',333,$Players2)
	];

	foreach ($CLUB as  $Clubs) {
		  $Clubs->printClubData();
		 
	}?>
	<hr>
<?php
	// practice-4

	$Players3=[
		new Player(11,'name29','surname29','left center'),
		new Player(10,'name30','surname30','right center'),
		new Player(9,'name31','surname31','left center'),
		new Player(8,'name32','surname32','right center'),
		new Player(7,'name33','surname33','left center'),
		new Player(6,'name34','surname34','right center'),
		new Player(5,'name35','surname35','left center'),
	];

		$newpl3=sortPlayers($Players3);
	$Players4=[
		new Player(39,'name1','surname1','center'),
		new Player(38,'name2','surname2','left'),
		new Player(37,'name3','surname3','right'),
		new Player(36,'name4','surname4','left center'),
		new Player(35,'name5','surname5','right center'),
		new Player(34,'name6','surname6','center'),
		new Player(33,'name7','surname7','left'),
	];
	$newpl4=sortPlayers($Players4);
	$Players5=[
		new Player(32,'name8','surname8','right'),
		new Player(31,'name9','surname9','left center'),
		new Player(30,'name10','surname10','right center'),
		new Player(29,'name11','surname11','center'),
		new Player(28,'name12','surname12','left'),
		new Player(27,'name13','surname13','right'),
		new Player(26,'name14','surname14','left center'),
	];
	$newpl5=sortPlayers($Players5);
	$Players6=[
		new Player(25,'name15','surname15','right center'),
		new Player(24,'name16','surname16','center'),
		new Player(23,'name17','surname17','left'),
		new Player(22,'name18','surname18','right'),
		new Player(21,'name19','surname19','left center'),
		new Player(20,'name20','surname20','right center'),
		new Player(19,'name21','surname21','center'),
	];
	$newpl6=sortPlayers($Players6);
	$Players7=[
		new Player(18,'name22','surname22','left'),
		new Player(17,'name23','surname23','right'),
		new Player(16,'name24','surname24','left center'),
		new Player(15,'name25','surname25','right center'),
		new Player(14,'name26','surname26','center'),
		new Player(13,'name27','surname27','left'),
		new Player(12,'name28','surname28','right'),
	];
	$newpl7=sortPlayers($Players7);




	function sortPlayers($pl) {
		for ($j = 0; $j < count($pl); $j++) {
			for ($i = 0; $i < count($pl) - 1; $i++) {
				if ($pl[$i]->number > $pl[$i+1]->number) {
					$temp = $pl[$i];
					$pl[$i] = $pl[$i + 1];
					$pl[$i + 1] = $temp;
				}
			}
		}

		return $pl;
	}

	
	


	$league =[ 
		new Club('name5','coun5',555,$newpl7),
		new Club('name4','coun4',444,$newpl6),
		new Club('name3','coun3',333,$newpl5),
		new Club('name2','coun2',222,$newpl4),
		new Club('name1','coun1',111,$newpl3),
	];
	$newlg=sortClub($league);
	foreach ($newlg as $value) {
		$value->printClubData();
	}
	
	

	function sortClub($cl) {
		for ($j = 0; $j < count($cl); $j++) {
			for ($i = 0; $i < count($cl) - 1; $i++) {
				if ($cl[$i]->ratingPoints3> $cl[$i+1]->ratingPoints3) {
					$temp = $cl[$i];
					$cl[$i] = $cl[$i + 1];
					$cl[$i + 1] = $temp;
				}
			}
		}

		return $cl;
	}
	


	
?>



