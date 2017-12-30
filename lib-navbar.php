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
session_start();

$con=$_SESSION['con'];
$user=$_SESSION['username'];
$badge=$_SESSION['badgenum'];
//echo "badge".$badge;

//IF USER'S NAME IS TO BE SHOWN
if ($con==1)
{
?>

<div style="padding-left:1100px; padding-top:30px;font-size:16pt;">
	Hello, <?php echo $user ;?>
</div>
<?php
}


//DISPLY NNVBAR
?>			    
	<div class="navbar navbar-default">
		<div class="container">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a style="font-size:26pt; color:red; " class="navbar-brand href="#">Cakepoint</a>
			</div>
			<div class="collapse navbar-collapse" id="mynavbar-content">
				<ul class="nav navbar-nav">
					<!--<li> <a style="font-size:14pt" href="#">&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>-->
					<li> <a style="font-size:14pt" href="carousel-cakes.php"><span class="glyphicon glyphicon-home"></span> Home&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
					<li> <a style="font-size:14pt;" font-family:"Arial, Helvetica, sans-serif" href="aboutfile.html"><span class="glyphicon glyphicon-asterisk">About Us&nbsp&nbsp&nbsp&nbsp</a></li>
					
					<li> <a style="font-size:14pt" href="contactfile.html"><span class="glyphicon glyphicon-envelope">Contact&nbsp&nbsp&nbsp</a></li>
					<li> <a style="font-size:14pt" href="#"><span class="glyphicon glyphicon-comment">Feedback&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
					
					
					
					
					<li> <a style="font-size:14pt" href="Kart.php"><span class="glyphicon glyphicon-shopping-cart" ></span></a></li>
					
				</ul>
				
			</div>
		</div>
	</div>


</body>
<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>

