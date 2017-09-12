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
	$query3 = "DELETE FROM REPORTED WHERE USERNAME='$user';";
	$query3_run = mysqli_query($db, $query3);

	header("Location: Reported.php?rPage=default");
?>