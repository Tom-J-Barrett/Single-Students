<?php
require 'Connect.php';
if(!isset($_SESSION)) {
    session_start();
}
$username = $_POST['username'];
$forename = $_POST['forename'];
$surname= $_POST['surname'];
$email = $_POST['email'];
if(isset($username))
{
	echo "yes";
	$queryUser = ("Select USERNAME from REGISTER WHERE USERNAME='$username';");
	$query_run = mysqli_query($db, $queryUser);
	$users = array();

	while($temp = mysqli_fetch_array($query_run)){
		$users[] = $temp[0];
	}
	header("Location: UserProfileOther.php?user=".$users[0]);
}
mysqli_close($db);
?>