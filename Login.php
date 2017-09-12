<?php
ini_set('display_errors',1);
require 'Connect.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $error = "Invalid username/password";
    $found_user = false;
    if (!empty($username) && !empty($password)) {
        mysqli_select_db($db, "ADMIN");
        $query = ("SELECT USERNAME, PASSWORD FROM ADMIN WHERE USERNAME = '$username'");
        if ($query_run = mysqli_query($db, $query)) {
            $query_num_rows = mysqli_num_rows($query_run);
            if ($query_num_rows == 0) {
                header("Location: Home.php");
            } else if ($query_num_rows == 1) {
                $query_array = mysqli_fetch_array($query_run);
                if (password_verify($password, $query_array[1])) {
                    session_start();
                    $admin = "true";
                    $_SESSION['username'] = $username;
                    $_SESSION['admin'] = $admin;
                    $found_user = true;
                   header("Location: AddAdmin.php?aPage=default");
                }
            }
        }
    }
	if ($found_user == false) {
	$query2 = ("SELECT USERNAME FROM BANNED WHERE USERNAME = '$username'");
		echo "yup";
		if ($query2_run = mysqli_query($db, $query2)) 
		{
		echo "yup2";
            $query2_num_rows = mysqli_num_rows($query2_run);
            if ($query2_num_rows == 0)
			{
                $found_user=false;
            }
			else if ($query2_num_rows == 1) 
			{
                   $found_user=true;
				   header("Location: Home.php");
            }
        }
	}
    if ($found_user == false) {
        mysqli_select_db($db, "REGISTER");
        $query = ("SELECT USERNAME, PASSWORD FROM REGISTER WHERE USERNAME = '$username'");
        if ($query_run = mysqli_query($db, $query)) {
            $query_num_rows = mysqli_num_rows($query_run);
            if ($query_num_rows == 0) {
                header("Location: Home.php");
            } else if ($query_num_rows == 1) {
                $query_array = mysqli_fetch_array($query_run);
                if (password_verify($password, $query_array[1])) {
                    session_start();
                    $_SESSION['username'] = $username;
                    header("Location: UserProfile.php");
                } else {
                    header("Location: Home.php");
                }
            }
        }
    }
}
mysqli_close($db);
