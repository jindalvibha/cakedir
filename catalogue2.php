<!DOCTYPE html>
<html>
<head><meta charset="UTF-8">
		<title>page components </title>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
	
	
</head>
<body>

<?php
session_start();
require "connect.php";

//if navbar is to be printed
if  ($_SESSION['navbar']== 1)
require "lib-navbar.php";




$q="select * from gallery";
$result= $mysqli->query($q);
$r=0;
?>
<div class="container">
<div class="row">
<?php

if ($result)
	
{
	// SHOW IMAGES OF CAKES, TITLE, PRICE FROM TABLE GALLERY
	while ($row=$result->fetch_row())
	{	
		
		$r+=1;
		?>
		<div class="col-md-4" style="font-size:18pt;text-align:center" > 
            <br><br><br>
			<img src="img/<?php echo $row[2];?> " >
			<br>
			<div>
				<?php echo $row[4];?>
			</div>
			<p style="font-size:14pt;" >Rs <?php echo $row[5];?>/kg</p>
		</div>
		<?php
		
	} 
}
?>
</div>

	
</div>
</body>

<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>