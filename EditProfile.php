<?php
include 'LoginCheck.php';
require 'EditProfileData.php';
checkUser();
$s = "selected";
?>
<html>

<head>
    <title>Edit Profile | Single Students</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/index.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="js/epvalidate.js"></script>

</head>

<div class="wrapper">
    <!-- This wrapper will contain everything to keep it aligned -->
    <div id="navbar">
        <ul>
            <li><a href="UserProfile.php" />Profile <span class="glyphicon glyphicon-user"></span></a>
            </li>
            <li><a href="EditProfile.php" />Edit Profile <span class="glyphicon glyphicon-pencil"></span></a>
            </li>
            <li><a href="Matches.php?mPage=default" />Matches <span class="glyphicon glyphicon-heart-empty"></span></a>
            </li>
            <li><a href="Requests.php?rPage=default" />Requests <span class="glyphicon glyphicon-question-sign"></span></a>
            </li>
            <li><a href="Search.php" />Search <span class="glyphicon glyphicon-search"></span></a>
            </li>
            <li><a href = "BrowseUsers.php?bPage=default" />Browse Users <span class = "glyphicon glyphicon-search"></span></a>
            </li>
            <ul style="float:right;list-style-type:none;">
                <li><img src="images/logo-flat.png" height="50" /></li>
                <li><a href="Logout.php" />Logout <span class="glyphicon glyphicon-log-out"></span></a>
                </li>
            </ul>
        </ul>
    </div>
</div>

