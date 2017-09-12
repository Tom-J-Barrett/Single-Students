<?php
include 'LoginCheck.php';
include 'GetReportedUsers.php';
checkAdmin();
?>
<html>
<head>
    <title>Reported Users | Single Students</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
     <link rel="stylesheet" href="css/index.css" media="screen" title="no title" charset="utf-8">
    
</head>

<div class="wrapper">
        <!-- This wrapper will contain everything to keep it aligned -->
        <div id = "navbar">
				<ul>
					<li><a href = "AdminPage.php?aPage=default" />Browse Users <span class = "glyphicon glyphicon-user"></span></a></li>
					<li><a href = "BannedUsers.php?bPage=default" />Banned Users <span class = "glyphicon glyphicon-ban-circle"></span></a></li>
					<li><a href = "Reported.php?rPage=default" />Reported Users <span class = "glyphicon glyphicon-exclamation-sign"></a></span></li>
					<li><a href = "AddAdmin.php?rPage=default" />Add Admin <span class = "glyphicon glyphicon-user"></a></span></li>
					<li>
					<form method="post" action="SearchBar.php"  id="searchform" class="navbar-form navbar-left" role="search">
							<div class="row">
								<div class="form-group">
									<input type="text" class="form-control"  style = "margin:0px"  id="name" name="name" placeholder="Username">
								</div>
								<button type="submit" class="btn btn-default" style = "height:34px;width:60px;margin:0px" ><span class="glyphicon glyphicon-search"></span></button>
							</div>
						</form>
					</li>
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
		<h2>Reported Users</h2>
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
					<div class="row">
					<div class="col-xs-6">
						<button  onclick="location.href = 'RemoveReport.php?user=<?php echo $userInfo[$x][3];?>';" class="btn btn-success index-btn" type="button" name="remove">Remove</button>
					</div>
				</div>
				</div>
				<div class="row">
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
						<button onclick="location.href = 'Reported.php?rPage=<?php echo $x - 5 -($x%5)?>';" class="btn btn-success index-btn"
							type="button" name="Previous">Previous
					</button>
				</div>
				<?php ;
			}
			if ($x != $endPage) {
				?>
				<div class="col-xs-6">
					<button onclick="location.href = 'Reported.php?rPage=<?php echo $x?>';" class="btn btn-success index-btn"
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
