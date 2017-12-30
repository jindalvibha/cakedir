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
	  
	  <div style=" font-size:16pt;  ">
	
	
	
		<form method="POST" class="form" action="registeration.php">
		<div class="form-group" 	>
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
		
		
		<div class="form-group" 	>
			<label for="usernamefield">Username&nbsp&nbsp&nbsp&nbsp</label>
				<input type="text"  name="username"  class="form-control" id="usernamefield" placeholder="  Enter Username" />
		</div>	
		
		
		
		<div class="form-group" 	>
			<label for="passwordfield">Password&nbsp&nbsp&nbsp&nbsp&nbsp</label>
				<input type="text"  name="password"  class="form-control" id="passwordfield" placeholder="  Enter password" />
		</div>	
		
		
		<br/>		
		<input type="submit"  class="btn btn-primary"   name="submit" value="submit">
	
		<br>
		<a style="boundary-color:black; background-color:lightgrey" href="login-bootstrap.php">Back</a>
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
	if (empty($_POST['username']))
	{
		echo 'Invalid username <br>';
		$inputError=1;
	}
	
	if (empty($_POST['password']))
	{
		echo 'Invalid password<br>';
		$inputError=1;
	}
	
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

		$username=$_POST['username'];
		$password=$_POST['password'];
		$name=$_POST['name'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		
		
		require "connect.php";
	
		//sql query - ADD RECORD

		$sql="INSERT  INTO customer (custName,cust_id,username,password,address,city) VALUES ('$name',' ','$username', '$password','$address','$city')";
		//echo $username;
		$result= $mysqli->query($sql);
		if ($result=== false)
		{
			echo 'ERROR Cd nt execute SQL'.$mysqli->error;

		}
		else
		{	//echo $name;
			$_SESSION['custName']=$name;
			echo 'New customer  added.';
			$_SESSION['register']=0;
			header('Location: login-bootstrap.php');    
		}
		$mysqli->close();
		?>
		<a style="background-color:lightgrey" href="login-bootstrap.php">Back</a>
		<?php
		
	
	
	
	}

}










