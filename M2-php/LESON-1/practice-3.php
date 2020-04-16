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
			return $this->number.' '.$this->name.' '.$this->surname.' '.$this->position.'<br>';
		}
	}

	
	class  Club{
		public $name3;
		public $country3;
		public $ratingPoints3;
		public $players3=[];

		public function __construct($name4,$country4,$ratingPoints4,$play){
			$this->name3=$name4;
			$this->country3=$country4;
			$this->ratingPoints3=$ratingPoints4;
			$this->players3=$play;
		}

		????public function printClubData(){
			echo $this->name3.' '.$this->country3.' '.
			$this->ratingPoints3.' '.$this->players3.'<br>'.getData();?????
		}
	}


	$Players1=[
		new Player(12,'name1','surname1','center'),
		new Player(13,'name2','surname2','left'),
		new Player(14,'name3','surname3','right'),
		new Player(15,'name4','surname4','left center'),
		new Player(16,'name5','surname5','right center'),
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
	}

?>



