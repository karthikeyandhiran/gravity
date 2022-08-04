<?php
$hostname="localhost";
  $username="root";
  $password="";
  $dbname="gbw";
  $con = mysqli_connect($hostname, $username, $password, $dbname);
  if($con)
  {
  	echo "yes";
  }
$date=$_POST["dat"];
$query = "DELETE  FROM `demo` where odate='$date'";
$dem=mysqli_query($con, $query);
if($dem)
{
	echo "query completed";
}
header("Location: ad.php");
?>