<?php
ini_set('display_errors',1);
require 'Connect.php';
require 'validation.php';

$found_user = false;
$found_errors = false;

$forename= htmlspecialchars(trim($_POST['forename']));
$surname= htmlspecialchars(trim($_POST['surname']));
$city = htmlspecialchars(trim($_POST['town']));
$nameCard = htmlspecialchars(trim($_POST['cardName']));
$email = htmlspecialchars(trim($_POST['email']));
$day = htmlspecialchars($_POST['day']);
$month = htmlspecialchars($_POST['month']);
$year = htmlspecialchars($_POST['year']);
$DOB = $year."-".$month."-".$day;
$preference = $_POST['preference'];
$sex = $_POST['sex'];
$image = "testImage"; // NB NB NB NB NB NB
$college = $_POST['college'];
$county = $_POST['county'];
$type = $_POST['type'];
$number = htmlspecialchars(trim($_POST['cardNum']));
$cvv = htmlspecialchars(trim($_POST['cvv']));
$cardMonth= htmlspecialchars($_POST['cardMonth']);
$cardYear = htmlspecialchars($_POST['cardYear']);
$username = htmlspecialchars(trim($_POST['username']));
$password = htmlspecialchars($_POST['password']);
$password2 = htmlspecialchars($_POST['password2']);
$error = "";
$ccPassOrFail;

