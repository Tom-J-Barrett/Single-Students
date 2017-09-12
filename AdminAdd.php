<?php
ini_set('display_errors',1);
	require 'Connect.php';
	if(!isset($_SESSION))
	{
		session_start();
	}

	$admin = ($_POST['admin']);
	$password= ($_POST['password']);
	$password=password_hash($password, PASSWORD_DEFAULT);
	$query2= "Select USERNAME from ADMIN
	where USERNAME='$admin'";
	$query2_run = mysqli_query($db, $query2);
	$query2_array = mysqli_fetch_array($query2_run);
	$admin2=$query2_array[0];
	if(!(isset($admin2)))
	{
		$query = "INSERT INTO ADMIN VALUES ('$admin','$password');";
		$query_run = mysqli_query($db, $query);
	}
	else
	{
		$query = "REPLACE INTO BANNED VALUES ('$admin','$password');";
		$query_run = mysqli_query($db, $query);
	}
	header("Location: AddAdmin.php");
?>
