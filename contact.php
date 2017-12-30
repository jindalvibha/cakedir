<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
		<title>page components </title>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<br>
<br>
<br>		
<h2 style="color:red;text-align:center;"> ----Contact Us----</h2>
<h4 style="color:black;text-align:center;"> We have all the answers right now!</h2>
<br>

</head>
<body>
<?php
 if (!isset($_POST['submit']))
{
	
	?>
	<html>
	<body>
	<div  style="font-size:16pt;" class="container">
		<div style="text-align:right;" class="col-md-12">
			<span style="color:red" class="glyphicon glyphicon-phone"></span> 9910202778
		</div>
		<form method="POST" class="form" action="contact.php">
		
		<div  class="form-group"  >
			<label   for="namefield">Your Name</label>
				<input  style="padding-right:500px" type="text"  name="name"  class="form-control" id="namefield" placeholder="  Enter name" />
		</div>	
	
			
		<div class="form-group" >
			<label  for="emailfield">Your Email&nbsp&nbsp&nbsp&nbsp</label>
				<input  type="text"  name="email"  class="form-control" id="emailfield" placeholder="  Enter Email" />
		</div>	
		
		
		
		<div class="form-group" 	>
			<label for="phonefield">Your Phone Number&nbsp&nbsp&nbsp&nbsp&nbsp</label>
				<input type="text"  name="phone"  class="form-control" id="phonefield" placeholder="  Enter phone number" />
		</div>	
		<div class="form-group">
			<label for="comment">Comment:</label>
			<textarea name="comment" class="form-control" rows="5" id="comment"></textarea>
		</div>
		<br/>		
		<input type="submit"  class="btn btn-primary"   name="submit" value="submit">
	
		<br>
	</div>
<?php
}
else
{
	

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$comment=$_POST['comment'];
require "connect.php";
$q="insert into contactUs (name,email,phone,comment)VALUES ('$name','$email','$phone','$comment')";
$result= $mysqli->query($q);
		if ($result=== false)
		{
			echo 'ERROR Cd nt execute SQL'.$mysqli->error;

		}
		else
		{
		echo "comment inserted";
		}
}
?>

</body>
<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>