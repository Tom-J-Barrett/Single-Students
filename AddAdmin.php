<?php
include 'LoginCheck.php';
checkAdmin();
?>
<html>

<head>
    <title>Add Admin | Single Students</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="css/index.css" media="screen" title="no title" charset="utf-8">

</head>

<body background = "images/Couple.jpg">
<!-- Reference: https://donpnz.files.wordpress.com/2013/03/couple_crop-0023.jpg -->
<div class="wrapper">
	<!-- This wrapper will contain everything to keep it aligned -->
	<div id = "navbar">
		<ul>
			<li><a href = "AdminPage.php?aPage=default" />Browse Users <span class = "glyphicon glyphicon-user"></span></a></li>
			<li><a href = "BannedUsers.php?bPage=default" />Banned Users <span class = "glyphicon glyphicon-ban-circle"></a></li>
			<li><a href = "Reported.php?rPage=default" />Reported Users <span class = "glyphicon glyphicon-exclamation-sign"></a></li>			
			<li><a href = "AddAdmin.php?rPage=default" />Add Admin <span class = "glyphicon glyphicon-user"></a></li>			
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
				<li><a href = "Logout.php" />Logout <span class = "glyphicon glyphicon-log-out"></a></li>
			</ul>
		</ul>
	</div>
</div>

<body background = "images/Couple.jpg">
    <div class="container">
        <div class="signuptext container">
<h2>Add Admin</h2>
	<form action="AdminAdd.php" method="POST">

		<div class="row">
                	<div class="col-md-3">
				Username
			</div>
			<div class="col-md-9 form-group">
				<input class="form-control" type="text" name="admin" id="admin" placeholder="johnDoe100">
               		</div>
               	</div>

               	<div class="row">
                	<div class="col-md-3">
				Password
			</div>
			<div class="col-md-9 form-group">
				<input class="form-control" type="password" name = "password" id="password" placeholder="password">
                	</div>
		</div>


		<div class="row">
			<div class="col-xs-12">
				<button onclick="location.href = 'AdminAdd.php';" class="btn btn-success index-btn" type="submit" name="add">Add</button>
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
