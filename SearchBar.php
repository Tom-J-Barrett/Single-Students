<?php
require 'Connect.php';
if(!isset($_SESSION)) {
    session_start();
}
$username = $_POST['name'];
if(isset($username))
{
	$queryUser = ("Select USERNAME from REGISTER WHERE USERNAME='$username';");
	$query_run = mysqli_query($db, $queryUser);
	$users = array();
	$query_num_rows = mysqli_num_rows($query_run);
	while($temp = mysqli_fetch_array($query_run)){
		$users[] = $temp[0];
	}
	echo $query_num_rows;
	if((!empty($username)) && ($query_num_rows==1))
		header("Location: UserProfileOther.php?user=".$users[0]);
	else
		header("Location: AdminPage.php");
}
mysqli_close($db);
?>
