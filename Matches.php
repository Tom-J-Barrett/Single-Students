<?php
include 'LoginCheck.php';
include 'GetMatches.php';
checkUser();
?>
<html>
<head>
    <title>Matches | Single Students</title>

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
		<div class="container col-xs-5">
			<h2><?php echo count($matchesInfo)?> Match(es)</h2>
		</div>
		<div class="container col-xs-7">
			<div class="row user-page-borders">
				<h4>Random Pick-Up Line:</h4>
				<div class="container col-xs-12">
					<div class="row">
						<script>
							var pickUpLines = ['You are hotter than the bottom of my laptop', 
					           'Did you ever realize screw rhymes with me and you?',
					           'Aside from being sexy, what do you do for a living?',
					           'Hey, my name\'s Microsoft. Can I crash at your place tonight?',
					           'Do you like raisins? How do you feel about a date?',
					           'If I could rearrange the alphabet, I\'d put \'U\' and \'I\' together.',
					           'Are you a parking ticket? Because you\'ve got FINE written all over you.',
					           'Well, here I am. What are your other two wishes?',
					           'It\'s a good thing I have my library card, because I am totally checking you out.',
					           'Life without you is like a broken pencil...pointless.',
					           'If you were a vegetable you\'d be a cute-cumber.',
					           'I seem to have lost my phone number. Can I have yours?',
					           'My doctor says I\'m lacking Vitamin U.',
					           'Have you been to the doctor lately? Cause I think you\'re lacking some Vitamin Me.',
					           'You look so familiar, didn\'t we take a class together? I could\'ve sworn we had chemistry.',
					           'You\'re so beautiful that you made me forget my pickup line.',
					           'Damn, if being sexy was a crime, you\'d be guilty as charged!',
					           'Do you work at Starbucks? Because I like you a latte.',
					           'Are you a banana? Because I find you a-peeling.',
					           'Me without you is like a nerd without braces, A shoe without laces, aSentenceWithoutSpaces.',
					           'I must be a snowflake, because I\'ve fallen for you.',
					           'There is something wrong with my cell phone. It doesn\'t have your number in it.',
					           'If you were a booger I\'d pick you first.',
					           'You wanna know what\'s beautiful? Read the first word again.',
					           'My love for you is like diarrhea, I just can\'t hold it in.',
					           'I like Legos, you like Legos, why don\'t we build a relationship?',
					           'I\'m new in town. Could you give me directions to your apartment?',
					           'What time do you have to be back in heaven?',
					           'Wouldn\'t we look cute on a wedding cake together?',
					           'Are your parents bakers? Cause they sure made you a cutie pie!',
					           'You\'re like pizza. Even when you are bad, you\'re good.',
					           'Are you a cat? Cause you are purrrfect.',
					           'If you were a tropical fruit, you\'d be a Fine-apple!',
					           'You must be a ninja, because you snuck into my heart.'];
						var pickUpLine = pickUpLines[Math.floor(Math.random()*pickUpLines.length)];
						document.write("\""+pickUpLine+ "\"");
						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<?php
	$x = 0;
	$mPage = ($_GET['mPage']);


	if($mPage == 'default') {
		$_SESSION['mPage'] = 0;
		$x = 0;
	}
	else {
		$mPage = (int)($_GET['mPage']);
		if ($mPage == ((int)$_SESSION['mPage']) - 5) {
			$_SESSION['mPage'] -= 5;
			$x = $mPage;
		}
		else if($mPage == 5 && (int)$_SESSION['mPage'] == 5) {
			$_SESSION['mPage'] = 0;
			$x = 0;
		}
		else if($mPage == (int)$_SESSION['mPage']) {
			$x = $mPage;
		}
		else {
			$_SESSION['mPage'] = $mPage;
			$x = $mPage;
		}
	}

	$i = 0;
	$endPage = count($matchesInfo);
	while ($x < $endPage && $i < 5) {
	?>
	<div class="container">
		<div class="signuptext container">
			<div class="row">
				<div class="col-md-4">
					<img class="suggested-userpic" src="images/i02.png" height = "125" alt="Semi decent photo" />
				</div>
				<div class="col-md-8 form-group">
					<br><b><a href="UserProfileOther.php?user=<?php echo $matchesInfo[$x][3];?>"><?php echo ($matchesInfo[$x][0]);?></a></b>
					<br><i>From <?php echo ($matchesInfo[$x][1]);?>, going to <?php echo ($matchesInfo[$x][2]);?></i>
					<br><i>Email: <?php echo ($matchesInfo[$x][4]);?></i>
				</div>
				<div class = "col-md-1 form group">
					<span  onclick="location.href = 'RemoveMatch.php?user=<?php echo $matchesInfo[$x][3];?>';" class = "glyphicon glyphicon-remove" ></span>
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
			if ($_SESSION['mPage'] != 0) {
				?>
			<div class="col-xs-6">
				<button onclick="location.href = 'Matches.php?mPage=<?php echo $x - 5 -($x%5)?>';" class="btn btn-success index-btn" type="button" name="Previous">Previous</button>
			</div>
			<?php ;
			}
			if ($x != $endPage) {
			?>
			<div class="col-xs-6">
				<button onclick="location.href = 'Matches.php?mPage=<?php echo $x?>';" class="btn btn-success index-btn" type="button" name="Next">Next</button>
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
