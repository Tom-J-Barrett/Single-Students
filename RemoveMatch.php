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
	$query3 = "DELETE FROM REQUESTS WHERE (USERNAME='$user' and USER='$username' and LEVEL='match') OR
	(USERNAME='$username' and USER='$user' and LEVEL='match');";
	$query3_run = mysqli_query($db, $query3);

	header("Location: Matches.php?mPage=default");
?>