<?php
	ini_set('display_errors',1);

	require 'Connect.php';

	if (!$db) {
		die ("No connection to server");
	} else {

		$sql1 = "CREATE TABLE BANNED
	(
	USERNAME varchar(60)NOT NULL,
	EMAIL varchar(60)NOT NULL,
	PRIMARY KEY (USERNAME)
	)";
		$req1 = mysqli_query($db, $sql1) or die('Error SQL !<br>' . $sql1 . '<br>' . mysqli_connect_error());


		$sql2 = "
	CREATE TABLE BIO
	(
	USERNAME varchar(60)NOT NULL,
	INFO varchar(250)NOT NULL,
	PRIMARY KEY (USERNAME)
	)";
		$req2 = mysqli_query($db, $sql2) or die('Erreur SQL !<br>' . $sql2 . '<br>' . mysqli_connect_error());


		$sql3 = "CREATE TABLE CARD
	(
	USERNAME varchar(60)NOT NULL,
	EXPIRE DATE NOT NULL,
	NUMBER varchar(60)NOT NULL,
	CVV varchar(60)NOT NULL,
	TYPE varchar(60)NOT NULL,
	PRIMARY KEY (USERNAME)
	)";
		$req3 = mysqli_query($db, $sql3) or die('Erreur SQL !<br>' . $sql3 . '<br>' . mysqli_connect_error());


		$sql4 = "CREATE TABLE LIKES
	(
	USERNAME varchar(60)NOT NULL,
	CATEGORY varchar(60)NOT NULL,
	HOBBIE varchar(60)NOT NULL,
	PRIMARY KEY (USERNAME)
	)";
		$req4 = mysqli_query($db, $sql4) or die('Erreur SQL !<br>' . $sql4 . '<br>' . mysqli_connect_error());


		$sql5 = "CREATE TABLE LOCATION
	(
	USERNAME varchar(60)NOT NULL,
	COLLEGE varchar(60)NOT NULL,
	CITY varchar(60)NOT NULL,
	COUNTY varchar(60)NOT NULL,
	PRIMARY KEY (USERNAME)
	)";
		$req5 = mysqli_query($db, $sql5) or die('Erreur SQL !<br>' . $sql5 . '<br>' . mysqli_connect_error());


		$sql6 = "CREATE TABLE PERSONALITY
	(
	USERNAME varchar(60)NOT NULL,
	TRAIT varchar(60)NOT NULL,
	PRIMARY KEY (USERNAME)
	)";
		$req6 = mysqli_query($db, $sql6) or die('Erreur SQL !<br>' . $sql6 . '<br>' . mysqli_connect_error());


		$sql7 = "CREATE TABLE PHYSICAL
	(
	USERNAME varchar(60)NOT NULL,
	EYES varchar(60)NOT NULL,
	HAIR varchar(60)NOT NULL,
	HAIRLEN varchar(60)NOT NULL,
	BODYTYPE varchar(60)NOT NULL,
	HEIGHT varchar(60)NOT NULL,
	ETHNICITY varchar(60)NOT NULL,
	PRIMARY KEY (USERNAME)
	)";
		$req7 = mysqli_query($db, $sql7) or die('Erreur SQL !<br>' . $sql7 . '<br>' . mysqli_connect_error());


		$sql8 = "CREATE TABLE REGISTER
	(
	USERNAME varchar(60)NOT NULL,
	NAME varchar(60)NOT NULL,
	PASSWORD varchar(60)NOT NULL,
	EMAIL varchar(60)NOT NULL,
	DOB DATE NOT NULL,
	PREFERENCE varchar(60)NOT NULL,
	SEX varchar(60)NOT NULL,
	ADMIN INT(1)NOT NULL,
	IMAGE varchar(60)NOT NULL,
	PRIMARY KEY (USERNAME)
	)";
		$req8 = mysqli_query($db, $sql8) or die('Erreur SQL !<br>' . $sql8 . '<br>' . mysqli_connect_error());


		$sql9 = "CREATE TABLE REQUESTS
	(
	USERNAME varchar(60)NOT NULL,
	USER varchar(60)NOT NULL,
	LEVEL varchar(60)NOT NULL,
	PRIMARY KEY (USERNAME)
	)";
		$req9 = mysqli_query($db, $sql9) or die('Erreur SQL !<br>' . $sql9 . '<br>' . mysqli_connect_error());


		$sql10 = "CREATE TABLE TEMPBAN
	(
	USERNAME varchar(60)NOT NULL,
	PRIMARY KEY (USERNAME)
	)";
		$req10 = mysqli_query($db, $sql10) or die('Erreur SQL !<br>' . $sql10 . '<br>' . mysqli_connect_error());


		$sql11 = "ALTER TABLE TEMPBAN
	   ADD 
	   FOREIGN KEY (USERNAME)
	   REFERENCES REGISTER(USERNAME)
	   ON DELETE CASCADE";
		$req11 = mysqli_query($db, $sql11) or die('Erreur SQL !<br>' . $sql11 . '<br>' . mysqli_connect_error());


		$sql12 = "ALTER TABLE BIO
	   ADD 
	   FOREIGN KEY (USERNAME)
	   REFERENCES REGISTER( USERNAME)
	   ON DELETE CASCADE";
		$req12 = mysqli_query($db, $sql12) or die('Erreur SQL !<br>' . $sql12 . '<br>' . mysqli_connect_error());


		$sql13 = "ALTER TABLE LOCATION
	   ADD 
	   FOREIGN KEY (USERNAME )
	   REFERENCES REGISTER(USERNAME )
	   ON DELETE CASCADE";
		$req13 = mysqli_query($db, $sql13) or die('Erreur SQL !<br>' . $sql13 . '<br>' . mysqli_connect_error());


		$sql14 = "ALTER TABLE REQUESTS
	   ADD 
	   FOREIGN KEY (USERNAME)
	   REFERENCES REGISTER (USERNAME)
	   ON DELETE CASCADE";
		$req14 = mysqli_query($db, $sql14) or die('Erreur SQL !<br>' . $sql14 . '<br>' . mysqli_connect_error());


		$sql15 = "ALTER TABLE REQUESTS
	   ADD 
	   FOREIGN KEY (USER)
	   REFERENCES REGISTER(USERNAME)
	   ON DELETE CASCADE";
		$req15 = mysqli_query($db, $sql15) or die('Erreur SQL !<br>' . $sql15 . '<br>' . mysqli_connect_error());


		$sql16 = "ALTER TABLE PERSONALITY
	   ADD 
	   FOREIGN KEY (USERNAME)
	   REFERENCES REGISTER(USERNAME)
	   ON DELETE CASCADE";
		$req16 = mysqli_query($db, $sql16) or die('Erreur SQL !<br>' . $sql16 . '<br>' . mysqli_connect_error());


		$sql17 = "ALTER TABLE PHYSICAL
	   ADD 
	   FOREIGN KEY (USERNAME)
	   REFERENCES REGISTER(USERNAME)
	   ON DELETE CASCADE";
		$req17 = mysqli_query($db, $sql17) or die('Erreur SQL !<br>' . $sql17 . '<br>' . mysqli_connect_error());


		$sql18 = "ALTER TABLE LIKES
	   ADD 
	   FOREIGN KEY (USERNAME)
	   REFERENCES REGISTER(USERNAME)
	   ON DELETE CASCADE";
		$req18 = mysqli_query($db, $sql18) or die('Erreur SQL !<br>' . $sql18 . '<br>' . mysqli_connect_error());


		$sql19 = "ALTER TABLE CARD
	   ADD 
	   FOREIGN KEY (USERNAME)
	   REFERENCES REGISTER(USERNAME)
	   ON DELETE CASCADE";
		$req19 = mysqli_query($db, $sql19) or die('Erreur SQL !<br>' . $sql19 . '<br>' . mysqli_connect_error());


		$sql20 = "CREATE TABLE COOKIE
	(
	USERNAME varchar(60)NOT NULL,
	HASH varchar(60)NOT NULL,
	PRIMARY KEY (USERNAME)
	)";
		$req20= mysqli_query($db, $sql20) or die('Erreur SQL !<br>'.$sql20.'<br>'.mysqli_connect_error());


		$sql21 = "CREATE TABLE ADMIN(
		USERNAME VARCHAR(60),
		PASSWORD VARCHAR(60),
		PRIMARY KEY (USERNAME))";
		$req21= mysqli_query($db, $sql21) or die('Erreur SQL !<br>'.$sql21.'<br>'.mysqli_connect_error());

		mysqli_close($db);
	} // end if else to check connectivity with server
?>