if (isset($username) && isset($password) &&
 	(!preg_match("/^[^a-zA-Z1-9_-]+$/", $username)) ) {

	$error = "Invalid username/password";
	if (!empty($username) && !empty($password)) {
		mysqli_select_db($db, "ADMIN");
		$query = ("SELECT USERNAME FROM ADMIN WHERE USERNAME = '$username'");
		if ($query_run = mysqli_query($db, $query)) {
			$query_num_rows = mysqli_num_rows($query_run);
			if ($query_num_rows == 1) {
                // Is this meant to be an error
                $error = "Admin already registered!";
                //header("Location: Home.php");
                $found_user = true;
			}
		}
	}

	if ($found_user == false) {
		mysqli_select_db($db, "REGISTER");
		$query = ("SELECT USERNAME FROM REGISTER WHERE USERNAME = '$username'");
		if ($query_run = mysqli_query($db, $query)) {
			$query_num_rows = mysqli_num_rows($query_run);
			if ($query_num_rows == 1) {
                $error = "Username already registered! Try a different name.";
                $found_user = true;
			}
		}
		$query = ("SELECT EMAIL FROM REGISTER WHERE EMAIL = '$email'");
		if ($query_run = mysqli_query($db, $query)) {
			$query_num_rows = mysqli_num_rows($query_run);
			if ($query_num_rows == 1) {
				$error = "Email address already registered!";
                $found_user = true;
			}
		}
	}
    //To make sure the loop runs and runs only once.
    $endOfLoop = true;
    do{
    	if ($found_user == false) { // NB No check here it see if image uploaded, add at later stage
    		// Already checking if Null or not
            if (!(isset($forename) && isset($surname) && isset($email) && isset($sex) &&
    			isset($preference) && isset($day) && isset($month) && isset($year) &&
    			isset($college) && isset($city) && isset($county) &&
    			isset($nameCard) && isset($number) && isset($cvv) && isset($type) &&
    			isset($cardMonth) && isset($cardYear))) {
                $error = "Important field left blank!";
                $found_errors = true;
                break;
            }
            // True if wrong, true if name contains anything other than letters
            // if(preg_match("/^[a-zA-Z '.-]+$/", $msg))
    		if (preg_match("/^[^A-Za-z '.-]+$/", $forename) ){
                $error = "Forenames can only contain letters!";
                $found_errors = true;
                break;
            }
            if (preg_match("/^[^A-Za-z '.-]+$/", $surname) ){
                $error = "Surnames can only contain letters!";
                $found_errors = true;
                break;
            }
            // True if wrong
            if (preg_match("/^[^A-Za-z ]+$/", $city) ){
                $error = "Towns and Cities can only contain letters!";
                $found_errors = true;
                break;
            }
            // True if wrong
            if (preg_match("/^[^A-Za-z ]+$/", $nameCard) ){
                $error = "Card on card may only contain letters!";
                $found_errors = true;
                break;
            }
            // True if right, so error
            if (!filter_var($email, FILTER_VALIDATE_EMAIL) ){
                $error = "Email isn't in the correct format, or might be misspelled!";
                $found_errors = true;
                break;
            }
            // True if right
            if(!correctDate($day, $month, $year)){
                $error = "Mistake with date of birth format or too young!";
                $found_errors = true;
                break;
            }
            // True if wrong??
            /*if (!preg_match(getCardPattern($type), $number) ){
                $error = "Card number is incorrect for it's card type!";
                $found_errors = true;
                break;
            } disabled due to the cc server*/
            // True if right
            if (!preg_match("/[0-9]{3}/", $cvv)){
                $error = "Security number can only be 3 numbers long!";
                $found_errors = true;
                break;
            }
            // True if no match
            if ($password != $password2){
                $error = "Passwords don't match!";
                $found_errors = true;
                break;
            }

            if (strlen($password) < 7){
                $error = "Password is too short! Must be 8 characters long.";
                $found_errors = true;
                break;
            }

            if( !preg_match("/[0-9]+/", $password) ) {
            	$error = "Password must include at least one number!";
                $found_errors = true;
                break;
            }

            if( !preg_match("/[a-z]+/", $password) ) {
            	$error = "Password must include at least one lowercase letter!";
                $found_errors = true;
                break;
            }

            if( !preg_match("/[A-Z]+/", $password) ) {
            	$error = "Password must include at least one uppercase letter!";
                $found_errors = true;
                break;
            }

            if (!chkCardDate($cardMonth, $cardYear)) {
                $error = "Credit Card is out of date!";
                $found_errors = true;
                break;
            }

            $ccServerLink = "http://amnesia.csisdmz.ul.ie/4014/cc.php?";
            $nameCard = preg_replace("/\s/", "+", $nameCard, 1);

            $ccPassOrFail = file_get_contents($ccServerLink.$nameCard."&ccNumber=".$number."&month=".$cardMonth."&year=".$cardYear."&security=".$cvv);
            $password=password_hash($password, PASSWORD_DEFAULT);

            if ($ccPassOrFail == "0") {
                $error = "Failed Credit Card Server validation!<br>";
                $found_errors = true;
            }
        }
        $endOfLoop = false; //Made a loop so we can break out of it if errors are found
        //endOfLoop prevent the loop from looping
    }while($endOfLoop);

    if (!$found_errors && !$found_user) {
		$query1 = "INSERT INTO REGISTER VALUES ('$username','$forename','$surname','$password','$email','$DOB','$preference','$sex','$image');";

		$query4="SELECT COUNTYNUMBER FROM COUNTY WHERE COUNTYNAME = '$county';";
		$result=mysqli_query($db,$query4);
		$row=mysqli_fetch_row($result);
		$countyNum=$row[0];

		$query5="SELECT COLLEGENUMBER FROM COLLEGE WHERE COLLEGENAME = '$college';";
		$result2=mysqli_query($db,$query5);
		$row2=mysqli_fetch_row($result2);
		$collegeNum=$row2[0];

		$query2 = "INSERT INTO CARD VALUES ('$username','$nameCard','$cardMonth','$number','$cvv','$type','$cardYear');";
		$query3 = "INSERT INTO LOCATION VALUES ('$username','$collegeNum','$city','$countyNum');";
		mysqli_real_query($db, $query1);
		mysqli_real_query($db, $query2);
		mysqli_real_query($db, $query3);


        if(!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['username'] = $username;
        header("Location: UserProfile.php");
    }
    else {

        $error =  base64_encode($error);
        header("Location: Register.php?error=$error");
    }
    // http://amnesia.csisdmz.ul.ie/4014/cc.php?fullname=Fred+Murphy&ccNumber=1234567890123456&month=12&year=16&security=316
}
mysqli_close($db);
