<?php
include 'LoginCheck.php';
checkUser();
include 'GetAllUsers.php';
?>
<html>
<head>
    <title>Browse Users | Single Students</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/index.css" media="screen" title="no title" charset="utf-8">
</head>



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
		<h2>Users</h2>
		</div>
	</div>

	<?php
	$x = 0;
	$bPage = ($_GET['bPage']);


	if($bPage == 'default') {
		$_SESSION['bPage'] = 0;
		$x = 0;
	}
	else {
		$bPage = (int)($_GET['bPage']);
		if ($bPage == ((int)$_SESSION['bPage']) - 5) {
			$_SESSION['bPage'] -= 5;
			$x = $bPage;
		}
		else if($bPage == 5 && (int)$_SESSION['bPage'] == 5) {
			$_SESSION['bPage'] = 0;
			$x = 0;
		}
		else if($bPage == (int)$_SESSION['bPage']) {
			$x = $bPage;
		}
		else {
			$_SESSION['bPage'] = $bPage;
			$x = $bPage;
		}
	}

	$i = 0;
	$endPage = count($userInfo);
	while ($x < $endPage && $i < 5) {
		?>
		<div class="container">
			<div class="signuptext container">
				<div class="row">
					<div class="col-md-4">
						<img class="suggested-userpic" src="images/i02.png" height = "125" alt="Semi decent photo" />
					</div>
					<div class="col-md-8 form-group">
						<br><b><a href="UserProfileOther.php?user=<?php echo $userInfo[$x][3];?>"><?php echo ($userInfo[$x][0]);?></a></b>
									<br><i>From <?php echo ($userInfo[$x][1]);?>, going to <?php echo ($userInfo[$x][2]);?></i><br><br>
					</div>
				</div>
			</div>
		</div>
		<?php
		;
		$x++;
		$i++;
	} ?>
	<?php
	if ($_SESSION['bPage'] != 0) {
		$prev = $x - 5 -($x%5);
		?>
	<div class="container">
		<div class="signuptext container">
			<div class="col-xs-12">
				<button  onclick="location.href = 'BrowseUsers.php?bPage=<?php echo $prev?>';" class="btn btn-success index-btn" type="button" name="Previous">Previous</button>
			</div>
			</div>
			</div>
		<?php ;
	}
	if ($x != $endPage) {
	?>
	<div class="container">
		<div class="signuptext container">
			<div class="col-xs-12">
			<button  onclick="location.href = 'BrowseUsers.php?bPage=<?php echo $x?>';" class="btn btn-success index-btn" type="button" name="Next">Next</button>
			</div>
		</div>
	</div>
	<?php ;
	} ?>
		
    <!-- jQuery file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>

</html>
