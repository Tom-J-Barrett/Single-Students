<?php
require 'Connect.php';
session_start();
$username= ($_SESSION['username']);

$query="SELECT REGISTER.USERNAME FROM REGISTER ";
$whereClause=" where REGISTER.USERNAME<>'$username' ";

$c1=0;
$c2=0;
$c4=0;


$likes="JOIN LIKES ON REGISTER.USERNAME=LIKES.USERNAME ";
$personality="JOIN PERSONALITY ON REGISTER.USERNAME=PERSONALITY.USERNAME ";
$location="JOIN LOCATION ON REGISTER.USERNAME=LOCATION.USERNAME ";
$gender1="";
$age1="";
$hobby1="";
$trait1="";
$college1="";

if (isset($_POST['gender'])) {
	$gender1 = $_POST['gender'];
	$_SESSION['gender'] = $gender1;
} else {
	$gender1 = $_SESSION['gender'];
}

if (isset($_POST['age'])) {
	$age1 = $_POST['age'];
	$_SESSION['age'] = $age1;
} else {
	$age1 = $_SESSION['age'];
}

if (isset($_POST['hobby2'])) {
	$hobby1 = $_POST['hobby2'];
	$_SESSION['hobby2'] = $hobby1;
} else {
	$hobby1 = $_SESSION['hobby2'];
}

if (isset($_POST['trait1'])) {
	$trait1 = $_POST['trait1'];
	$_SESSION['trait1'] = $trait1;
} else {
	$trait1 = $_SESSION['trait1'];
}

if (isset($_POST['college'])) {
	$college1 = $_POST['college'];
	$_SESSION['college'] = $college1;
} else {
	$college1 = $_SESSION['college'];
}

	if(!($age1=="noValue")){
		$arr = explode ("-", $age1);
		$lower = date('Y-m-d', strtotime('today -18 years'));
		$upper = date('Y-m-d', strtotime('today -25 years'));
		$whereClause=$whereClause."and DOB <= '$lower' AND DOB > '$upper'";
	}
$query5="SELECT COLLEGENUMBER FROM COLLEGE WHERE COLLEGENAME = '$college1';";
			$result2=mysqli_query($db,$query5);
			$row2=mysqli_fetch_row($result2);
			$collegeNum=$row2[0];
$query6="SELECT LIKENUMBER FROM LIKEOPTIONS WHERE LIKENAME = '$hobby1';";
			$result6=mysqli_query($db,$query6);
			$row6=mysqli_fetch_row($result6);
			$likeNum=$row6[0];
$query7="SELECT PERSONALITYNUMBER FROM PERSONALITYOPTIONS WHERE PERSONALITYTRAIT = '$trait1';";
			$result7=mysqli_query($db,$query7);
			$row7=mysqli_fetch_row($result7);
			$traitNum=$row7[0];

if(!($gender1=="noValue"))
	$whereClause=$whereClause." and SEX='$gender1' ";
if(!($hobby1=="noValue"))
	$c1++;
if(!($trait1=="noValue"))
	$c2++;
if(!($college1=="noValue"))
	$c4++;
if($c1!=0)
{
	$query=$query.$likes;
}
if($c2!=0)
{
	$query=$query.$personality;
}
if($c4!=0)
{
	$query=$query.$location;
}
$query=$query.$whereClause;
if(!($hobby1=="noValue"))
	$query=$query."and (HOBBY='$likeNum' OR HOBBY2='$likeNum' OR HOBBY3='$likeNum' OR HOBBY4='$likeNum' OR HOBBY5='$likeNum') ";
if(!($trait1=="noValue"))
	$query=$query."and (TRAIT='$traitNum' OR TRAIT2='$traitNum' OR TRAIT3='$traitNum') ";
if(!($college1=="noValue"))
	$query=$query."and COLLEGE='$collegeNum' ";
			
$query=$query.";";

	$query_run1 = mysqli_query($db, $query);

	$matches = array();

	while($temp = mysqli_fetch_array($query_run1)){
		$matches[] = $temp[0];
	}
	//echo count($matches);

	$x = 0;
	$matchesInfo = array();
	while ($x < count($matches)) {
	$locationQuery = "Select COLLEGE from LOCATION where USERNAME = '$matches[$x]';";
	$location = mysqli_fetch_array(mysqli_query($db, $locationQuery));
	$collegeQuery = "Select COLLEGENAME from COLLEGE where COLLEGENUMBER = '$location[0]';";
	$college = mysqli_fetch_array(mysqli_query($db, $collegeQuery));
	$nameQuery = "Select FORENAME, SURNAME,DOB from REGISTER where USERNAME = '$matches[$x]';";
	$temp = mysqli_fetch_array(mysqli_query($db, $nameQuery));
	$name = $temp[0]." ".$temp[1];
	$Dob=$temp[2];
	$matchesInfo[] = array($name, $college[0], $Dob, $matches[$x]);
	$x++;
	}
	
	function age($dob)
	{
		if(!empty($dob))
		{
			$birthdate = new DateTime($dob);
			$today   = new DateTime('today');
			$age = $birthdate->diff($today)->y;
			return $age;
		}
		else
		{
			return 0;
		}
	}
	

mysqli_close($db);
?>
