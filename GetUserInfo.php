<?php
	ini_set('display_errors',1);

	//$server= "localhost";
	$server= "193.1.101.7:3307";
	$user="group19";
	$password="cBlAP4s1a";
	$dbname="group19DB";
	
	$db = mysqli_connect($server,$user,$password, $dbname) or die("Unable to connect");
	
	$sql1= "Select NAME,DOB,SEX,PREFERENCE,IMAGE from REGISTER
	where USERNAME=$username";
	$result= mysqli_query($db, $sql1) or die('Error SQL !<br>'.$sql1.'<br>'.mysqli_connect_error());
    $row = mysqli_fetch_assoc($result);
	$name=$row['USERNAME'];
	$DOB=$row['DOB'];
	$sex=$row['SEX'];
	$preference=$row['PREFERENCE'];
	$image=$row['IMAGE'];
	
	$sql1= "Select INFO from BIO
	where USERNAME=$username";
	$result= mysqli_query($db, $sql1) or die('Error SQL !<br>'.$sql1.'<br>'.mysqli_connect_error());
    $row = mysqli_fetch_assoc($result);
	$bio=$row['INFO'];
	
	$sql2= "Select COLLEGE,CITY,COUNTY from LOCATION
	where USERNAME=$username";
	$result= mysqli_query($db, $sql2) or die('Error SQL !<br>'.$sql2.'<br>'.mysqli_connect_error());
    $row = mysqli_fetch_assoc($result);
        $college=$row['COLLEGE'];
        $city=$row['CITY'];
        $county=$row['COUNTY'];
		
	$sql3= "Select HOBBIE from LIKES
	where USERNAME=$username";
	$result= mysqli_query($db, $sql3) or die('Error SQL !<br>'.$sql3.'<br>'.mysqli_connect_error());
    $row = mysqli_fetch_assoc($result);
	$num_rows = mysql_num_rows($result);
	$array=[];
	while($row = mysqli_fetch_assoc($result)) {
		$array[]=$row['HOBBIE'];
	}
	
	$sql4= "Select TRAIT from PERSONALITY
	where USERNAME=$username";
	$result= mysqli_query($db, $sql4) or die('Error SQL !<br>'.$sql4.'<br>'.mysqli_connect_error());
    $row = mysqli_fetch_assoc($result);
	$num_rows = mysql_num_rows($result);
	$array2=[];
	while($row = mysqli_fetch_assoc($result)) {
		$array2[]=$row['TRAIT'];
	}
		
	$sql5= "Select HAIR,HAIRLEN,BODYTYPE,HEIGHT,ETHNICITY,EYES from PHYSICAL
	where USERNAME=$username";
	$result= mysqli_query($db, $sql5) or die('Error SQL !<br>'.$sql5.'<br>'.mysqli_connect_error());
    $row = mysqli_fetch_assoc($result);
	$hair=$row['HAIR'];
	$hairlrn=$row['HAIRLEN'];
	$bodytype=$row['BODYTYPE'];
	$height=$row['HEIGHT'];
	$ethnicity=$row['ETHNICITY'];
	$eyes=$row['EYES'];
	
	mysqli_close($db);
	
?>