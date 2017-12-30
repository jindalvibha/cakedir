<?php
session_start();
$id=$_GET['id'];
//if($page!="viewpic" || $id=="")
//{
//
//	<script>
//	location.href="index.php?con=404"
//	</script>


//}

require "connect.php";
require "lib-navbar.php";
?>
<div class="container">
	<div class="row">
<?php
echo $_SESSION['kg'];
	if ($_SESSION['kg']==0)
	{	
			//view  the product image,title,price,dropdown for qty**********
			$q="select * from gallery where id='$id'";

			if ($res=mysqli_query($mysqli,$q))
			{
						$r=mysqli_fetch_assoc($res);
			
						?>
				
					
						<div class="col-sm-6" style=" text-align:center; font-size:16pt">
							<?php
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
							<div class="dropdown">
								<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Enter Quantity
								<span class="caret"></span>
								</button>
								<ul style="padding-left:300px" class="dropdown-menu">
									<li><a  href="saveqty.php?kg=1">1 kg</a></li>
									<li><a  href="#">2 kg</a></li>
									<li><a  href="#">3 kg</a></li>
									<li><a  href="#">4 kg</a></li>
									<li><a  href="#">5 kg</a></li>
									<li><a  href="#">6 kg</a></li>
									<li><a  href="#">7 kg</a></li>
									<li><a  href="#">8 kg</a></li>
									<li><a  href="#">9 kg</a></li>
									<li><a  href="#">10 kg</a></li>
								</ul>
							</div>
							<?php
							$kg=$_SESSION['kg'];
							?>
						</div>	
						<?php
			}
	}
		?>						
		<br><br><br><br><br><br><br><br>
		<!--IF ADD TO CART PRESSED THEN ADD ITEM TO CART************************-->
		<a   href="addcart.php?con=addcart&qty=<?php echo $kg; ?>&id=<?php echo $r['id']?>"><button type="button" style="font-size:16pt" class="btn  btn-primary btn-lg"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Shopping cart</button>  </a>			
		
		<?php
		//$qty=$_GET['kg'];
				
							
						?>
						
						
						<!--</div>-->
	
				<?php
				
				
				echo "<br>";
				echo "<br>";

				

		
	
	
		
	//else
	//{
	//	echo 'some problem';
	//}

?>

		</div>
	</div>
	