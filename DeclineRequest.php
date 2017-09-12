<?php
include 'LoginCheck.php';
checkUser();
ini_set('display_errors',1);
	require 'Connect.php';
	$_SESSION['otherUsername'] = $_GET["user"];
	if(!isset($_SESSION))
	{
		session_start();
	}
	$user = $_SESSION['otherUsername'];
	$username = $_SESSION['username'];
	$query3 = "DELETE FROM REQUESTS WHERE USERNAME='$user' and USER='$username';";
	$query3_run = mysqli_query($db, $query3);

	header("Location: Requests.php?rPage=default");
?>
