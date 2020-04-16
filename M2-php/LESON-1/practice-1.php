<?php
	// PRACTICE-1
		class  Student{
			public $id;
			public $name;
			public $surname;
			public $gpa;
						
			function __construct($id2,$name2,$surname2,$gpa2)
			{
				$this->id=$id2;
				$this->name=$name2;
				$this->surname=$surname2;
				$this->gpa=$gpa2;

			}

			public function getStudentData(){
				echo $this->id.' '.$this->name.' '.$this->surname.' '.$this->gpa.'<br>';
			}
		}

		$Students=[
			new Student(1,'Asylbek','Bektaev',3.0),
			new Student(2,'Asel','Sarybayeva',3.2),
			new Student(3,'Talgat','Mukanov',4.8),
			new Student(4,'Ruslan','JUanyshev',3.4),
			new Student(5,'Azamat','Kuandykov',2.5),
			new Student(6,'Asylzhan','Ismailova',3.3),
			new Student(7,'Nurgul','Taubaeva',3.8),
			new Student(8,'name8','surname8',2.5),
			new Student(9,'name9','surname9',3.1),
			new Student(10,'name10','surname10',2.1)
		];
		
		foreach ($Students as  $stu) {
			 $stu->getStudentData();
		}


		// PRACTICE-2
		topStudent($Students);

		function topStudent($Students2){
			$max=0;
			$maxStu=null;
			foreach ($Students2 as  $stu2) {
				if($max<$stu2->gpa){
					$max=$stu2->gpa;
					$maxStu=$stu2;
				}
			}
			echo $maxStu->getStudentData();
		}
?>