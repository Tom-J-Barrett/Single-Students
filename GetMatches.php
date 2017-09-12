<?php
require 'Connect.php';
if(!isset($_SESSION)) {
    session_start();
}
$username= ($_SESSION['username']);
$query1 = "Select USERNAME, USER, LEVEL from REQUESTS where USERNAME='$username' and LEVEL = 'match';";
$query2 = "Select USERNAME, USER, LEVEL from REQUESTS where USER='$username' and LEVEL = 'match';";
$query_run1 = mysqli_query($db, $query1);
$query_run2 = mysqli_query($db, $query2);

$matches = array();

while($temp = mysqli_fetch_array($query_run1)){
        $matches[] = $temp[1];
}

while($temp = mysqli_fetch_array($query_run2)){
        $matches[] =  $temp[0];
}

$x = 0;
$matchesInfo = array();
while ($x < count($matches)) {
    $locationQuery = "Select CITY, COLLEGE from LOCATION where USERNAME = '$matches[$x]';";
    $location = mysqli_fetch_array(mysqli_query($db, $locationQuery));
    $collegeQuery = "Select COLLEGENAME from COLLEGE where COLLEGENUMBER = '$location[1]';";
    $college = mysqli_fetch_array(mysqli_query($db, $collegeQuery));
    $nameQuery = "Select FORENAME, SURNAME,EMAIL from REGISTER where USERNAME = '$matches[$x]';";
    $temp = mysqli_fetch_array(mysqli_query($db, $nameQuery));
    $name = $temp[0]." ".$temp[1];
	$email=$temp[2];
    $matchesInfo[] = array($name, $location[0], $college[0],$matches[$x],$email);
    $x++;
}

mysqli_close($db);
