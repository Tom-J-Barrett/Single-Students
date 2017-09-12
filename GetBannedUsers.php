<?php
require 'Connect.php';
if(!isset($_SESSION)) {
    session_start();
}
$queryUser = ("Select USERNAME from BANNED");
$query_run = mysqli_query($db, $queryUser);
$users = array();

while($temp = mysqli_fetch_array($query_run)){
    $users[] = $temp[0];
}

mysqli_close($db);