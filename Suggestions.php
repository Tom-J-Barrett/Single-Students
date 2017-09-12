<?php
	require 'Connect.php';
	if(!isset($_SESSION))
	{
		session_start();
	}
	$username= ($_SESSION['username']);
	$query= "Select FORENAME,DOB,SEX,PREFERENCE,COLLEGE from REGISTER JOIN LOCATION
	ON REGISTER.USERNAME=LOCATION.USERNAME where REGISTER.USERNAME='$username'";
	$query_run = mysqli_query($db, $query);
	$query_array = mysqli_fetch_array($query_run);
	$name=$query_array[0];
	$DOB=$query_array[1];
	$sex=$query_array[2];
	$preference=$query_array[3]; 
	$college=$query_array[4]; 
		
	$query2= "Select COLLEGE from LOCATION
	where USERNAME='$username'";
	$query2_run = mysqli_query($db, $query2);
	$query2_array = mysqli_fetch_array($query2_run);
	$college=$query2_array[0];
	
	$query3=  "Select REGISTER.USERNAME from REGISTER JOIN LOCATION ON REGISTER.USERNAME=LOCATION.USERNAME
		where REGISTER.USERNAME!='$username' and SEX='$preference' and PREFERENCE='$sex' and college='$college'
		ORDER BY rand() LIMIT 5;";
	$query_run1 = mysqli_query($db, $query3);

	$matches = array();

	while($temp = mysqli_fetch_array($query_run1)){
		$matches[] = $temp[0];
	}

	$x = 0;
	$matchesInfo = array();
	while ($x < count($matches)) {
		$locationQuery = "Select CITY, COLLEGE from LOCATION where USERNAME = '$matches[$x]';";
		$location = mysqli_fetch_array(mysqli_query($db, $locationQuery));
		$collegeQuery = "Select COLLEGENAME from COLLEGE where COLLEGENUMBER = '$location[1]';";
		$college = mysqli_fetch_array(mysqli_query($db, $collegeQuery));
		$nameQuery = "Select FORENAME, SURNAME,DOB from REGISTER where USERNAME = '$matches[$x]';";
		$temp = mysqli_fetch_array(mysqli_query($db, $nameQuery));
		$name = $temp[0]." ".$temp[1];
		$Dob=$temp[2];
		$matchesInfo[] = array($name, $location[0], $college[0], $Dob, $matches[$x]);
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
	//header("Location: UserProfile.php");
?>
