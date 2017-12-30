<?php
session_start();
$email=$_SESSION['email'];

require "connect.php";
extract ($_POST);

//if(!isset($_GET['con']) &&  isset($_GET['id']))
//{
//
	//<script>
	//location.href="index.php?con=404"
	//</script>

//}

//$page=$_GET['con'];
$id=$_GET['id'];
$qty=$_GET['kg'];

//print_r($_GET);

//echo $qty;
//if($page!="addcart" || $id=="")
//{

	//<script>
	//location.href="index.php?con=404"
	//</script>
	
//}
//
//select record from gallery. Get image_name, title, price etc from record

$q="select * from gallery where id='$id'" ;

$email=$_SESSION['email'];
if ($res=mysqli_query($mysqli,$q))
{
				$r=mysqli_fetch_assoc($res);
				//print_r($r);
				$img =  $r['image'] ;
				$title=  $r['title'];
				$price=  $r['price'];
				
				$qry="insert into shopcart (image,email,title,price,qty,id,created_at) values ('$img','$email','$title','$price','$qty','','')";
					
				//echo $qry;
		 		
				$result = mysqli_query($mysqli,$qry);

				if (!$result)
					echo 'item not added'."Error: " . $sql . "<br>" . $mysqli->error;
				else
				{	?>
					<script>
						alert("item added to cart");
						
					</script>
					<?php
					//$badge=$_SESSION['badgenum'];
					//$badge+=1;
					//$_SESSION['badgenum']= $badge;
					$_SESSION['navbar']= 1;
					require "catalogue.php";
				}
}
else
{
	echo 'some problem';
}

?>