<body background="images/Couple.jpg">
<!-- Reference: https://donpnz.files.wordpress.com/2013/03/couple_crop-0023.jpg -->
    <div class="container">
        <div class="signuptext container">

            <h2>Your Account</h2>


            <form action="EditProfileUpdate.php" method="POST">
            <div class="row">
                <div class="col-md-3">
                    Forename
                </div>
                <div class="col-md-9 form-group">
                    <input class="form-control" type="text" name="forename" id="forename" value="<?php echo $forename ?>" >
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    Surname
                </div>
                <div class="col-md-9 form-group">
                    <input class="form-control" type="text" name="surname" id="surname" value="<?php echo $surname ?>" >
                </div>
            </div>
            <div id="warning-area-name">

            </div>

            <!-- Not sure what to do with Password yet.
            If its left blank if shouldn't update, otherwise validate and update
            -Will -->
            <div class="row">
                <div class="col-md-4">
                    Password
                </div>
                <div class="col-md-8 form-group">
                    <input class="form-control" type="password" name="password" id="password">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    Confirm Password
                </div>
                <div class="col-md-8 form-group">
                    <input class="form-control" type="password" name="password2" id="password2">
                </div>
            </div>
            <div id="warning-area-password">

            </div>

            <!--<div class="row">
				<div class="col-md-4">
					Edit Profile Photo
				</div>
				<div class="col-md-8 form-group">
					<form action="demo_form.asp">
						<input type="file" name="image" id = "image" accept="image/*">
					</form>
				</div>
			</div>-->

            <div class="row">
                <div class="col-md-4">
                    I am looking for
                </div>
                <div class="col-md-8 form-group">
                    <select name="preference" id="preference" class="optionlist form-control">
                        <option <?php if($preference == 'Male'){echo $s;}?> value="Male">a man</option>
                        <option <?php if($preference == 'Female'){echo $s;}?> value="Female">a woman</option>
                    </select>
                </div>
            </div>

                <h2>Hobbies, Likes & Interests</h2>


            <div class="row">
                <div class="col-md-5">
                    Hobby/Like/Interest 1
                </div>
                <div class="col-md-7 form-group">
                    <select name="hobby1" id="hobby1" class="optionlist form-control" >
                        <option <?php if(!$hobbies[0]){echo $s;}?> value="" disabled></option>
                        <option <?php if($hobbies[0] == '1'){echo $s;}?> value="American Football">American Football</option>
                        <option <?php if($hobbies[0] == '2'){echo $s;}?> value="Art">Art</option>
                        <option <?php if($hobbies[0] == '3'){echo $s;}?> value="Athletics">Athletics</option>
                        <option <?php if($hobbies[0] == '4'){echo $s;}?> value="Badminton">Badminton</option>
                        <option <?php if($hobbies[0] == '5'){echo $s;}?> value="Basketball">Basketball</option>
                        <option <?php if($hobbies[0] == '6'){echo $s;}?> value="Camping">Camping</option>
                        <option <?php if($hobbies[0] == '7'){echo $s;}?> value="Climbing">Climbing</option>
                        <option <?php if($hobbies[0] == '8'){echo $s;}?> value="Clubbing">Clubbing</option>
                        <option <?php if($hobbies[0] == '9'){echo $s;}?> value="Coding">Coding</option>
                        <option <?php if($hobbies[0] == '10'){echo $s;}?> value="Cricket">Cricket</option>
                        <option <?php if($hobbies[0] == '11'){echo $s;}?> value="Cycling">Cycling</option>
                        <option <?php if($hobbies[0] == '12'){echo $s;}?> value="Dance">Dance</option>
                        <option <?php if($hobbies[0] == '13'){echo $s;}?> value="Diving">Diving</option>
                        <option <?php if($hobbies[0] == '14'){echo $s;}?> value="Drama">Drama</option>
                        <option <?php if($hobbies[0] == '15'){echo $s;}?> value="Driving">Driving</option>
                        <option <?php if($hobbies[0] == '16'){echo $s;}?> value="Eating">Eating</option>
                        <option <?php if($hobbies[0] == '17'){echo $s;}?> value="Fashion">Fashion</option>
                        <option <?php if($hobbies[0] == '18'){echo $s;}?> value="Fishing">Fishing</option>
                        <option <?php if($hobbies[0] == '19'){echo $s;}?> value="Frisbee">Frisbee</option>
                        <option <?php if($hobbies[0] == '20'){echo $s;}?> value="GAA">GAA</option>
                        <option <?php if($hobbies[0] == '21'){echo $s;}?> value="Gaming">Gaming</option>
                        <option <?php if($hobbies[0] == '22'){echo $s;}?> value="Golf">Golf</option>
                        <option <?php if($hobbies[0] == '23'){echo $s;}?> value="Handball">Handball</option>
                        <option <?php if($hobbies[0] == '24'){echo $s;}?> value="Hiking">Hiking</option>
                        <option <?php if($hobbies[0] == '25'){echo $s;}?> value="Hockey">Hockey</option>
                        <option <?php if($hobbies[0] == '26'){echo $s;}?> value="Horseriding">Horseriding</option>
                        <option <?php if($hobbies[0] == '27'){echo $s;}?> value="Kayaking">Kayaking</option>
                        <option <?php if($hobbies[0] == '28'){echo $s;}?> value="Movies">Movies</option>
                        <option <?php if($hobbies[0] == '29'){echo $s;}?> value="Music">Music</option>
                        <option <?php if($hobbies[0] == '30'){echo $s;}?> value="Netball">Netball</option>
                        <option <?php if($hobbies[0] == '31'){echo $s;}?> value="Netflix">Netflix</option>
                        <option <?php if($hobbies[0] == '32'){echo $s;}?> value="Reading">Reading</option>
                        <option <?php if($hobbies[0] == '33'){echo $s;}?> value="Rugby">Rugby</option>
                        <option <?php if($hobbies[0] == '34'){echo $s;}?> value="Running">Running</option>
                        <option <?php if($hobbies[0] == '35'){echo $s;}?> value="Singing">Singing</option>
                        <option <?php if($hobbies[0] == '36'){echo $s;}?> value="Skateboarding">Skateboarding</option>
                        <option <?php if($hobbies[0] == '37'){echo $s;}?> value="Skiing">Skiing</option>
                        <option <?php if($hobbies[0] == '38'){echo $s;}?> value="Soccer">Soccer</option>
                        <option <?php if($hobbies[0] == '39'){echo $s;}?> value="Socializing">Socializing</option>
                        <option <?php if($hobbies[0] == '40'){echo $s;}?> value="Surfing">Surfing</option>
                        <option <?php if($hobbies[0] == '41'){echo $s;}?> value="Swimming">Swimming</option>
                        <option <?php if($hobbies[0] == '42'){echo $s;}?> value="Tennis">Tennis</option>
                        <option <?php if($hobbies[0] == '43'){echo $s;}?> value="Walking">Walking</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    Hobby/Like/Interest 2
                </div>
                <div class="col-md-7 form-group">
                    <select name="hobby2" id="hobby2" class="optionlist form-control" >
                        <option <?php if(!$hobbies[1]){echo $s;}?> value="" disabled></option>
                        <option <?php if($hobbies[1] == '1'){echo $s;}?> value="American Football">American Football</option>
                        <option <?php if($hobbies[1] == '2'){echo $s;}?> value="Art">Art</option>
                        <option <?php if($hobbies[1] == '3'){echo $s;}?> value="Athletics">Athletics</option>
                        <option <?php if($hobbies[1] == '4'){echo $s;}?> value="Badminton">Badminton</option>
                        <option <?php if($hobbies[1] == '5'){echo $s;}?> value="Basketball">Basketball</option>
                        <option <?php if($hobbies[1] == '6'){echo $s;}?> value="Camping">Camping</option>
                        <option <?php if($hobbies[1] == '7'){echo $s;}?> value="Climbing">Climbing</option>
                        <option <?php if($hobbies[1] == '8'){echo $s;}?> value="Clubbing">Clubbing</option>
                        <option <?php if($hobbies[1] == '9'){echo $s;}?> value="Coding">Coding</option>
                        <option <?php if($hobbies[1] == '10'){echo $s;}?> value="Cricket">Cricket</option>
                        <option <?php if($hobbies[1] == '11'){echo $s;}?> value="Cycling">Cycling</option>
                        <option <?php if($hobbies[1] == '12'){echo $s;}?> value="Dance">Dance</option>
                        <option <?php if($hobbies[1] == '13'){echo $s;}?> value="Diving">Diving</option>
                        <option <?php if($hobbies[1] == '14'){echo $s;}?> value="Drama">Drama</option>
                        <option <?php if($hobbies[1] == '15'){echo $s;}?> value="Driving">Driving</option>
                        <option <?php if($hobbies[1] == '16'){echo $s;}?> value="Eating">Eating</option>
                        <option <?php if($hobbies[1] == '17'){echo $s;}?> value="Fashion">Fashion</option>
                        <option <?php if($hobbies[1] == '18'){echo $s;}?> value="Fishing">Fishing</option>
                        <option <?php if($hobbies[1] == '19'){echo $s;}?> value="Frisbee">Frisbee</option>
                        <option <?php if($hobbies[1] == '20'){echo $s;}?> value="GAA">GAA</option>
                        <option <?php if($hobbies[1] == '21'){echo $s;}?> value="Gaming">Gaming</option>
                        <option <?php if($hobbies[1] == '22'){echo $s;}?> value="Golf">Golf</option>
                        <option <?php if($hobbies[1] == '23'){echo $s;}?> value="Handball">Handball</option>
                        <option <?php if($hobbies[1] == '24'){echo $s;}?> value="Hiking">Hiking</option>
                        <option <?php if($hobbies[1] == '25'){echo $s;}?> value="Hockey">Hockey</option>
                        <option <?php if($hobbies[1] == '26'){echo $s;}?> value="Horseriding">Horseriding</option>
                        <option <?php if($hobbies[1] == '27'){echo $s;}?> value="Kayaking">Kayaking</option>
                        <option <?php if($hobbies[1] == '28'){echo $s;}?> value="Movies">Movies</option>
                        <option <?php if($hobbies[1] == '29'){echo $s;}?> value="Music">Music</option>
                        <option <?php if($hobbies[1] == '30'){echo $s;}?> value="Netball">Netball</option>
                        <option <?php if($hobbies[1] == '31'){echo $s;}?> value="Netflix">Netflix</option>
                        <option <?php if($hobbies[1] == '32'){echo $s;}?> value="Reading">Reading</option>
                        <option <?php if($hobbies[1] == '33'){echo $s;}?> value="Rugby">Rugby</option>
                        <option <?php if($hobbies[1] == '34'){echo $s;}?> value="Running">Running</option>
                        <option <?php if($hobbies[1] == '35'){echo $s;}?> value="Singing">Singing</option>
                        <option <?php if($hobbies[1] == '36'){echo $s;}?> value="Skateboarding">Skateboarding</option>
                        <option <?php if($hobbies[1] == '37'){echo $s;}?> value="Skiing">Skiing</option>
                        <option <?php if($hobbies[1] == '38'){echo $s;}?> value="Soccer">Soccer</option>
                        <option <?php if($hobbies[1] == '39'){echo $s;}?> value="Socializing">Socializing</option>
                        <option <?php if($hobbies[1] == '40'){echo $s;}?> value="Surfing">Surfing</option>
                        <option <?php if($hobbies[1] == '41'){echo $s;}?> value="Swimming">Swimming</option>
                        <option <?php if($hobbies[1] == '42'){echo $s;}?> value="Tennis">Tennis</option>
                        <option <?php if($hobbies[1] == '43'){echo $s;}?> value="Walking">Walking</option>

                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    Hobby/Like/Interest 3
                </div>
                <div class="col-md-7 form-group">
                    <select name="hobby3" id="hobby3" class="optionlist form-control" >
                        <option <?php if(!$hobbies[2]){echo $s;}?> value="" disabled></option>
                        <option <?php if($hobbies[2] == '1'){echo $s;}?> value="American Football">American Football</option>
                        <option <?php if($hobbies[2] == '2'){echo $s;}?> value="Art">Art</option>
                        <option <?php if($hobbies[2] == '3'){echo $s;}?> value="Athletics">Athletics</option>
                        <option <?php if($hobbies[2] == '4'){echo $s;}?> value="Badminton">Badminton</option>
                        <option <?php if($hobbies[2] == '5'){echo $s;}?> value="Basketball">Basketball</option>
                        <option <?php if($hobbies[2] == '6'){echo $s;}?> value="Camping">Camping</option>
                        <option <?php if($hobbies[2] == '7'){echo $s;}?> value="Climbing">Climbing</option>
                        <option <?php if($hobbies[2] == '8'){echo $s;}?> value="Clubbing">Clubbing</option>
                        <option <?php if($hobbies[2] == '9'){echo $s;}?> value="Coding">Coding</option>
                        <option <?php if($hobbies[2] == '10'){echo $s;}?> value="Cricket">Cricket</option>
                        <option <?php if($hobbies[2] == '11'){echo $s;}?> value="Cycling">Cycling</option>
                        <option <?php if($hobbies[2] == '12'){echo $s;}?> value="Dance">Dance</option>
                        <option <?php if($hobbies[2] == '13'){echo $s;}?> value="Diving">Diving</option>
                        <option <?php if($hobbies[2] == '14'){echo $s;}?> value="Drama">Drama</option>
                        <option <?php if($hobbies[2] == '15'){echo $s;}?> value="Driving">Driving</option>
                        <option <?php if($hobbies[2] == '16'){echo $s;}?> value="Eating">Eating</option>
                        <option <?php if($hobbies[2] == '17'){echo $s;}?> value="Fashion">Fashion</option>
                        <option <?php if($hobbies[2] == '18'){echo $s;}?> value="Fishing">Fishing</option>
                        <option <?php if($hobbies[2] == '19'){echo $s;}?> value="Frisbee">Frisbee</option>
                        <option <?php if($hobbies[2] == '20'){echo $s;}?> value="GAA">GAA</option>
                        <option <?php if($hobbies[2] == '21'){echo $s;}?> value="Gaming">Gaming</option>
                        <option <?php if($hobbies[2] == '22'){echo $s;}?> value="Golf">Golf</option>
                        <option <?php if($hobbies[2] == '23'){echo $s;}?> value="Handball">Handball</option>
                        <option <?php if($hobbies[2] == '24'){echo $s;}?> value="Hiking">Hiking</option>
                        <option <?php if($hobbies[2] == '25'){echo $s;}?> value="Hockey">Hockey</option>
                        <option <?php if($hobbies[2] == '26'){echo $s;}?> value="Horseriding">Horseriding</option>
                        <option <?php if($hobbies[2] == '27'){echo $s;}?> value="Kayaking">Kayaking</option>
                        <option <?php if($hobbies[2] == '28'){echo $s;}?> value="Movies">Movies</option>
                        <option <?php if($hobbies[2] == '29'){echo $s;}?> value="Music">Music</option>
                        <option <?php if($hobbies[2] == '30'){echo $s;}?> value="Netball">Netball</option>
                        <option <?php if($hobbies[2] == '31'){echo $s;}?> value="Netflix">Netflix</option>
                        <option <?php if($hobbies[2] == '32'){echo $s;}?> value="Reading">Reading</option>
                        <option <?php if($hobbies[2] == '33'){echo $s;}?> value="Rugby">Rugby</option>
                        <option <?php if($hobbies[2] == '34'){echo $s;}?> value="Running">Running</option>
                        <option <?php if($hobbies[2] == '35'){echo $s;}?> value="Singing">Singing</option>
                        <option <?php if($hobbies[2] == '36'){echo $s;}?> value="Skateboarding">Skateboarding</option>
                        <option <?php if($hobbies[2] == '37'){echo $s;}?> value="Skiing">Skiing</option>
                        <option <?php if($hobbies[2] == '38'){echo $s;}?> value="Soccer">Soccer</option>
                        <option <?php if($hobbies[2] == '39'){echo $s;}?> value="Socializing">Socializing</option>
                        <option <?php if($hobbies[2] == '40'){echo $s;}?> value="Surfing">Surfing</option>
                        <option <?php if($hobbies[2] == '41'){echo $s;}?> value="Swimming">Swimming</option>
                        <option <?php if($hobbies[2] == '42'){echo $s;}?> value="Tennis">Tennis</option>
                        <option <?php if($hobbies[2] == '43'){echo $s;}?> value="Walking">Walking</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    Hobby/Like/Interest 4
                </div>
                <div class="col-md-7 form-group">
                    <select name="hobby4" id="hobby4" class="optionlist form-control" >
                        <option <?php if(!$hobbies[3]){echo $s;}?> value="" disabled></option>
                        <option <?php if($hobbies[3] == '1'){echo $s;}?> value="American Football">American Football</option>
                        <option <?php if($hobbies[3] == '2'){echo $s;}?> value="Art">Art</option>
                        <option <?php if($hobbies[3] == '3'){echo $s;}?> value="Athletics">Athletics</option>
                        <option <?php if($hobbies[3] == '4'){echo $s;}?> value="Badminton">Badminton</option>
                        <option <?php if($hobbies[3] == '5'){echo $s;}?> value="Basketball">Basketball</option>
                        <option <?php if($hobbies[3] == '6'){echo $s;}?> value="Camping">Camping</option>
                        <option <?php if($hobbies[3] == '7'){echo $s;}?> value="Climbing">Climbing</option>
                        <option <?php if($hobbies[3] == '8'){echo $s;}?> value="Clubbing">Clubbing</option>
                        <option <?php if($hobbies[3] == '9'){echo $s;}?> value="Coding">Coding</option>
                        <option <?php if($hobbies[3] == '10'){echo $s;}?> value="Cricket">Cricket</option>
                        <option <?php if($hobbies[3] == '11'){echo $s;}?> value="Cycling">Cycling</option>
                        <option <?php if($hobbies[3] == '12'){echo $s;}?> value="Dance">Dance</option>
                        <option <?php if($hobbies[3] == '13'){echo $s;}?> value="Diving">Diving</option>
                        <option <?php if($hobbies[3] == '14'){echo $s;}?> value="Drama">Drama</option>
                        <option <?php if($hobbies[3] == '15'){echo $s;}?> value="Driving">Driving</option>
                        <option <?php if($hobbies[3] == '16'){echo $s;}?> value="Eating">Eating</option>
                        <option <?php if($hobbies[3] == '17'){echo $s;}?> value="Fashion">Fashion</option>
                        <option <?php if($hobbies[3] == '18'){echo $s;}?> value="Fishing">Fishing</option>
                        <option <?php if($hobbies[3] == '19'){echo $s;}?> value="Frisbee">Frisbee</option>
                        <option <?php if($hobbies[3] == '20'){echo $s;}?> value="GAA">GAA</option>
                        <option <?php if($hobbies[3] == '21'){echo $s;}?> value="Gaming">Gaming</option>
                        <option <?php if($hobbies[3] == '22'){echo $s;}?> value="Golf">Golf</option>
                        <option <?php if($hobbies[3] == '23'){echo $s;}?> value="Handball">Handball</option>
                        <option <?php if($hobbies[3] == '24'){echo $s;}?> value="Hiking">Hiking</option>
                        <option <?php if($hobbies[3] == '25'){echo $s;}?> value="Hockey">Hockey</option>
                        <option <?php if($hobbies[3] == '26'){echo $s;}?> value="Horseriding">Horseriding</option>
                        <option <?php if($hobbies[3] == '27'){echo $s;}?> value="Kayaking">Kayaking</option>
                        <option <?php if($hobbies[3] == '28'){echo $s;}?> value="Movies">Movies</option>
                        <option <?php if($hobbies[3] == '29'){echo $s;}?> value="Music">Music</option>
                        <option <?php if($hobbies[3] == '30'){echo $s;}?> value="Netball">Netball</option>
                        <option <?php if($hobbies[3] == '31'){echo $s;}?> value="Netflix">Netflix</option>
                        <option <?php if($hobbies[3] == '32'){echo $s;}?> value="Reading">Reading</option>
                        <option <?php if($hobbies[3] == '33'){echo $s;}?> value="Rugby">Rugby</option>
                        <option <?php if($hobbies[3] == '34'){echo $s;}?> value="Running">Running</option>
                        <option <?php if($hobbies[3] == '35'){echo $s;}?> value="Singing">Singing</option>
                        <option <?php if($hobbies[3] == '36'){echo $s;}?> value="Skateboarding">Skateboarding</option>
                        <option <?php if($hobbies[3] == '37'){echo $s;}?> value="Skiing">Skiing</option>
                        <option <?php if($hobbies[3] == '38'){echo $s;}?> value="Soccer">Soccer</option>
                        <option <?php if($hobbies[3] == '39'){echo $s;}?> value="Socializing">Socializing</option>
                        <option <?php if($hobbies[3] == '40'){echo $s;}?> value="Surfing">Surfing</option>
                        <option <?php if($hobbies[3] == '41'){echo $s;}?> value="Swimming">Swimming</option>
                        <option <?php if($hobbies[3] == '42'){echo $s;}?> value="Tennis">Tennis</option>
                        <option <?php if($hobbies[3] == '43'){echo $s;}?> value="Walking">Walking</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    Hobby/Like/Interest 5
                </div>
                <div class="col-md-7 form-group">
                    <select name="hobby5" id="hobby5" class="optionlist form-control" >
                        <option <?php if(!$hobbies[4]){echo $s;}?> value="" disabled></option>
                        <option <?php if($hobbies[4] == '1'){echo $s;}?> value="American Football">American Football</option>
                        <option <?php if($hobbies[4] == '2'){echo $s;}?> value="Art">Art</option>
                        <option <?php if($hobbies[4] == '3'){echo $s;}?> value="Athletics">Athletics</option>
                        <option <?php if($hobbies[4] == '4'){echo $s;}?> value="Badminton">Badminton</option>
                        <option <?php if($hobbies[4] == '5'){echo $s;}?> value="Basketball">Basketball</option>
                        <option <?php if($hobbies[4] == '6'){echo $s;}?> value="Camping">Camping</option>
                        <option <?php if($hobbies[4] == '7'){echo $s;}?> value="Climbing">Climbing</option>
                        <option <?php if($hobbies[4] == '8'){echo $s;}?> value="Clubbing">Clubbing</option>
                        <option <?php if($hobbies[4] == '9'){echo $s;}?> value="Coding">Coding</option>
                        <option <?php if($hobbies[4] == '10'){echo $s;}?> value="Cricket">Cricket</option>
                        <option <?php if($hobbies[4] == '11'){echo $s;}?> value="Cycling">Cycling</option>
                        <option <?php if($hobbies[4] == '12'){echo $s;}?> value="Dance">Dance</option>
                        <option <?php if($hobbies[4] == '13'){echo $s;}?> value="Diving">Diving</option>
                        <option <?php if($hobbies[4] == '14'){echo $s;}?> value="Drama">Drama</option>
                        <option <?php if($hobbies[4] == '15'){echo $s;}?> value="Driving">Driving</option>
                        <option <?php if($hobbies[4] == '16'){echo $s;}?> value="Eating">Eating</option>
                        <option <?php if($hobbies[4] == '17'){echo $s;}?> value="Fashion">Fashion</option>
                        <option <?php if($hobbies[4] == '18'){echo $s;}?> value="Fishing">Fishing</option>
                        <option <?php if($hobbies[4] == '19'){echo $s;}?> value="Frisbee">Frisbee</option>
                        <option <?php if($hobbies[4] == '20'){echo $s;}?> value="GAA">GAA</option>
                        <option <?php if($hobbies[4] == '21'){echo $s;}?> value="Gaming">Gaming</option>
                        <option <?php if($hobbies[4] == '22'){echo $s;}?> value="Golf">Golf</option>
                        <option <?php if($hobbies[4] == '23'){echo $s;}?> value="Handball">Handball</option>
                        <option <?php if($hobbies[4] == '24'){echo $s;}?> value="Hiking">Hiking</option>
                        <option <?php if($hobbies[4] == '25'){echo $s;}?> value="Hockey">Hockey</option>
                        <option <?php if($hobbies[4] == '26'){echo $s;}?> value="Horseriding">Horseriding</option>
                        <option <?php if($hobbies[4] == '27'){echo $s;}?> value="Kayaking">Kayaking</option>
                        <option <?php if($hobbies[4] == '28'){echo $s;}?> value="Movies">Movies</option>
                        <option <?php if($hobbies[4] == '29'){echo $s;}?> value="Music">Music</option>
                        <option <?php if($hobbies[4] == '30'){echo $s;}?> value="Netball">Netball</option>
                        <option <?php if($hobbies[4] == '31'){echo $s;}?> value="Netflix">Netflix</option>
                        <option <?php if($hobbies[4] == '32'){echo $s;}?> value="Reading">Reading</option>
                        <option <?php if($hobbies[4] == '33'){echo $s;}?> value="Rugby">Rugby</option>
                        <option <?php if($hobbies[4] == '34'){echo $s;}?> value="Running">Running</option>
                        <option <?php if($hobbies[4] == '35'){echo $s;}?> value="Singing">Singing</option>
                        <option <?php if($hobbies[4] == '36'){echo $s;}?> value="Skateboarding">Skateboarding</option>
                        <option <?php if($hobbies[4] == '37'){echo $s;}?> value="Skiing">Skiing</option>
                        <option <?php if($hobbies[4] == '38'){echo $s;}?> value="Soccer">Soccer</option>
                        <option <?php if($hobbies[4] == '39'){echo $s;}?> value="Socializing">Socializing</option>
                        <option <?php if($hobbies[4] == '40'){echo $s;}?> value="Surfing">Surfing</option>
                        <option <?php if($hobbies[4] == '41'){echo $s;}?> value="Swimming">Swimming</option>
                        <option <?php if($hobbies[4] == '42'){echo $s;}?> value="Tennis">Tennis</option>
                        <option <?php if($hobbies[4] == '43'){echo $s;}?> value="Walking">Walking</option>
                    </select>
                </div>
            </div>

                    <h2>Personality Traits</h2>

            <div class="row">
                <div class="col-md-4">
                    Trait 1
                </div>
                <div class="col-md-8 form-group">
                    <select name="trait1" id="trait1" class="optionlist form-control" >
                        <option <?php if(!$traits[0]){echo $s;}?> value="" disabled></option>
                        <option <?php if($traits[0] == '1'){echo $s;}?> value="Adventurous">Adventurous</option>
                        <option <?php if($traits[0] == '2'){echo $s;}?> value="Ambitious">Ambitious</option>
                        <option <?php if($traits[0] == '3'){echo $s;}?> value="Charismatic">Charismatic</option>
                        <option <?php if($traits[0] == '4'){echo $s;}?> value="Charming">Charming</option>
                        <option <?php if($traits[0] == '5'){echo $s;}?> value="Clever">Clever</option>
                        <option <?php if($traits[0] == '6'){echo $s;}?> value="Clumsy">Clumsy</option>
                        <option <?php if($traits[0] == '7'){echo $s;}?> value="Confident">Confident</option>
                        <option <?php if($traits[0] == '8'){echo $s;}?> value="Enthuasiastic">Enthuasiastic</option>
                        <option <?php if($traits[0] == '9'){echo $s;}?> value="Friendly">Friendly</option>
                        <option <?php if($traits[0] == '10'){echo $s;}?> value="Fun">Fun</option>
                        <option <?php if($traits[0] == '11'){echo $s;}?> value="Funny">Funny</option>
                        <option <?php if($traits[0] == '12'){echo $s;}?> value="Generous">Generous</option>
                        <option <?php if($traits[0] == '13'){echo $s;}?> value="Happy">Happy</option>
                        <option <?php if($traits[0] == '14'){echo $s;}?> value="Hardworking">Hardworking</option>
                        <option <?php if($traits[0] == '15'){echo $s;}?> value="Kind">Kind</option>
                        <option <?php if($traits[0] == '16'){echo $s;}?> value="Lazy">Lazy</option>
                        <option <?php if($traits[0] == '17'){echo $s;}?> value="Optimistic">Optimistic</option>
                        <option <?php if($traits[0] == '18'){echo $s;}?> value="Outgoing">Outgoing</option>
                        <option <?php if($traits[0] == '19'){echo $s;}?> value="Quiet">Quiet</option>
                        <option <?php if($traits[0] == '20'){echo $s;}?> value="Relaxed">Relaxed</option>
                        <option <?php if($traits[0] == '21'){echo $s;}?> value="Smart">Smart</option>
                        <option <?php if($traits[0] == '22'){echo $s;}?> value="Stylish">Stylish</option>
                        <option <?php if($traits[0] == '23'){echo $s;}?> value="Trustworthy">Trustworthy</option>
                        <option <?php if($traits[0] == '24'){echo $s;}?> value="Witty">Witty</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    Trait 2
                </div>
                <div class="col-md-8 form-group">
                    <select name="trait2" id="trait2" class="optionlist form-control" >
                        <option <?php if(!$traits[1]){echo $s;}?> value="" disabled></option>
                        <option <?php if($traits[1] == '1'){echo $s;}?> value="Adventurous">Adventurous</option>
                        <option <?php if($traits[1] == '2'){echo $s;}?> value="Ambitious">Ambitious</option>
                        <option <?php if($traits[1] == '3'){echo $s;}?> value="Charismatic">Charismatic</option>
                        <option <?php if($traits[1] == '4'){echo $s;}?> value="Charming">Charming</option>
                        <option <?php if($traits[1] == '5'){echo $s;}?> value="Clever">Clever</option>
                        <option <?php if($traits[1] == '6'){echo $s;}?> value="Clumsy">Clumsy</option>
                        <option <?php if($traits[1] == '7'){echo $s;}?> value="Confident">Confident</option>
                        <option <?php if($traits[1] == '8'){echo $s;}?> value="Enthuasiastic">Enthuasiastic</option>
                        <option <?php if($traits[1] == '9'){echo $s;}?> value="Friendly">Friendly</option>
                        <option <?php if($traits[1] == '10'){echo $s;}?> value="Fun">Fun</option>
                        <option <?php if($traits[1] == '11'){echo $s;}?> value="Funny">Funny</option>
                        <option <?php if($traits[1] == '12'){echo $s;}?> value="Generous">Generous</option>
                        <option <?php if($traits[1] == '13'){echo $s;}?> value="Happy">Happy</option>
                        <option <?php if($traits[1] == '14'){echo $s;}?> value="Hardworking">Hardworking</option>
                        <option <?php if($traits[1] == '15'){echo $s;}?> value="Kind">Kind</option>
                        <option <?php if($traits[1] == '16'){echo $s;}?> value="Lazy">Lazy</option>
                        <option <?php if($traits[1] == '17'){echo $s;}?> value="Optimistic">Optimistic</option>
                        <option <?php if($traits[1] == '18'){echo $s;}?> value="Outgoing">Outgoing</option>
                        <option <?php if($traits[1] == '19'){echo $s;}?> value="Quiet">Quiet</option>
                        <option <?php if($traits[1] == '20'){echo $s;}?> value="Relaxed">Relaxed</option>
                        <option <?php if($traits[1] == '21'){echo $s;}?> value="Smart">Smart</option>
                        <option <?php if($traits[1] == '22'){echo $s;}?> value="Stylish">Stylish</option>
                        <option <?php if($traits[1] == '23'){echo $s;}?> value="Trustworthy">Trustworthy</option>
                        <option <?php if($traits[1] == '24'){echo $s;}?> value="Witty">Witty</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    Trait 3
                </div>
                <div class="col-md-8 form-group">
                    <select name="trait3" id="trait3" class="optionlist form-control" >
                        <option <?php if(!$traits[2]){echo $s;}?> value="" disabled></option>
                        <option <?php if($traits[2] == '1'){echo $s;}?> value="Adventurous">Adventurous</option>
                        <option <?php if($traits[2] == '2'){echo $s;}?> value="Ambitious">Ambitious</option>
                        <option <?php if($traits[2] == '3'){echo $s;}?> value="Charismatic">Charismatic</option>
                        <option <?php if($traits[2] == '4'){echo $s;}?> value="Charming">Charming</option>
                        <option <?php if($traits[2] == '5'){echo $s;}?> value="Clever">Clever</option>
                        <option <?php if($traits[2] == '6'){echo $s;}?> value="Clumsy">Clumsy</option>
                        <option <?php if($traits[2] == '7'){echo $s;}?> value="Confident">Confident</option>
                        <option <?php if($traits[2] == '8'){echo $s;}?> value="Enthuasiastic">Enthuasiastic</option>
                        <option <?php if($traits[2] == '9'){echo $s;}?> value="Friendly">Friendly</option>
                        <option <?php if($traits[2] == '10'){echo $s;}?> value="Fun">Fun</option>
                        <option <?php if($traits[2] == '11'){echo $s;}?> value="Funny">Funny</option>
                        <option <?php if($traits[2] == '12'){echo $s;}?> value="Generous">Generous</option>
                        <option <?php if($traits[2] == '13'){echo $s;}?> value="Happy">Happy</option>
                        <option <?php if($traits[2] == '14'){echo $s;}?> value="Hardworking">Hardworking</option>
                        <option <?php if($traits[2] == '15'){echo $s;}?> value="Kind">Kind</option>
                        <option <?php if($traits[2] == '16'){echo $s;}?> value="Lazy">Lazy</option>
                        <option <?php if($traits[2] == '17'){echo $s;}?> value="Optimistic">Optimistic</option>
                        <option <?php if($traits[2] == '18'){echo $s;}?> value="Outgoing">Outgoing</option>
                        <option <?php if($traits[2] == '19'){echo $s;}?> value="Quiet">Quiet</option>
                        <option <?php if($traits[2] == '20'){echo $s;}?> value="Relaxed">Relaxed</option>
                        <option <?php if($traits[2] == '21'){echo $s;}?> value="Smart">Smart</option>
                        <option <?php if($traits[2] == '22'){echo $s;}?> value="Stylish">Stylish</option>
                        <option <?php if($traits[2] == '23'){echo $s;}?> value="Trustworthy">Trustworthy</option>
                        <option <?php if($traits[2] == '24'){echo $s;}?> value="Witty">Witty</option>
                    </select>
                </div>
            </div>

                <h2>Physical attributes</h2>

            <div class="row">
                <div class="col-md-4">
                    Eye colour
                </div>
                <div class="col-md-8 form-group">
                    <select name="eyes" id="eyes" class="optionlist form-control" >
                        <option <?php if(!$physical[0]){echo $s;}?> value="" disabled></option>
                        <option <?php if($physical[0] == '1'){echo $s;}?> value="Brown">Brown</option>
                        <option <?php if($physical[0] == '2'){echo $s;}?> value="Blue">Blue</option>
                        <option <?php if($physical[0] == '3'){echo $s;}?> value="Green">Green</option>
                        <option <?php if($physical[0] == '4'){echo $s;}?> value="Grey">Grey</option>
                        <option <?php if($physical[0] == '5'){echo $s;}?> value="Hazel">Hazel</option>
                        <option <?php if($physical[0] == '6'){echo $s;}?> value="Olive">Olive</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    Hair colour
                </div>
                <div class="col-md-8 form-group">
                    <select name="haircolour" id="hair" class="optionlist form-control" >
                        <option <?php if(!$physical[1]){echo $s;}?> value="" disabled></option>
                        <option <?php if($physical[1] == '1'){echo $s;}?> value="Black">Black</option>
                        <option <?php if($physical[1] == '2'){echo $s;}?> value="Brown">Brown</option>
                        <option <?php if($physical[1] == '3'){echo $s;}?> value="Darkbrown">Dark Brown</option>
                        <option <?php if($physical[1] == '4'){echo $s;}?> value="Light Brown">Light Brown</option>
                        <option <?php if($physical[1] == '5'){echo $s;}?> value="Blond">Blond</option>
                        <option <?php if($physical[1] == '6'){echo $s;}?> value="Dark Blond">Dark Blond</option>
                        <option <?php if($physical[1] == '7'){echo $s;}?> value="Light Blond">Light Blond</option>
                        <option <?php if($physical[1] == '8'){echo $s;}?> value="Strawberry Blond">Strawberry Blond</option>
                        <option <?php if($physical[1] == '9'){echo $s;}?> value="Red">Red</option>
                        <option <?php if($physical[1] == '10'){echo $s;}?> value="Dyed">Dyed</option>
                        <option <?php if($physical[1] == '11'){echo $s;}?> value="Bald">Bald</option>
                    </select>
                </div>
            </div>

			<div class="row">
                <div class="col-md-4">
                    Hair Length
                </div>
                <div class="col-md-8 form-group">
                    <select name="hairlen" id="hairlen" class="optionlist form-control" >
                        <option <?php if(!$physical[2]){echo $s;}?> value="" disabled></option>
                        <option <?php if($physical[2] == '1'){echo $s;}?> value="Short">Short</option>
                        <option <?php if($physical[2] == '2'){echo $s;}?> value="Long">Long</option>
                        <option <?php if($physical[2] == '3'){echo $s;}?> value="Middle">Middle</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    Skin tone
                </div>
                <div class="col-md-8 form-group">
                    <select name="skintone" id="skintone" class="optionlist form-control" >
                        <option <?php if(!$physical[5]){echo $s;}?> value="" disabled></option>
                        <option <?php if($physical[5] == '1'){echo $s;}?> value="Very Fair">Very Fair</option>
                        <option <?php if($physical[5] == '2'){echo $s;}?> value="Fair">Fair</option>
                        <option <?php if($physical[5] == '3'){echo $s;}?> value="Olive">Olive</option>
                        <option <?php if($physical[5] == '4'){echo $s;}?> value="Brown/Black">Brown/Black</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    Body type
                </div>
                <div class="col-md-8 form-group">
                    <select name="bodytype" id="bodytype" class="optionlist form-control" >
                        <option <?php if(!$physical[3]){echo $s;}?> value="" disabled></option>
                        <option <?php if($physical[3] == '1'){echo $s;}?> value="Slim">Slim</option>
                        <option <?php if($physical[3] == '2'){echo $s;}?> value="Skinny">Skinny</option>
                        <option <?php if($physical[3] == '3'){echo $s;}?> value="Athletic">Athletic</option>
                        <option <?php if($physical[3] == '4'){echo $s;}?> value="Muscular">Muscular</option>
                        <option <?php if($physical[3] == '5'){echo $s;}?> value="Large">Large</option>
                        <option <?php if($physical[3] == '6'){echo $s;}?> value="Chubby">Chubby</option>
                        <option <?php if($physical[3] == '7'){echo $s;}?> value="Average">Average</option>
                        <option <?php if($physical[3] == '8'){echo $s;}?> value="Fit">Fit</option>
                    </select>
                </div>
            </div>

			<div class="row">
                <div class="col-md-4">
                    Height (cm)
                </div>
	             <div class="col-md-8 form-group">
                    <input class="form-control" type="number" name="height" id="height" value"<?php echo $physical[4]?>">
                </div>
        	</div>
            <div id="warning-area-height">

            </div>

                <h2>Location</h2>

            <div class="row">
                <div class="col-md-4">
                    College
                </div>
                <div class="col-md-8 form-group">
                    <select name="college" id="college" class="optionlist form-control" >
                        <option <?php if(!$college){echo $s;}?> value="" disabled></option>
                        <option <?php if($college == '1'){echo $s;}?> value="UL">UL</option>
                        <option <?php if($college == '2'){echo $s;}?> value="LIT">LIT</option>
                        <option <?php if($college == '3'){echo $s;}?> value="UCC">UCC</option>
                        <option <?php if($college == '4'){echo $s;}?> value="UCD">UCD</option>
                        <option <?php if($college == '5'){echo $s;}?> value="DCU">DCU</option>
                        <option <?php if($college == '6'){echo $s;}?> value="CIT">CIT</option>
                        <option <?php if($college == '7'){echo $s;}?> value="DIT">DIT</option>
                        <option <?php if($college == '8'){echo $s;}?> value="GMIT">GMIT</option>
                        <option <?php if($college == '9'){echo $s;}?> value="UCG">UCG</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    County
                </div>
                <div class="col-md-8 form-group">
                    <select name="county" id="county" class="optionlist form-control" >
                        <option <?php if(!$county){echo $s;}?> value="" disabled></option>
                        <option <?php if($county == '1'){echo $s;}?> value="antrim">Antrim</option>
                        <option <?php if($county == '2'){echo $s;}?> value="armagh">Armagh</option>
                        <option <?php if($county == '3'){echo $s;}?> value="carlow">Carlow</option>
                        <option <?php if($county == '4'){echo $s;}?> value="cavan">Cavan</option>
                        <option <?php if($county == '5'){echo $s;}?> value="clare">Clare</option>
                        <option <?php if($county == '6'){echo $s;}?> value="cork">Cork</option>
                        <option <?php if($county == '7'){echo $s;}?> value="derry">Derry</option>
                        <option <?php if($county == '8'){echo $s;}?> value="donegal">Donegal</option>
                        <option <?php if($county == '9'){echo $s;}?> value="down">Down</option>
                        <option <?php if($county == '10'){echo $s;}?> value="dublin">Dublin</option>
                        <option <?php if($county == '11'){echo $s;}?> value="fermanagh">Fermanagh</option>
                        <option <?php if($county == '12'){echo $s;}?> value="galway">Galway</option>
                        <option <?php if($county == '13'){echo $s;}?> value="kerry">Kerry</option>
                        <option <?php if($county == '14'){echo $s;}?> value="kildare">Kildare</option>
                        <option <?php if($county == '15'){echo $s;}?> value="kilkenny">Kilkenny</option>
                        <option <?php if($county == '16'){echo $s;}?> value="laois">Laois</option>
                        <option <?php if($county == '17'){echo $s;}?> value="leitrim">Leitrim</option>
                        <option <?php if($county == '18'){echo $s;}?> value="limerick">Limerick</option>
                        <option <?php if($county == '19'){echo $s;}?> value="longford">Longford</option>
                        <option <?php if($county == '20'){echo $s;}?> value="louth">Louth</option>
                        <option <?php if($county == '21'){echo $s;}?> value="mayo">Mayo</option>
                        <option <?php if($county == '22'){echo $s;}?> value="meath">Meath</option>
                        <option <?php if($county == '23'){echo $s;}?> value="monaghan">Monaghan</option>
                        <option <?php if($county == '24'){echo $s;}?> value="offaly">Offaly</option>
                        <option <?php if($county == '25'){echo $s;}?> value="roscommon">Roscommon</option>
                        <option <?php if($county == '26'){echo $s;}?> value="sligo">Sligo</option>
                        <option <?php if($county == '27'){echo $s;}?> value="tipperary">Tipperary</option>
                        <option <?php if($county == '28'){echo $s;}?> value="tyrone">Tyrone</option>
                        <option <?php if($county == '29'){echo $s;}?> value="waterford">Waterford</option>
                        <option <?php if($county == '30'){echo $s;}?> value="westmeath">Westmeath</option>
                        <option <?php if($county == '31'){echo $s;}?> value="wexford">Wexford</option>
                        <option <?php if($county == '32'){echo $s;}?> value="wicklow">Wicklow</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    City
                </div>
                <div class="col-md-8 form-group">
                    <input class="form-control" type="text" name="city" id="city" value="<?php echo $city ?>" >
                </div>
            </div>
            <div id="warning-area-town">

            </div>

                <h2>Bio</h2>

            <div class="row">
                <div class="col-md-4">
                    Tell us about yourself. This will be seen by other users.
                </div>
                <div class="col-md-8 form-group">
                    <textarea class="form-control" rows="6" id="bio" name="bio" value"<?php echo $bio ?>" ></textarea>
                </div>
            </div>

            <div class="warning-area">
                <?php
                    if (isset($_GET['error'])) {
                        echo '<div class="alert alert-danger">';
                        echo base64_decode($_GET['error']);
                        echo '</div>';
                    }
                ?>
            </div>

            <button class="btn btn-success index-btn" type="submit" name="join">Submit</button>
            <div class="row">
                <div class="col-xs-12">

                </div>
            </div>
            </form>
        </div>

    </div>

    <!-- jQuery file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>

</html>
