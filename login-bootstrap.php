<!DOCTYPE html>
<?php
session_start();

if (!isset($_POST['submit']))
{	
    
	?>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>page components </title>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		
	</head>
	<body>
	<?php
	$_SESSION['con']=0;
	include "lib-navbar.php";
	
	?>
	<div class="container" >
	<?php
	if ($_SESSION['register']==1)
	{
	?>
	<div style="color:green; font-size:14pt; padding-left:1000px;">
		New User?
	</div>
	<a style="font-size:20pt; padding-left:1000px;color:orange;" href="registeration.php">
			Register
	</a>
	
	<?php
	
	}
	?>
	<br/>
	<div style="font-size:20pt;color:orange;">
	
			Login
	</div>
	
	<br>
	<form method="POST" class="form"  action="login-bootstrap.php">
		<div class="form-group" 	>
			<label for="usernamefield">Username</label>
				<input type="text"  name="username"  class="form-control" id="usernamefield" placeholder="Username" />
		</div>	
		<br/>
		<br/>
		<div class="form-group"	>
			<label for="passwordfield">Password </label>
				<input type="text" name="password" class="form-control" id="passwordfield" placeholder="Password"/>
		</div>
	
		<br/>
		<br/>
		<input type="submit"  class="btn btn-primary"   name="submit" value="submit">
	
	<br/>
	
	</form>
	<br>
	<a style="background-color:lightgrey" href="carousel-cakes.php">Back</a>
		<br/><br/>
	
	
	</div>
	
	</body>
	</html>
<?php

}
else	//VALIDATE
{	
	$inputError=0;
	echo ($_POST['username']);
	if (empty($_POST['username']))
	{
		echo 'Invalid username';
		$inputError=1;
	}
	
	if (empty($_POST['password']))
	{
		echo 'Invalid password';
		$inputError=1;
	}
	
	if ($inputError==0)
	{
		//assign $_POST values to variables

		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$_SESSION['username']=$username;
		
		
		
		require "connect.php";
		//sql query - search username

		$sql="SELECT * FROM customer WHERE (username ='$username' && password= '$password') ";
		//////echo $username,$password;
		
		$result= $mysqli->query($sql);
		if ($result=== false)
		{
			echo 'ERROR Cd nt execute SQL '.$mysqli->error;

		}
		else
		{
			
			if ($result->num_rows >0)
				
			{	
				
				$_SESSION['con']=1;
				$row=$result->fetch_row();
				$_SESSION['email']=$username;
				$_SESSION['username']=$row[0];
				$_SESSION['navbar']=1;
				require "catalogue.php";
				
			}
			else
			{
				echo '	Invalid usrname or passwd <br/>';
			}	


		}
		$mysqli->close();
	}

}
?>










