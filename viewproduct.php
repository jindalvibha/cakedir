<?php
session_start();
$id=$_GET['id'];
$_SESSION['id']=$id;





require "connect.php";
require "lib-navbar.php";


if (!isset($_POST['submit']))
{
	echo ($_POST['submit']);

	
	//view  the product image,title,price,dropdown for qty**********
	$q="select * from gallery where id='$id'";

	if ($res=mysqli_query($mysqli,$q))
	{
				$r=mysqli_fetch_assoc($res);
				
				?>
				<div class="container">
					<div class="row">
					
						<div class="col-sm-6" style=" text-align:center; font-size:16pt">
							<?php
							$image=$r['image'];
							echo "<br>";?>
							<img  src="img/<?php echo $r['image']; ?>"  width="400" height="400"> 
							
							<?php
							echo "<br>";?>
						</div>	
						<div class="col-sm-6" style=" text-align:center; font-size:16pt">
							<?php
							echo "<br>";
							echo $r['title'];
							echo "<br><br>";?>
							Price :
							<?php echo "  Rs ".$r['price']." /kg";
							
							
							echo "<br>";
							?>
							<form method="GET" action="addcart.php">
								  <select name="kg">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
								  </select>
								  
								<input name="id" type="hidden" value="<?php echo $r['id']?>">
								<br><br><br><br><br><br><br><br><br><br>
								<button style="font-size:16pt" type="submit" ><span class="glyphicon glyphicon-shopping-cart"></span>Add to Shopping cart</button>

							
							</form>

							
							
						</div>
						
						</div>
					</div>
				</div>
			<?php
				
				
				echo "<br>";
				echo "<br>";

				?>

<?php


	
	}
	else
	{
		echo 'some problem';
	}
}
?>
<br><br><br>
							
