<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
		<title>page components </title>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="../ducatt/BOOTSTRAP-3PM/css/bootstrap.css">

	
</head>
<body>

<?php
    
	session_start();
	//session_unset(); 
	if (!isset($_SESSION['con']))
		{
			$_SESSION['con']=0;
		}
	
	$con=$_SESSION['con'];

	$user=$_SESSION['username'];
	$_SESSION['register']=1;
	$_SESSION['cart-glyphicon']=1;
	if (!isset($_SESSION['badgenum']))
		{
			$_SESSION['badgenum']=0;
		}
	$badge=$_SESSION['badgenum'];
	
if ($con==1)
{
?>

<div style="padding-left:1100px; padding-top:30px;font-size:14pt;">
	Hello, <?php echo $user ;?>
</div>
<?php
}
?>
<div class="navbar navbar-default">
		<div class="container">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a  style="font-size:24pt; color:red" class="navbar-brand href="#">  Cakepoint&nbsp&nbsp&nbsp</a>
			</div>
			<div class="collapse navbar-collapse" id="mynavbar-content">
				<ul class="nav navbar-nav">
					<li> <a style="font-size:14pt; color:navy-blue;" href="carousel-cakes.php"><span class="glyphicon glyphicon-home"></span> Home&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </a></li>
					<li> <a style="font-size:14pt;font-family: Arial, Helvetica, sans-serif;"" href="aboutfile.html"><span class="glyphicon glyphicon-asterisk"></span> About Us&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
					
					<li> <a style="font-size:14pt;font-family: Arial, Helvetica, sans-serif;"" href="#contactus"><span class="glyphicon glyphicon-envelope"></span> Contact &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </a></li>
					<li> <a style="font-size:14pt;font-family: Arial, Helvetica, sans-serif;"" href="#freedeliver"><span class="glyphicon glyphicon-comment"></span> Freedel&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </a></li>
					<li> <a style="font-size:14pt;font-family: Arial, Helvetica, sans-serif;"" href="login-bootstrap.php"><span class="glyphicon glyphicon-user"></span> Account&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
					<li> <a style="font-size:14pt;" href="#"><span class="glyphicon glyphicon-shopping-cart" ></span> </a></li>

				</ul>
			</div>
		</div>
	</div>
</div>
	
<div  style="padding-left:50px;padding-top:20px" id="bestCakesCarousel" class="carousel slide" data-ride="carousel">

		<ol class="carousel-indicators">
			<li data-target="#bestCakesCarousel" data-slide-to="0" class="active"> </li>
			<li data-target="#bestCakesCarousel" data-slide-to="1"> </li>
			<li data-target="#bestCakesCarousel" data-slide-to="2"> </li>
		</ol>
	
	<!--wrapper for slides-->
	<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="slide1.jpg">
			</div>
			<div class="item">
				<img src="slide3.jpg">
			</div>
			<div class="item">
				<img src="slide2.jpg">
			</div>
	</div>
	
</div>
				<!--<a href="##bestCakesCarousel" class="carousel-control left" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>

				<a href="##bestCakesCarousel" class="carousel-control right" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>-->
				</a>
<a name="freedeliver"></a>
<img src="freedelivery.jpg" style="padding-left:300px">
<?php
$_SESSION['con']=0;
$_SESSION['navbar']=0;
$_SESSION['register']=1;
require "catalogue.php";
?>
<a name="contactus"></a>
<?php
require "contact.php";
?>
</body>
<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script src="../ducatt/BOOTSTRAP-3PM/js/jQuery.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../ducatt/BOOTSTRAP-3PM/js/bootstrap.js"></script>

</html>
		
		
	<!--Controls
		
	<a style="padding-left:500px" class="left carousel-control" href="#bestBooksControl" role="button" data-slide="prev">
			<span   class="glyphicon glyphicon-chevron-left" aria-hidden="true"> </span>
			<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#bestBooksControl" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"> </span>
			<span class="sr-only">Next</span>
    -->
