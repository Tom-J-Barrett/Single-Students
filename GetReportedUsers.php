<?php
require 'Connect.php';
if(!isset($_SESSION)) {
    session_start();
}
$queryUser = "Select USERNAME from REPORTED;";
$query_run = mysqli_query($db, $queryUser);
$users = array();

while($temp = mysqli_fetch_array($query_run)){
    $users[] = $temp[0];
}

$x = 0;
$userInfo = array();

while ($x < count($users)) {
    $locationQuery = "Select CITY, COLLEGE from LOCATION where USERNAME = '$users[$x]';";
    $location = mysqli_fetch_array(mysqli_query($db, $locationQuery));
    $collegeQuery = "Select COLLEGENAME from COLLEGE where COLLEGENUMBER = '$location[1]';";
    $college = mysqli_fetch_array(mysqli_query($db, $collegeQuery));
    $nameQuery = "Select FORENAME, SURNAME from REGISTER where USERNAME = '$users[$x]';";
    $temp = mysqli_fetch_array(mysqli_query($db, $nameQuery));
    $name = $temp[0]." ".$temp[1];
    $userInfo[] = array($name, $location[0], $college[0],$users[$x]);
    $x++;
}

mysqli_close($db);