<?php
$hostname="localhost";
  $username="root";
  $password="";
  $dbname="gbw";
  $con = mysqli_connect($hostname, $username, $password, $dbname);
  if($con)
  {
  	$emai=$_POST['mail'];
  	$pass=$_POST['pass'];
  	$qry = "select * from verify limit 1";
	$rs = mysqli_query($con,$qry);
	$getRowAssoc = mysqli_fetch_assoc($rs);
	if($getRowAssoc['mail']==$emai && $getRowAssoc['pass']==$pass)
	{
		header('Location:ad.php');
	}
	else
	{
		echo "invalid password";
	}
  }

  
  ?>