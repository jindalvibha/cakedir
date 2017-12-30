<?php
session_start();


require "connect.php";
$id=$_GET['id'];

$q="delete from shopcart where id='$id'";

$result=$mysqli->query($q);

if ($result)
{
	echo 'deleted';
	require "Kart.php";
}
else
	echo 'some problem';

?>