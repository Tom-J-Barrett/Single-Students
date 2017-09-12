<?php
ini_set('display_errors',1);
	require 'Connect.php';
	if(!isset($_SESSION))
	{
		session_start();
	}

	$username = $_SESSION['otherUsername'];
if(isset($_POST['forename']) && isset($_POST['surname']) && isset($_POST['password']) && isset($_POST['password2'])) {
	$forename = htmlspecialchars(trim($_POST['forename']));
	$surname = htmlspecialchars(trim($_POST['surname']));
	$password = htmlspecialchars(trim($_POST['password']));
	$password2 = htmlspecialchars(trim($_POST['password2']));
	$preference = $_POST['preference'];

	if ($password == $password2) {
		$password = password_hash($password,PASSWORD_DEFAULT);
		$query = "UPDATE REGISTER SET FORENAME='$forename' ,SURNAME='$surname' ,PASSWORD='$password',
				  PREFERENCE='$preference' where USERNAME='$username';";
		$query_run = mysqli_query($db, $query);

		if (isset($_POST['hobby1']) && isset($_POST['hobby2']) && isset($_POST['hobby3']) && isset($_POST['hobby4']) && isset($_POST['hobby5'])) {
			$hobby1 = $_POST['hobby1'];
			$hobby2 = $_POST['hobby2'];
			$hobby3 = $_POST['hobby3'];
			$hobby4 = $_POST['hobby4'];
			$hobby5 = $_POST['hobby5'];
			$query = "SELECT LIKENUMBER FROM LIKEOPTIONS WHERE LIKENAME = '$hobby1';";
			$result = mysqli_query($db, $query);
			$row = mysqli_fetch_array($result);
			$hobby_1 = $row[0];

			$query = "SELECT LIKENUMBER FROM LIKEOPTIONS WHERE LIKENAME = '$hobby2';";
			$result = mysqli_query($db, $query);
			$row = mysqli_fetch_array($result);
			$hobby_2 = $row[0];

			$query = "SELECT LIKENUMBER FROM LIKEOPTIONS WHERE LIKENAME = '$hobby3';";
			$result = mysqli_query($db, $query);
			$row = mysqli_fetch_array($result);
			$hobby_3 = $row[0];

			$query = "SELECT LIKENUMBER FROM LIKEOPTIONS WHERE LIKENAME = '$hobby4';";
			$result = mysqli_query($db, $query);
			$row = mysqli_fetch_array($result);
			$hobby_4 = $row[0];

			$query = "SELECT LIKENUMBER FROM LIKEOPTIONS WHERE LIKENAME = '$hobby5';";
			$result = mysqli_query($db, $query);
			$row = mysqli_fetch_array($result);
			$hobby_5 = $row[0];
			$query = "REPLACE INTO LIKES VALUES ('$username', '$hobby_1', '$hobby_2', '$hobby_3', '$hobby_4', '$hobby_5');";
			$query_run = mysqli_query($db, $query);
		}

		if (isset($_POST['county']) && isset($_POST['college']) && isset($_POST['city'])) {
			$county = $_POST['county'];
			$college = $_POST['college'];
			$city = htmlspecialchars(trim($_POST['city']));

			$query = "SELECT COUNTYNUMBER FROM COUNTY WHERE COUNTYNAME = '$county';";
			$result = mysqli_query($db, $query);
			$row = mysqli_fetch_row($result);
			$countyNum = $row[0];

			$query = "SELECT COLLEGENUMBER FROM COLLEGE WHERE COLLEGENAME = '$college';";
			$result = mysqli_query($db, $query);
			$row = mysqli_fetch_row($result);
			$collegeNum = $row[0];

			$query = "REPLACE INTO LOCATION VALUES ('$username', '$collegeNum', '$city','$countyNum');";
			$query_run = mysqli_query($db, $query);
		}

		if (isset($_POST['trait1']) && isset($_POST['trait2']) && isset($_POST['trait3'])) {
			$trait1 = $_POST['trait1'];
			$trait2 = $_POST['trait2'];
			$trait3 = $_POST['trait3'];

			$query = "SELECT PERSONALITYNUMBER FROM PERSONALITYOPTIONS WHERE PERSONALITYTRAIT = '$trait1';";
			$result = mysqli_query($db, $query);
			$row = mysqli_fetch_row($result);
			$pNum1 = $row[0];

			$query = "SELECT PERSONALITYNUMBER FROM PERSONALITYOPTIONS WHERE PERSONALITYTRAIT = '$trait2';";
			$result = mysqli_query($db, $query);
			$row = mysqli_fetch_row($result);
			$pNum2 = $row[0];

			$query = "SELECT PERSONALITYNUMBER FROM PERSONALITYOPTIONS WHERE PERSONALITYTRAIT = '$trait3';";
			$result = mysqli_query($db, $query);
			$row = mysqli_fetch_row($result);
			$pNum3 = $row[0];

			$query = "REPLACE INTO PERSONALITY VALUES('$username', '$pNum1', '$pNum2', '$pNum3');";
			$query_run = mysqli_query($db, $query);
		}

		if (isset($_POST['bio'])) {
			$bio = htmlspecialchars(trim($_POST['bio']));
			$query = "REPLACE INTO BIO VALUES ('$username','$bio');";
			$query_run = mysqli_query($db, $query);
		}

		if (isset($_POST['eyes']) && isset($_POST['height']) && isset($_POST['haircolour']) && isset($_POST['hairlen']) && isset($_POST['skintone'])
				&& isset($_POST['bodytype'])
		) {
			echo "phys";
			$eye = $_POST['eyes'];
			$hair = $_POST['haircolour'];
			$hairlen = $_POST['hairlen'];
			$height = htmlspecialchars(trim($_POST['height']));
			$body = $_POST['bodytype'];
			$skin = $_POST['skintone'];
			$query = "SELECT EYENUMBER FROM EYECOLORS WHERE EYECOLOR = '$eye';";
			$query_run = mysqli_query($db, $query);
			$row = mysqli_fetch_array($query_run);
			$eye = $row[0];
			$query = "SELECT HAIRNUMBER FROM HAIRCOLORS WHERE HAIRCOLOR = '$hair';";
			$query_run = mysqli_query($db, $query);
			$row = mysqli_fetch_array($query_run);
			$hair = $row[0];
			$query = "SELECT HAIRLENNUMBER FROM HAIRLENGTHS WHERE HAIRLENNAME = '$hairlen';";
			$query_run = mysqli_query($db, $query);
			$row = mysqli_fetch_array($query_run);
			$hairlen = $row[0];
			$query = "SELECT TONENUMBER FROM SKINTONES WHERE TONE = '$skin';";
			$query_run = mysqli_query($db, $query);
			$row = mysqli_fetch_array($query_run);
			$skin = $row[0];
			$query = "SELECT BODYNUMBER FROM BODYTYPE WHERE BODYNAME = '$body';";
			$query_run = mysqli_query($db, $query);
			$row = mysqli_fetch_array($query_run);
			$body = $row[0];

			$query = "REPLACE INTO PHYSICAL VALUES ('$username', '$eye', '$hair', '$hairlen', '$body', '$height', '$skin');";
			$query_run = mysqli_query($db, $query);
		}
		header("Location: UserProfileOther.php?user=".$username);
	} else {
		header("Location: EditProfileOther.php");
	}
} else {
	header("Location: EditProfileOther.php");
}
mysqli_close($db);
