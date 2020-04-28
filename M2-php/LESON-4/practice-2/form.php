<!DOCTYPE html>
<html >
<head>
	<title>form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container d-flex justify-content-center">
		
	<div class="w-50 mt-5">
		<div id="bb"></div>
  <div class="form-group row ">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="login" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pas1">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label ">Confirm Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pas2">
    </div>
  </div>
   <div class="form-group row ">
    <label for="staticEmail" class="col-sm-2 col-form-label">Full Name</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="name">
    </div>
  </div>
  <button id="but">CLICK</button>
	</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#but").click(function(){
				let log=$("#login").val();
				let pas1=$("#pas1").val();
				let pas2=$("#pas2").val();
				let name=$("#name").val();
				// проверка паролья
				$.post("obr.php",{
					log:log,
					pas1:pas1,
					pas2:pas2,
					name:name
				},function(rer){
					$("#bb").html(rer);
				});
			});
		});
	</script>
</body>
</html>