<!DOCTYPE html>
<?php
session_start();
$_SESSION['con']=0;
include "lib-navbar.php";

if (!isset($_POST['submit']))
{
	
	?>
	<html>
	<body>
	<div class="container">
      <div  style=" font-size:16pt;color:blue">
	  Please enter your details to continue as guest
	  </div>
	  <br><br>
	  
	  
	  <div style=" font-size:16pt;  ">
		
		<form method="POST" class="form" action="guest.php">
		<div class="form-group"  	>
			<label for="namefield">Name</label>
				<input type="text"  name="name"  class="form-control" id="namefield" placeholder="  Enter name" />
		</div>	
		
		
		
		<div class="form-group" 	>
			<label for="addressfield">Address&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
				<input type="text"  name="address"  class="form-control" id="addressfield" placeholder="  Enter Address" />
		</div>	
		
		
		<div class="form-group" 	>
			<label for="cityfield">City&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
				<input type="text"  name="city"  class="form-control" id="cityfield" placeholder="  Enter city" />
		</div>	
		
				
		<br/>		
		<input type="submit"  class="btn btn-primary"   name="submit" value="submit">
	
		<br>
		<!--<a style="boundary-color:black; background-color:lightgrey" href="login-bootstrap.php">Back</a>-->
		<br/><br/>
		</form>
	  </div>
	</div>
	</body>
	</html>
<?php
}
else	//VALIDATE
{	
	$inputError=0;
	
	
	if (empty($_POST['name']))
	{
		echo 'Invalid name<br>';
		$inputError=1;
	}
	if (empty($_POST['address']))
	{
		echo 'Invalid address<br>';
		$inputError=1;
	}
	if (empty($_POST['city']))
	{
		echo 'Invalid city<br>';
		$inputError=1;
	}
	//echo  
	
	if ($inputError===0)
	{
		//assign $_POST values to variables

		
		$name=$_POST['name'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		
		
		require "connect.php";
	
		//sql query - ADD RECORD

		$sql="INSERT  INTO guest (custName,address,city) VALUES ('$name','$address','$city')";
		//echo $username;
		$result= $mysqli->query($sql);
		if ($result=== false)
		{
			echo 'ERROR Cd nt execute SQL'.$mysqli->error;

		}
		else
		{	
			//$_SESSION['cart-glyphicon']=0;
			//include "lib-navbar.php";
			
			echo "<br><br>";
			echo "Your order has been placed";
			
			
		}
		$mysqli->close();
		?>
		<!--<a style="background-color:lightgrey" href="login-bootstrap.php">Back</a>-->
		<?php
		
	
	
	
	}

}










