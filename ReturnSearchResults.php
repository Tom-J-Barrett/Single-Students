<?php
require 'Connect.php';

$gender = $_POST['gender'];
$age = $_POST['age'];
$hobby = $_POST['hobbie2'];
$trait = $_POST['trait1'];
$eyes = $_POST['eyes'];
$hair = $_POST['haircolour'];
$skin = $_POST['skintone'];
$body = $_POST['bodytype'];
$height = $_POST['height'];
$college = $_POST['college'];

$searchResults = array();

$queryGenderDOB = ("SELECT USERNAME, SEX, DOB FROM REGISTER");
$query_run1 = mysqli_query($db, $queryGenderDOB);
$query_array1 = mysqli_fetch_array($query_run1);

if (!empty($gender)) {
    while ($row = $query_array1) {
        if ($row[1] == $gender) {
            $searchResults[] = $row[0];
        }
    }
}
// DOB here

if (empty($eyes) && empty($hair) && empty($body) && empty($height) && empty($skin)) {
    $queryPhysical = ("SELECT USERNAME, EYES, HAIR, BODY, HEIGHT, ETHNICITY FROM physical");
    $query_run2 = mysqli_query($db, $queryPhysical);
    $query_array2 = mysqli_fetch_array($query_run2);

    while ($row = $query_array2) {
        if ($row[1] == $eyes && !empty($eyes)) {
            $searchResults[] = $row[0];
        }
        if ($row[2] == $hair && !empty($hair)) {
            $searchResults[] = $row[0];
        }
        if ($row[3] == $body && !empty($body)) {
            $searchResults[] = $row[0];
        }
        if ($row[4] == $height && !empty($height)) {
            $searchResults[] = $row[0];
        }
        if ($row[5] == $skin && !empty($skin)) {
            $searchResults[] = $row[0];
        }
    }
}

if (!empty($trait)) {
    $queryPersonality = ("SELECT USERNAME, trait FROM personality WHERE trait = '$trait'");
    $query_run3 = mysqli_query($db, $queryPhysical);
    $query_array3 = mysqli_fetch_array($query_run3);

    while ($row = $query_array3) {
        if ($row[1] == $trait) {
            $searchResults[] = $row[0];
        }
    }
}

if (!empty($college)) {
    $queryCollegeNum = "Select COLLEGENUMBER, COLLEGENAME from COLLEGE where college = '$college'";
    $query_run4 = mysqli_query($db, $queryCollegeNum);
    $query_array4 = mysqli_fetch_array($query_run4);
    $collegeNum = $query_array4[0];

    $queryCollege = "Select username, college from Location where college = '$collegeNum'";
    $query_run5 = mysqli_query($db, $queryPhysical);
    $query_array5 = mysqli_fetch_array($query_run5);

    while ($row = $query_array5) {
        if ($row[1] == $college) {
            $searchResults[] = $row[0];
        }
    }
}

mysqli_close($db);
