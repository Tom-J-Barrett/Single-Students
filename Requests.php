<?php
include 'LoginCheck.php';
include 'GetRequests.php';
checkUser();
?>
<html>

<head>
    <title>Reguests | Single Students</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/index.css" media="screen" title="no title" charset="utf-8">
	
</head>

<body background = "images/Couple.jpg">
	<!-- Reference: https://donpnz.files.wordpress.com/2013/03/couple_crop-0023.jpg -->
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
	
	<body background = "images/Couple.jpg">
<!-- Reference: https://donpnz.files.wordpress.com/2013/03/couple_crop-0023.jpg -->
	<div class="container">
        	<div class="signuptext container">
		<h2><?php echo count($requestsInfo)?> Request(s)</h2>
		</div>
	</div>

	<?php
	$x = 0;
	$rPage = ($_GET['rPage']);


	if($rPage == 'default') {
		$_SESSION['rPage'] = 0;
		$x = 0;
	}
	else {
		$rPage = (int)($_GET['rPage']);
		if ($rPage == ((int)$_SESSION['rPage']) - 5) {
			$_SESSION['rPage'] -= 5;
			$x = $rPage;
		}
		else if($rPage == 5 && (int)$_SESSION['rPage'] == 5) {
			$_SESSION['rPage'] = 0;
			$x = 0;
		}
		else if($rPage == (int)$_SESSION['rPage']) {
			$x = $rPage;
		}
		else {
			$_SESSION['rPage'] = $rPage;
			$x = $rPage;
		}
	}

	$i = 0;
	$endPage = count($requestsInfo);
	while ($x < $endPage && $i < 5) {
	?>
		<div class="container">
			<div class="signuptext container">
				<div class="row">
					<div class="col-md-4">
						<img class="suggested-userpic" src="images/i02.png" height = "125" alt="Semi decent photo" />
					</div>
					<div class="col-md-8 form-group">
						<br><b><a href="UserProfileOther.php?user=<?php echo $requestsInfo[$x][3];?>"><?php echo ($requestsInfo[$x][0]);?></a></b>
						<br><i>From <?php echo ($requestsInfo[$x][1]);?>, going to <?php echo ($requestsInfo[$x][2]);?></i><br>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<button  onclick="location.href = 'AcceptRequest.php?user=<?php echo $requestsInfo[$x][3];?>';" class="btn btn-success index-btn" type="button" name="accept">Accept</button>
					</div>
					<div class="col-xs-6">
						<button  onclick="location.href = 'DeclineRequest.php?user=<?php echo $requestsInfo[$x][3];?>';"  class="btn btn-success index-btn" type="button" name="decline">Decline</button>
					</div>
				</div>
			</div>
		</div>
		<?php 
		; 
		$x++;
		$i++;
	} ?>
	<div class="container">
		<div class="signuptext container">

		<?php
		if ($_SESSION['rPage'] != 0) {
			?>
		<div class="col-xs-6">
			<button onclick="location.href = 'Requests.php?rPage=<?php echo $x - 5 -($x%5)?>';" class="btn btn-success index-btn"
					type="button" name="Previous">Previous
			</button>
		</div>
		<?php ;
		}
		if ($x != $endPage) {
		?>
		<div class="col-xs-6">
			<button onclick="location.href = 'Requests.php?rPage=<?php echo $x?>';" class="btn btn-success index-btn"
					type="button" name="Next">Next
			</button>
		</div>
		<?php ;
		}
		?>
		</div>
	</div>
    <!-- jQuery file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>
