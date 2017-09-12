<?php
ini_set('display_errors',1);
	require 'Connect.php';
	if(!isset($_SESSION))
	{
		session_start();
	}

	$username = $_SESSION['otherUsername'];
	$query = "DELETE FROM REGISTER WHERE USERNAME='$username';";
	$query_run = mysqli_query($db, $query);
	$query2 = "DELETE FROM REQUESTS WHERE USERNAME='$username' OR USER='$username';";
	$query2_run = mysqli_query($db, $query2);
	header("Location: AdminPage.php?");
?>
