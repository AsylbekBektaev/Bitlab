<?php
	require_once('city.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>KKK</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<form class="w-50  m-5 col " action="ressult.php" method="post">
		<div class="d-flex m-2">
    <label class="w-50" >Name:</label>
    <input type="text" class="form-control" name="name" value="<?php if(isset($_COOKIE['kuk-name'])){
        echo $_COOKIE['kuk-name'];
    }?>">
    	</div>
    	<div class="d-flex m-2">
    <label class="w-50" >Surname:</label>
    <input type="text" class="form-control" name="surname" value="<?php if(isset($_COOKIE['kuk-sur'])){
        echo $_COOKIE['kuk-sur'];
    }?>">
    	</div>
    	<div class="d-flex m-2"> 
    <label class="w-50" >Age:</label>
    <select class="w-50 ml-auto form-control" name="age" >
    	<?php
    	for ($i=1;$i<=100;$i++){ 
    	?>
    	<option ><?php echo $i;?></option>
    	<?php 
         }
    	?>
    </select>
    	</div>
    	<div class="d-flex m-2">
    <label class="w-50" >Country:</label>
    <select class="w-50 ml-auto form-control" name="country" >
    <?php
        for ($i=0; $i <count($CC) ; $i++) { 
        ?>
        <option <?php if(isset($_COOKIE['kuk-coun'])==$CC[$i]){
            ?>value="<?php echo $_COOKIE['kuk-coun'];?>"<?php
        }?>><?php echo $CC[$i];?></option>
        <?php
        }
        ?>
    </select>
    	</div>
    	<div class="d-flex m-2">
    <label class="w-50" >Gender:</label>
    <label class="d-flex justify-content-center ml-2 mr-2 ">Male<input type="radio" class="mt-2 ml-1" name="gender" value="Male" value="<?php if(isset($_COOKIE['kuk-gen'])){
         checked;
    }?>"></label>
     <label class="d-flex justify-content-center ml-2 mr-2 ">Female<input type="radio" class="mt-2 ml-1" name="gender" value="Female"></label>
    </div>
    	<div class="d-flex m-2">
    <label class="w-50" >Credit card:</label>
    <input type="text" class="form-control" name="card" value="<?php if(isset($_COOKIE['kuk-ca'])){
        echo $_COOKIE['kuk-ca'];
    }?>">
    	</div>
  <button type="submit" class="btn btn-primary">SAVE</button>
</form>
</div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>