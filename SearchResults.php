<?php
include 'LoginCheck.php';
include 'SearchResultsCode.php';
?>
<html>
<head>
    <title>Search Results | Single Students</title>

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
				<li><a href = "BrowseUsers.php?bPage=default" />Browse Users <span class = "glyphicon glyphicon-search"></span></li></a>
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
		<h2><?php echo count($matchesInfo);?> match(es) found</h2>
		</div>
	</div>
	
	<?php
	$y = 0;
	$sPage = ($_GET['sPage']);


	if($sPage == 'default') {
		$_SESSION['sPage'] = 0;
		$y = 0;
	}
	else {
		$sPage = (int)($_GET['sPage']);
		if ($sPage == ((int)$_SESSION['sPage']) - 5) {
			$_SESSION['sPage'] -= 5;
			$y = $sPage;
		}
		else if($sPage == 5 && (int)$_SESSION['sPage'] == 5) {
			$_SESSION['sPage'] = 0;
			$y = 0;
		}
		else if($sPage == (int)$_SESSION['sPage']) {
			$y = $sPage;
		}
		else {
			$_SESSION['sPage'] = $sPage;
			$y = $sPage;
		}
	}

	$i = 0;
	$endPage = count($matchesInfo);
	while ($y < $endPage && $i < 5) {
	?>
		<div class="container">
		<div class="signuptext container">
			<div class="row">
				<div class="col-md-4">
					<img class="suggested-userpic" src="images/i02.png" height = "125" alt="Semi decent photo" />
				</div>
				<div class="col-md-8 form-group">
					<br><b><a href="UserProfileOther.php?user=<?php echo $matchesInfo[$y][3];?>"><?php echo ($matchesInfo[$y][0]);?></a></b>
					<br><i><?php  $DOB2=age($matchesInfo[$y][2]); echo " ".$DOB2." years old."?></i>
					<br><i> Going to <?php echo ($matchesInfo[$y][1]);?></i>
				</div>
			</div>
		</div>
		</div>
	<?php
		;
		$y++;
		$i++;
	} ?>
<div class="container">
	<div class="signuptext container">
		<?php
		if ($_SESSION['sPage'] != 0) {
			?>
		<div class="col-xs-6">
		<button onclick="location.href = 'SearchResults.php?sPage=<?php echo $y - 5 -($y%5)?>';" class="btn btn-success index-btn"
				type="button" name="Previous">Previous
		</button>
		</div>
		<?php ;
		}
		if ($y != $endPage) {
		?>
		<div class="col-xs-6">
			<button onclick="location.href = 'SearchResults.php?sPage=<?php echo $y?>';" class="btn btn-success index-btn"
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
