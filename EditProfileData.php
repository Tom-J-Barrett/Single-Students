<?php
require 'Connect.php';
if(!isset($_SESSION))
{
	session_start();
}
$user = ($_SESSION['username']);

$query = "SELECT FORENAME,SURNAME,IMAGE,PREFERENCE FROM REGISTER WHERE USERNAME='$user';";
$query_run = mysqli_query($db, $query);
$query_array = mysqli_fetch_array($query_run);
$forename = $query_array[0];
$surname = $query_array[1];
$image = $query_array[2];
$preference = $query_array[3];

$query2 = "SELECT COLLEGE,CITY,COUNTY FROM LOCATION
WHERE USERNAME='$user';";
$query2_run = mysqli_query($db, $query2);
$query2_array = mysqli_fetch_array($query2_run);
$college = $query2_array[0]; //Number
$city = $query2_array[1];
$county = $query2_array[2]; //Number

$query = "SELECT HOBBY, HOBBY2, HOBBY3, HOBBY4, HOBBY5 FROM LIKES WHERE USERNAME = '$user';";
$row = mysqli_fetch_array(mysqli_query($db, $query));
$hobbies = array($row[0], $row[1], $row[2], $row[3], $row[4]);

$query = "SELECT TRAIT, TRAIT2, TRAIT3 FROM PERSONALITY WHERE USERNAME = '$user';";
$row = mysqli_fetch_array(mysqli_query($db, $query));
$traits = array($row[0], $row[1], $row[2]);

$query = "SELECT EYES, HAIR, HAIRLEN, BODY, HEIGHT, ETHNICITY FROM PHYSICAL WHERE USERNAME = '$user';";
$row = mysqli_fetch_array(mysqli_query($db, $query));
$physical = array($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
//The Physical array is numbers for
//eyes, hair, hairlen, body, height, [ethnicity or skintone]



$query = "SELECT INFO FROM BIO WHERE USERNAME = '$user';";
$row = mysqli_fetch_array(mysqli_query($db, $query));
$bio = $row[0];
