<?php
session_start();
if ($mysqli= new mysqli("localhost","root","","cakes"))
		{
			//echo 'connection established <br/>';
			//echo "\n";
		}
		else
			die ('connection failed<br/>');
?>