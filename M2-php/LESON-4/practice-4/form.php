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
    <label for="staticEmail" class="col-sm-2 col-form-label">Заголовок</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="zag" >
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Контент</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" id="content"></textarea>
    </div>
  </div>
  <button id="but">CLICK</button>
  <div class="mt-3" id="tt"></div>
	</div>
	
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			HH();
			$("#but").click(function(){
				let zag=$("#zag").val();
				let con=$("#content").val();
				$.post("obr2.php",{
					zag:zag,
					con:con
				},function(res){
					$("#bb").html(res);
				});
				HH();
			 });
		});
		function HH(){
			$.get("obr.php",{},
					function(rrr){
		let mmm=JSON.parse(rrr);
		let it;
        for(let i=0;i<mmm.length;i++){
        	it+="<div class='card w-75 mt-2'><div class='card-body'><h5 class='card-title'>"+mmm[i]['Zag']+"</h5><p class='card-text'>"+mmm[i]['Content']+"</p><label>"+mmm[i]['data']+"</label><br><a href='#' class='btn btn-primary'>Button</a></div></div>";
        }
						$("#tt").html(it);
					});
		}
	</script>
</body>
</html>