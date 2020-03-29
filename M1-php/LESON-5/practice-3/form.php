<?php
	require_once('db.php');
	require_once('city.php');
	if(isset($_COOKIE['YAZ'])){
		$ruanden=$_COOKIE['YAZ'];
	}else{
		$ruanden="ru";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container m-5">
		<form action="obr.php" method="post">
			<div class="d-flex " >
				<label class="mr-5 mb-5"><?php  echo $langs[$ruanden]['lang_label'];?></label>
				<select class="mr-5 mb-5  pl-4 pr-4 justify-content-center" name="langu">
					<option value ="ru">Russian</option>
					 <option value ="en">English</option>
				</select>
			</div>
  <div class="d-flex w-50">
    <label class="w-50 m-2" for="exampleInputEmail1"><?php  echo $langs[$ruanden]['name_label'];?></label>
    <input type="text" class="form-control m-1"  >
  </div>
  <div class="d-flex w-50">
    <label class="w-50 m-2" for="exampleInputPassword1"><?php  echo $langs[$ruanden]['age_label'];?></label>
   <select class="form-control m-1"  >>
   		<?php 
   		for($i=1;$i<=100;$i++){
   		?>
   		<option><?php echo $i;?></option>
   		<?php
   		}
   		?>
   </select>
  </div>
  <div class="d-flex w-50">
    <label class="w-50 m-2" for="exampleInputPassword1"><?php  echo $langs[$ruanden]['country_label'];?></label>
    <select class="form-control m-1"  > >
    	<?php 
    	for($i=0;$i<count($CC);$i++){
    	?>
    	<option><?php echo $CC[$i];?></option>
    	<?php
    	}
    	?>
    </select>
  </div>
  <div class="d-flex w-50">
    <label class=" ml-2 w-50" ><?php  echo $langs[$ruanden]['floor_label'];?></label>
    <label class="d-flex justify-content-center ml-1 mr-2 "><?php  echo $langs[$ruanden]['pol-men_label'];?><input type="radio" class="mt-2 ml-1" name="gender" value="Male" value="<?php if(isset($_COOKIE['kuk-gen'])){
         checked;
    }?>"></label>
     <label class="d-flex justify-content-center ml-2 mr-2 "><?php  echo $langs[$ruanden]['pol-women_label'];?><input type="radio" class="mt-2 ml-1" name="gender" value="Female"></label>
  </div>
  <div class="d-flex w-50">
    <label class="w-50 m-2" for="exampleInputPassword1"><?php  echo $langs[$ruanden]['nomer_label'];?></label>
    <input type="text" class="form-control m-1" >
  </div>
  <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>
	</div>
</body>
</html>