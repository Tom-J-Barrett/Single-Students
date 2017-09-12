<?php
require 'Connect.php';
if(!isset($_SESSION))
{
	session_start();
}
$user = ($_SESSION['username']);

$query = "Select FORENAME,SURNAME,IMAGE,DOB,SEX,PREFERENCE from REGISTER where USERNAME='$user';";
$query_run = mysqli_query($db, $query);
$query_array = mysqli_fetch_array($query_run);
$forename = $query_array[0];
$surname = $query_array[1];
$image = $query_array[2];
$DOB = $query_array[3];
$sex = $query_array[4];
$preference = $query_array[5];

$query2 = "Select COLLEGE,CITY,COUNTY from LOCATION
where USERNAME='$user';";
$query2_run = mysqli_query($db, $query2);
$query2_array = mysqli_fetch_array($query2_run);
$college = $query2_array[0];
$city = $query2_array[1];
$county = $query2_array[2];

$queryCollege = "Select COLLEGENAME FROM COLLEGE WHERE COLLEGENUMBER='$college';";
$queryCollege_array = mysqli_fetch_array(mysqli_query($db, $queryCollege));
$collegeName = $queryCollege_array[0];

$queryCounty = "Select COUNTYNAME FROM COUNTY WHERE COUNTYNUMBER='$county';";
$queryCounty_array = mysqli_fetch_array(mysqli_query($db, $queryCounty));
$countyName = $queryCounty_array[0];


$query = "SELECT HOBBY, HOBBY2, HOBBY3, HOBBY4, HOBBY5 FROM LIKES WHERE USERNAME = '$user';";
$row = mysqli_fetch_array(mysqli_query($db, $query));
$hobbies = array($row[0], $row[1], $row[2], $row[3], $row[4]);


$query = "SELECT LIKENAME FROM LIKEOPTIONS WHERE LIKENUMBER = '$hobbies[0]';";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
$hobby1 = $row[0];

$query = "SELECT LIKENAME FROM LIKEOPTIONS WHERE LIKENUMBER = '$hobbies[1]';";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
$hobby2 = $row[0];

$query = "SELECT LIKENAME FROM LIKEOPTIONS WHERE LIKENUMBER = '$hobbies[2]';";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
$hobby3 = $row[0];

$query = "SELECT LIKENAME FROM LIKEOPTIONS WHERE LIKENUMBER = '$hobbies[3]';";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
$hobby4 = $row[0];

$query = "SELECT LIKENAME FROM LIKEOPTIONS WHERE LIKENUMBER = '$hobbies[4]';";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
$hobby5 = $row[0];

$query = "SELECT TRAIT, TRAIT2, TRAIT3 FROM PERSONALITY WHERE USERNAME = '$user';";
$row = mysqli_fetch_array(mysqli_query($db, $query));
$traits = array($row[0], $row[1], $row[2]);

$query = "SELECT PERSONALITYTRAIT FROM PERSONALITYOPTIONS WHERE PERSONALITYNUMBER = '$traits[0]';";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_row($result);
$trait1 = $row[0];

$query = "SELECT PERSONALITYTRAIT FROM PERSONALITYOPTIONS WHERE PERSONALITYNUMBER = '$traits[1]';";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_row($result);
$trait2 = $row[0];

$query = "SELECT PERSONALITYTRAIT FROM PERSONALITYOPTIONS WHERE PERSONALITYNUMBER = '$traits[2]';";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_row($result);
$trait3 = $row[0];

$query = "SELECT EYES, HAIR, HAIRLEN, BODY, HEIGHT, ETHNICITY FROM PHYSICAL WHERE USERNAME = '$user';";
$row = mysqli_fetch_array(mysqli_query($db, $query));
$physical = array($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);


$query = "SELECT EYECOLOR FROM EYECOLORS WHERE EYENUMBER = '$physical[0]';";
$query_run = mysqli_query($db, $query);
$row = mysqli_fetch_array($query_run);
$eye = $row[0];

$query = "SELECT HAIRCOLOR FROM HAIRCOLORS WHERE HAIRNUMBER = '$physical[1]';";
$query_run = mysqli_query($db, $query);
$row = mysqli_fetch_array($query_run);
$hair = $row[0];

$query = "SELECT HAIRLENNAME FROM HAIRLENGTHS WHERE HAIRLENNUMBER = '$physical[2]';";
$query_run = mysqli_query($db, $query);
$row = mysqli_fetch_array($query_run);
$hairlen = $row[0];

$query = "SELECT BODYNAME FROM BODYTYPE WHERE BODYNUMBER = '$physical[3]';";
$query_run = mysqli_query($db, $query);
$row = mysqli_fetch_array($query_run);
$body = $row[0];

$height = $physical[4];

$query = "SELECT TONE FROM SKINTONES WHERE TONENUMBER = '$physical[5]';";
$query_run = mysqli_query($db, $query);
$row = mysqli_fetch_array($query_run);
$skin = $row[0];

$query = "SELECT INFO FROM BIO WHERE USERNAME = '$user';";
$row = mysqli_fetch_array(mysqli_query($db, $query));
$bio = $row[0];