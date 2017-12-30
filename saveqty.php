<?php
session_start();
$kg=$_GET['kg'];
$id=$_SESSION['id'];
?>
<div class="container">
	<div class="row">
		<div class="col-md-6" style="text-align:left; font-size:16pt">
							<?php
							$image=$_GET['image'];
							echo "<br><br>";?>
							<img  src="img/<?php echo $image; ?>"  width="400" height="400"> 
							
				
							
	
		</div>
		<div class="col-md-5" style="text-align:center;">
			<a  href="addcart.php?con=addcart&qty=<?php echo $kg; ?>&id=<?php echo $id; ?>"><button type="button" style="font-size:16pt" class="btn  btn-primary btn-lg"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Shopping cart</button>  </a>
		</div>
	</div>						
</div>