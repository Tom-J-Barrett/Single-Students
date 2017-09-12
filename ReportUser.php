<?php
ini_set('display_errors',1);
	require 'Connect.php';
	if(!isset($_SESSION))
	{
		session_start();
	}

	$username = $_SESSION['otherUsername'];
	
	$query2= "Select USERNAME from REPORTED
	where USERNAME='$username'";
	$query2_run = mysqli_query($db, $query2);
	$query2_array = mysqli_fetch_array($query2_run);
	$username2=$query2_array[0];
	if(!(isset($username2)))
	{
		$query = "INSERT INTO REPORTED VALUES ('$username');";
		$query_run = mysqli_query($db, $query);
	}
	header("Location: UserProfileOther.php?user="+$username);
?>