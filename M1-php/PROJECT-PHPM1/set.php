<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Setting</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
</head>
<body>
	<div class="container d-flex justify-content-center">
			<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary h-25 mt-5" data-toggle="modal" data-target="#staticBackdrop">
				  Удалить Акаунт
				</button>

				<!-- Modal -->
				<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <h2>Вы хотите удалить Акаунт?</h2>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">НЕТ</button>
				        <a href="deleteuser.php?id=<?php echo $_SESSION['id'];?>"><button type="button" class="btn btn-primary">ДА</button></a>
				      </div>
				    </div>
				  </div>
				</div>
						  	
      

	<a href="updateuser.php?id=<?php echo $_SESSION['id'];?>"><button type="button" class="btn btn-primary mt-5 ml-2">Редактировать Акаунт</button></a>
	
	<a href="profiluser.php"><button  class="btn btn-outline-primary mt-5 ml-2">НАЗАД</button></a>

	</div>




	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>