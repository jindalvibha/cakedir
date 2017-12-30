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
session_start();

?>
<div class="container">
	<br>
	<div style="float:center;color:red;font-size:16pt;" class="glyphicon glyphicon-shopping-cart">

		SHOPPING CART

	</div>

	<div style="color:blue;font-size:14pt" class="row">
		<br>
		<div  class="col-md-6">
			<h4>Item</h4>
		</div>
		<div  class="col-md-2">
			<h4>Price</h4>
		</div>
		<div  class="col-md-2">
			<h4>&nbsp&nbsp&nbsp&nbspQuantity</h4>
		</div>
		<div  class="col-md-2">
			<h4> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSubtotal</h4>
		</div>
		<div class="col-md-2">

			<h4> </h4>
		</div>
	</div>

	<div class="row">	
		<?php
			$email=$_SESSION['email'];
			$q="select * from shopcart where email='$email'";
			$result= $mysqli->query($q);
			$r=0;
			$total=0;
			//echo $email;
			if (!$result)
				echo "something wrong";
			else
			{
				while ($row=$result->fetch_row())
				{	
					//print_r($row);
					$r+=1;
					
					// print image 
					?>
					<div class="col-md-1" > 
						<img src="img/<?php echo $row[4];?> " width="70" height="70" >
						
					</div>
	
					<?php// print title?>
					<div style="font-size:13pt" class="col-md-5"  > 
						<?php echo $row[2];?>
						<br><br>
						
						
						
						<a href="remove.php?id=<?php echo $row[0]?>" style="font-size:10pt;padding-left:200px"; ">Remove</a>
					</div>
	
					<?php// print price/kg?>
					<div style="font-size:13pt" class="col-md-2"  > 
						<?php 
							$price=$row[6];
						?>
						<p>Rs <?php echo $price;?>/kg</p>
					</div>
	
					<?php// print qty?>
	
					<div style="font-size:13pt;text-align:center;" class="col-md-2" > 
						<?php 
							$qty=$row[3];
							echo $qty;
						?>
							<a href="editqty.php?id=<?php echo $row[0]?>" style="font-size:9pt; ">&nbsp&nbspEdit</a>
						
					</div>
	
					<?php// print subtotal?>
					<div style="font-size:13pt;text-align:center;" class="col-md-2"  > 
						<?php 
							$subtotal=$price*$qty;
							echo $subtotal;
							
							$total+=$subtotal;
						?>
					</div>
	
					<br><br><br><br><br>
				<?php
			}
			
		}

		?>
	</div>
	<div class="col-md-10">
	</div>
	<div style="color:black; text-align:center; font-size:14pt" class="col-md-2">
		-----------
	</div>
	<div style="color:blue;" class="row">
		<div style="color:blue; text-align:right;font-size:14pt" class="col-md-10">
			
			Total
		</div>
		<div style="color:black; text-align:center; font-size:12pt" class="col-md-2">
			<?php echo '    '.$total ?>
		</div>
	</div>
	<br><br>
	<div class="row" style="text-align:right">
		<div class="col-md-7">
			<a href="login-reg-guest.php" style="font-size:16pt" class="btn btn-primary btn-large" role="button">Place Order</a>
			<!--<button class="btn btn-large btn-primary" style="font-size:16pt" type="submit" >&nbsp&nbsp&nbsp&nbsp&nbspPlace Order&nbsp&nbsp&nbsp&nbsp&nbsp</button>-->
		</div>
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