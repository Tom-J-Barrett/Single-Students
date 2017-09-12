<?php
require 'Connect.php';
if(!isset($_SESSION)) {
    session_start();
}
$username= ($_SESSION['username']);
$query1 = "Select USERNAME, USER, LEVEL from REQUESTS where USERNAME='$username' and LEVEL = 'request'";
$query2 = "Select USERNAME, USER, LEVEL from REQUESTS where USER='$username' and LEVEL = 'request'";
$query_run1 = mysqli_query($db, $query1);
$query_run2 = mysqli_query($db, $query2);

$requests = array();

/*while($temp = mysqli_fetch_array($query_run1)){
    $requests[] = $temp[1];
}*/

while($temp = mysqli_fetch_array($query_run2)){
    $requests[] =  $temp[0];
}

$x = 0;
$requestsInfo = array();
while ($x < count($requests)) {
    $locationQuery = "Select CITY, COLLEGE from LOCATION where USERNAME = '$requests[$x]';";
    $location = mysqli_fetch_array(mysqli_query($db, $locationQuery));
    $collegeQuery = "Select COLLEGENAME from COLLEGE where COLLEGENUMBER = '$location[1]';";
    $college = mysqli_fetch_array(mysqli_query($db, $collegeQuery));
    $nameQuery = "Select FORENAME, SURNAME from REGISTER where USERNAME = '$requests[$x]';";
    $temp = mysqli_fetch_array(mysqli_query($db, $nameQuery));
    $name = $temp[0]." ".$temp[1];
    $requestsInfo[] = array($name, $location[0], $college[0],$requests[$x]);
    $x++;
}

mysqli_close($db);