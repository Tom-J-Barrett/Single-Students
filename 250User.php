<?php
ini_set('display_errors',1);
require 'Connect.php';
$x=1;
$forename = "John";
$password = "password";
$password = password_hash($password, PASSWORD_DEFAULT);
$email = "example@email.com";
$DOB = "1997-04-26";
$preference = "Female";
$sex = "Male";
$image = "testImage";
$nameCard = "John Smith";
$cardMonth = "8";
$number = "1234567890987654";
$cvv = "789";
$type = "visa";
$cardYear = "2020";
$collegeNum = 1;
$city = "Ireland";
$countyNum = 1;
$eye = 1;
$hair = 1;
$hairlen = 1;
$body = 1;
$height = 150;
$skin = 1;
$bio = "some text";
$pNum1 = 1;
$pNum2 = 2;
$pNum3 = 3;
$hobby_1 = 1;
$hobby_2 = 2;
$hobby_3 = 3;
$hobby_4 = 4;
$hobby_5 = 5;
while($x<250)
{
	$username = "User".$x;
	$surname = "Smith".$x;
	if($x>175) 
		$DOB = "1989-01-11";
	
	if($countyNum>32) 
		$countyNum = 1;
	
	if($collegeNum>10) 
		$collegeNum = 1;
	
	if($eye>6) 
		$eye = 1;
	
	if($hair>11) 
		$hair = 1;
	
	if($hairlen>3) 
		$hairlen = 1;
	
	if($body>8) 
		$body = 1;
	
	if($height>200) 
		$height = 150;
	
	if($skin>4) 
		$skin = 1;
	
	if($hobby_1>43) 
		$hobby_1 = 1;
	
	if($hobby_2>43) 
		$hobby_2 = 1;
	
	if($hobby_3>43) 
		$hobby_3 = 1;
	
	if($hobby_4>43) 
		$hobby_4 = 1;
	
	if($hobby_5>43) 
		$hobby_5 = 1;
	
	if($pNum1>24) 
		$pNum1 = 1;
	
	if($pNum2>24) 
		$pNum2 = 1;
	
	if($pNum3>24) 
		$pNum3 = 1;
	
	$query1 = "REPLACE INTO REGISTER VALUES ('$username','$forename','$surname','$password','$email','$DOB','$preference','$sex','$image');";

	$query2 = "REPLACE INTO CARD VALUES ('$username','$nameCard','$cardMonth','$number','$cvv','$type','$cardYear');";

	$query3 = "REPLACE INTO LOCATION VALUES ('$username','$collegeNum','$city','$countyNum');";

	$query4 = "REPLACE INTO PHYSICAL VALUES ('$username', '$eye', '$hair', '$hairlen', '$body', '$height', '$skin');";

	$query5 = "REPLACE INTO BIO VALUES ('$username','$bio');";

	$query6 = "REPLACE INTO PERSONALITY VALUES('$username', '$pNum1', '$pNum2', '$pNum3');";

	$query7 = "REPLACE INTO LIKES VALUES ('$username', '$hobby_1', '$hobby_2', '$hobby_3', '$hobby_4', '$hobby_5');";


	mysqli_query($db, $query1) or die(mysqli_error($db));
	mysqli_query($db, $query2) or die(mysqli_error($db));
	mysqli_query($db, $query3) or die(mysqli_error($db));
	mysqli_query($db, $query4) or die(mysqli_error($db));
	mysqli_query($db, $query5) or die(mysqli_error($db));
	mysqli_query($db, $query6) or die(mysqli_error($db));
	mysqli_query($db, $query7) or die(mysqli_error($db));
	$x = $x+1;
	$collegeNum = $collegeNum + 1;
	$countyNum = $countyNum + 1;
	$eye = $eye + 1;
	$hair = $hair + 1;
	$hairlen = $hairlen + 1;
	$body = $body + 1;
	$height = $height + 1;
	$skin = $skin + 1;
	$pNum1 = $pNum1 + 1;
	$pNum2 = $pNum2 + 2;
	$pNum3 = $pNum3 + 3;
	$hobby_1 = $hobby_1 + 1;
	$hobby_2 = $hobby_2 + 2;
	$hobby_3 = $hobby_3 + 3;
	$hobby_4 = $hobby_4 + 4;
	$hobby_5 = $hobby_5 + 5;
}
mysqli_close($db);
?>