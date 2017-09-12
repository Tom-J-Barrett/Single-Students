<?php
ini_set('display_errors',1);

require 'Connect.php';
if(!isset($_SESSION))
{
	session_start();
}

$user = $_SESSION['otherUsername'];
$username = $_SESSION['username'];

$query2= "Select USERNAME from REQUESTS
where USERNAME='$username' and USER='$user' and LEVEL='request';";
$query2_run = mysqli_query($db, $query2);
$query2_array = mysqli_fetch_array($query2_run);
$username2=$query2_array[0];

$query3= "Select USERNAME from REQUESTS
where USERNAME='$username' and USER='$user' and LEVEL='match';";
$query3_run = mysqli_query($db, $query3);
$query3_array = mysqli_fetch_array($query3_run);
$username3=$query3_array[0];

if((!(isset($username2))) || (!(isset($username3))))
{
	$query2= "INSERT INTO requests
		  (username, user, level)
		  VALUES
		  ('$username', '$user', 'request');";
	$query2_run = mysqli_query($db, $query2);
}
header('Location: UserProfileOther.php?user='.$user);
mysqli_close($db);
