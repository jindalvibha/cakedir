<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
		<title>page components </title>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
</head>


<body>
<?php
require "connect.php";
$q="select * from gallery";
$result= $mysqli->query($q);
$r=0;
?>
<div class="container">
<div class="row">
<br>
<div class="col-md-6">
	 <h3>Item</h3>
</div>
<div class="col-md-2">
	 <h3>Price</h3>
</div>
<div class="col-md-2">
	<h3> Qty</h3>
</div>
<div class="col-md-2">
	<h3> Subtotal</h3>
</div>
<div class="col-md-2">
	<h4> </h4>
</div>
</div>
<br>
<div class="row">	
<?php
while ($row=$result->fetch_row())
	{	
		
		$r+=1;
		?>
	<?php// print image?>
	<div class="col-md-1" > 
            
			<img src="img/<?php echo $row[2];?> " width="50" height="50" >
	</div>
	
	<?php// print title?>
	<div style="font-size:13pt" class="col-md-5"  > 
				<?php echo $row[4];?>
	</div>
	
	<?php// print price/kg?>
	<div style="font-size:13pt" class="col-md-2" " > 			
			<p>Rs <?php echo $row[5];?>/kg</p>
	</div>
	
	
	<br><br><br><br>
	<?php
	}

?>
</div>
</div>
</body>
<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script src="../ducatt/BOOTSTRAP-3PM/js/jQuery.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../ducatt/BOOTSTRAP-3PM/js/bootstrap.js"></script>

</html>