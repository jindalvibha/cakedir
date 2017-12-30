<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
		<title>page components </title>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
</head>

<body>

	<div  style="background:palegreen" class="container">
	
  
	 <div class="row">
		<div style="font-size:20pt" class="col-lg-6">
			<a href="login-bootstrap.php"><br><br>LOGIN<br><br><a/>
			<a href="registeration.php">REGISTER<a/>
		</div>
		
		<div class="col-lg-6">
			<?php
				include "carousel-cakes.php";
			?>
		</div>
	 </div>
		
	</div>

</body>
<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>