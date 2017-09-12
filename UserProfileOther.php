<?php
include 'LoginCheck.php';
loggedIn();
if(!isset($_SESSION)) {
    session_start();
}
//include 'Suggestions.php';
$_SESSION['otherUsername'] = $_GET["user"];
checkOwnUser();
require 'UserProfileDataOther.php';
?>
<html>
<head>
    <title>User Profile | Single Students</title>

    <!-- Latest compiled and minified CSS--> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
</head>

<body>
<?php
if ((isset($_SESSION['admin']))) {
?>
<div class="wrapper">
    <!-- This wrapper will contain everything to keep it aligned -->
    <div id = "navbar">
        <ul>
            <li><a href = "UserProfileOther.php?user=<?php echo $_SESSION['otherUsername']?>" />Profile <span class = "glyphicon glyphicon-user"></span></a></li>
            <li><a href = "EditProfileOther.php" />Edit Profile <span class = "glyphicon glyphicon-pencil"></span></a></li>
            <li><a href = "AdminPage.php?aPage=default" />Admin <span class = "glyphicon glyphicon-heart-empty"></span></a></li>
       
            <ul style="float:right;list-style-type:none;">
                <li><img src = "images/logo-flat.png" height = "50"/></li>
                <li><a href = "Logout.php" />Logout <span class = "glyphicon glyphicon-log-out"></span></a></li>
            </ul>
        </ul>
    </div>
</div>
<?php
;
} else {
?>
<div class="wrapper">
    <!-- This wrapper will contain everything to keep it aligned -->
    <div id = "navbar">
        <ul>
            <li><a href = "UserProfile.php" />Profile <span class = "glyphicon glyphicon-user"></span></a></li>
            <li><a href = "EditProfile.php" />Edit Profile <span class = "glyphicon glyphicon-pencil"></span></a></li>
            <li><a href = "Matches.php?mPage=default" />Matches <span class = "glyphicon glyphicon-heart-empty"></span></a></li>
            <li><a href = "Requests.php?rPage=default" />Requests <span class = "glyphicon glyphicon-question-sign"></span></a></li>
            <li><a href = "Search.php" />Search <span class = "glyphicon glyphicon-search"></span></a></li>
            <li><a href = "BrowseUsers.php?bPage=default" />Browse Users <span class = "glyphicon glyphicon-search"></span></a></li>
            <ul style="float:right;list-style-type:none;">
                <li><img src = "images/logo-flat.png" height = "50"/></li>
                <li><a href = "Logout.php" />Logout <span class = "glyphicon glyphicon-log-out"></span></a></li>
            </ul>
        </ul>
    </div>
</div>
<?php ;
}?>
<div class="container">
    <div class="row">
        <div class="container col-xs-9">
            <!-- user-page-sizelock is just to hold a minimum size -->
            <div class="row user-page-borders user-page-sizelock">
                <h3 style="margin: 0px 0px 10px"><?php echo $forename." ".$surname;?></h3>
                <img class="col-xs-5 user-profile-pic" src=<?php $image ?> alt="Semi decent photo" />

                <table class="userdata col-xs-7">
                    <tr>
                        <td class="align-left">Born on</td>
                        <td class="align-right"><?php echo $DOB; ?></td>
                    </tr>
                    <tr>
                        <td class="align-left">Goes to</td>
                        <td class="align-right"><?php echo $collegeName;?></td>
                    </tr>
                    <tr>
                        <td class="align-left">From</td>
                        <td class="align-right"><?php echo $city;?></td>
                    </tr>
                    <tr>
                        <td class="align-left">County</td>
                        <td class="align-right"><?php echo $countyName; ?></td>
                    </tr>
                    <tr>
                        <td class="align-left">Gender</td>
                        <td class="align-right"><?php echo $sex ?></td>
                    </tr>
                    <tr>
                        <td class="align-left">Seeking</td>
                        <td class="align-right"><?php echo $preference ?></td>
                    </tr>
                    <tr>
                        <td class="align-left">Likes</td>
                        <td class="align-right"><?php echo $hobby1; ?></td>
                    </tr>
                    <tr>
                        <td class="align-left"></td>
                        <td class="align-right"><?php echo $hobby2; ?></td>
                    </tr>
                    <tr>
                        <td class="align-left"></td>
                        <td class="align-right"><?php echo $hobby3; ?></td>
                    </tr>
                    <tr>
                        <td class="align-left"></td>
                        <td class="align-right"><?php echo $hobby4; ?></td>
                    </tr>
                    <tr>
                        <td class="align-left"></td>
                        <td class="align-right"><?php echo $hobby5; ?></td>
                    </tr>
					<tr>
                        <td class="align-left">Personality Traits</td>
                        <td class="align-right"><?php echo $trait1 ?></td>
                    </tr>
					<tr>
                        <td class="align-left"></td>
                        <td class="align-right"><?php echo $trait2 ?></td>
                    </tr>
					<tr>
                        <td class="align-left"></td>
                        <td class="align-right"><?php echo $trait3 ?></td>
                    </tr>
					<tr>
                        <td class="align-left">Hair Color</td>
                        <td class="align-right"><?php echo $hair ?></td>
                    </tr>
					<tr>
                        <td class="align-left">Hair Length</td>
                        <td class="align-right"><?php echo $hairlen ?></td>
                    </tr>
					<tr>
                        <td class="align-left">Eye Color</td>
                        <td class="align-right"><?php echo $eye ?></td>
                    </tr>
					<tr>
                        <td class="align-left">Height</td>
                        <td class="align-right"><?php echo $height ?></td>
                    </tr>
					<tr>
                        <td class="align-left">Body Type</td>
                        <td class="align-right"><?php echo $body ?></td>
                    </tr>
					<tr>
                        <td class="align-left">Skin Color</td>
                        <td class="align-right"><?php echo $skin ?></td>
                    </tr>
                </table>
            </div>

            <!-- **************Space below the first block************** -->
            <div class="row user-page-borders user-page-sizelock">
                <h3>Bio</h3>
                <?php echo $bio ?>
            </div>


        </div>
        <!-- ***************************************************************** -->
        <!-- Below this is the USER SUGGESTIONS Sidebar, above is the users profile -->
        <!-- Embedded if/else statement to check if user/admin and displays suggestions/admin options-->
         <?php
        if ((!isset($_SESSION['admin']))) {
            ?>
            <div class="container col-xs-3">
                <div class="row user-page-borders">
                    <h3>Options:</h3>
                    <div class="container col-xs-12">
					<div class="row">
                        <button  onclick="location.href = 'MatchUser.php';" class="btn btn-success index-btn" type="button" name="Next">Match</button>
                    </div>
                    <br>
                    <div class="row">
                        <button  onclick="location.href = 'ReportUser.php';" class="btn btn-success index-btn" type="button" name="Next">Report</button>
                    </div>
                    <br>
                    </div>
                </div>
            </div>
            <?php
            ;
        } else {
        ?>
        <!-- Below this is the ADMIN Sidebar -->
        <div class="container col-xs-3">
            <div class="row user-page-borders">
                <h3>Admin Options: </h3>
                <div class="container col-xs-12">
                    <div class="row">
                        <button  onclick="location.href = 'DeleteUser.php';" class="btn btn-success index-btn" type="button" name="Next">Delete</button>
                    </div>
                    <br>
                    <div class="row">
                        <button  onclick="location.href = 'BanUser.php';" class="btn btn-success index-btn" type="button" name="Next">Ban/Unban</button>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <?php
        ;
        }
        ?>
    </div>
</div>


</div>

<!-- jQuery file -->
<script src="js/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
