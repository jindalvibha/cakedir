<?php
require "connect.php";
session_start();

$email=$_SESSION['email'];
$q="select * from shopcart where user='$email'";

$result=$mysqli->$q;
if (!$result)
	echo 'something wrong';
else
{
	$r=0;
	while ($row=mysqli_fetch_assoc($result);)
	{
		$r=$r+$row['qty'];
		$_SESSION['badgenum']=$r;
	}
}
?>