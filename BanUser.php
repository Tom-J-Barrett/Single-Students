<?php
ini_set('display_errors',1);
	require 'Connect.php';
	if(!isset($_SESSION))
	{
		session_start();
	}

	$username = $_SESSION['otherUsername'];
	
	$query2= "Select EMAIL from REGISTER
	where USERNAME='$username'";
	$query2_run = mysqli_query($db, $query2);
	$query2_array = mysqli_fetch_array($query2_run);
	$email=$query2_array[0];
	if(!(isset($email)))
	{
		$query3 = "DELETE FROM BANNED WHERE USERNAME='$username';";
		$query3_run = mysqli_query($db, $query3);
	}
	else
	{
		$query = "INSERT INTO BANNED VALUES ('$username','$email');";
		$query_run = mysqli_query($db, $query);
	}
	header("Location: UserProfileOther.php?user=".$username);
?>
