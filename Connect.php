<?php
$server= "193.1.101.7:3307";
$user="group19";
$password="cBlAP4s1a";
$dbname="group19DB";

$db = mysqli_connect($server,$user,$password, $dbname) or die("Unable to connect to server.");