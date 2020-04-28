<!DOCTYPE html>
<html >
<head>
	<title>form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		 <div id="ok" class="mt-2"></div>
  <div class="d-flex w-75 mt-1">
    <label class="w-25 mr-2 mt-2" >Team name :</label>
    <input type="text" class="form-control mt-1" id="name">
  </div>

  <div class="d-flex w-75">
    <label class="w-25 mr-2 mt-2" >Team country :</label>
    <select id="country" class="form-control mt-1">
    </select>
  </div>

  <div class="d-flex w-75">
    <label class="w-25 mr-2 mt-2" >Team city :</label>
      <select class="form-control mt-1" id="city" disabled>
      </select>
  </div>
  <button id="add">ADD TEAM</button>
  
	

	
<script type="text/javascript">
  $(document).ready(function(){
    // вывод страны
    $.get("db.php",{},
      function(rrr){
        mas=JSON.parse(rrr);
        let ll;
          for(let i=0;i<mas.length;i++){
          ll+="<option value="+mas[i].id+">"+mas[i].name+"</option>";
        }
        $("#country").html(ll);
      });
    // при выборе страны
    $("#country").change(function(){
      let id=$("#country option:selected").val();
      $.get("obr.php",{
        cou:id
      },
      function(res){
      $("#city").prop('disabled',false);
      mas2=JSON.parse(res);
      let jj;
      for(let i=0;i<mas2.length;i++){
        jj+="<option value="+mas2[i].id+">"+mas2[i].name+"</option>"
      }
      $("#city").html(jj);
      });
    });
    
    // при нажати кнопки 
     $("#add").click(function(){
      let name=$("#name").val();
       let country=$("#country").val();
        let city=$("#city").val();
      $.get("obr2.php",{
        name:name,
        country:country,
        city:city
      },function(ressul){
        $("#ok").html(ressul);
      });
     });
  });
</script>
	
<!--   $("#country").change(function(){
      let id=$("#country option:selected").val();
      $.get("obr.php",{
        cou:id
      },
      function(res){
        $("#city").prop('disabled',false);
        
        let par=JSON.parse(res);
        console.log(par);
      });
    }); -->
	</div>
</body>
</html>