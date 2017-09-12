<?php
include 'LoginCheck.php';
checkUser();
?>
<html>
<head>
    <title>Search | Single Students</title>

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
<h2>Defined Search</h2>
			<form action="SearchResults.php?sPage=default" method="POST" id="inputs">
			<div class="row">
				<div class="col-md-4">
					Gender
				</div>
					<div class="col-md-8 form-group">
						<select name="gender" id="gender" class="optionlist form-control">
							<option value="noValue"></option>
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
                        Age
					</div>
					<div class="col-md-8 form-group">
						<select name="age" id="age" class="optionlist form-control">
							<option value="noValue"></option>
							<option value="18-21">18-21</option>
							<option value="21-25">21-25</option>
							<option value="25-30">25-30</option>
							<option value="30-35">30-35</option>
							<option value="35-40">35-40</option>
							<option value="40-50">40-50</option>
							<option value="50-60">50-60</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						Hobby/Like/Interest
					</div>
				<div class="col-md-8 form-group">
					<select name="hobby2" id="hobby2" class="optionlist form-control">
						<option value="noValue"></option>
						<option value="American Football">American Football</option>
						<option value="Art">Art</option>
						<option value="Athletics">Athletics</option>
						<option value="Badminton">Badminton</option>
						<option value="Basketball">Basketball</option>
						<option value="Camping">Camping</option>
						<option value="Climbing">Climbing</option>
						<option value="Clubbing">Clubbing</option>
						<option value="Coding">Coding</option>
						<option value="Cricket">Cricket</option>
						<option value="Cycling">Cycling</option>
						<option value="Dance">Dance</option>
						<option value="Diving">Driving</option>
						<option value="Drama">Drama</option>
						<option value="Driving">Diving</option>
						<option value="Eating">Eating</option>
						<option value="Fashion">Fashion</option>
						<option value="Fishing">Fishing</option>
						<option value="Frisbee">Frisbee</option>
						<option value="GAA">GAA</option>
						<option value="Gaming">Gaming</option>
						<option value="Golf">Golf</option>
						<option value="Handball">Handball</option>
						<option value="Hiking">Hiking</option>
						<option value="Hockey">Hockey</option>
						<option value="Horseriding">Horseriding</option>
						<option value="Kayaking">Kayaking</option>
						<option value="Movies">Movies</option>
						<option value="Music">Music</option>
						<option value="Netball">Netball</option>
						<option value="Netflix">Netflix</option>
						<option value="Reading">Reading</option>
						<option value="Rugby">Rugby</option>
						<option value="Running">Running</option>
						<option value="Singing">Singing</option>
						<option value="Skateboarding">Skateboarding</option>
						<option value="Skiing">Skiing</option>
						<option value="Soccer">Soccer</option>
						<option value="Socializing">Socializing</option>
						<option value="Surfing">Surfing</option>
						<option value="Swimming">Swimming</option>
						<option value="Tennis">Tennis</option>
						<option value="Walking">Walking</option>
                    </select>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					Personality Trait
				</div>
				<div class="col-md-8 form-group">
					<select name="trait1" id="trait1" class="optionlist form-control">
						<option value="noValue"></option>
						<option value="Adventurous">Adventurous</option>
						<option value="Ambitious">Ambitious</option>
						<option value="Charismatic">Charismatic</option>
						<option value="Charming">Charming</option>
						<option value="Clever">Clever</option>
						<option value="Clumsy">Clumsy</option>
						<option value="Confident">Confident</option>
						<option value="Enthuasiastic">Enthuasiastic</option>
						<option value="Friendly">Friendly</option>
						<option value="Fun">Fun</option>
						<option value="Funny">Funny</option>
						<option value="Generous">Generous</option>
						<option value="Happy">Happy</option>
						<option value="Hardworking">Hardworking</option>
						<option value="Kind">Kind</option>
						<option value="Lazy">Lazy</option>
						<option value="Optimistic">Optimistic</option>
						<option value="Outgoing">Outgoing</option>
						<option value="Quiet">Quiet</option>
						<option value="Relaxed">Relaxed</option>
						<option value="Smart">Smart</option>
						<option value="Stylish">Stylish</option>
						<option value="Trustworthy">Trustworthy</option>
						<option value="Witty">Witty</option>
					</select>
                </div>
			</div>

			<!--<div class="row">
				<div class="col-md-4">
					Eye colour
				</div>
				<div class="col-md-8 form-group">
					<select name="eyes" id="eyes" class="optionlist form-control">
						<option value=" "></option>
						<option value="brown">Brown</option>
						<option value="blue">Blue</option>
						<option value="green">Green</option>
						<option value="grey">Grey</option>
						<option value="hazel">Hazel</option>
						<option value="olive">Olive</option>
					</select>
				</div>
			</div>


			<div class="row">
				<div class="col-md-4">
					Hair colour
				</div>
				<div class="col-md-8 form-group">
					<select name="haircolour" id="haircolour" class="optionlist form-control">
						<option value="noValue"></option>
						<option value="black">Black</option>
						<option value="brown">Brown</option>
						<option value="darkbrown">Dark Brown</option>
						<option value="lightbrown">Light Brown</option>
						<option value="blond">Blond</option>
						<option value="darkblond">Dark Blond</option>
						<option value="lightblond">Light Blond</option>
						<option value="strawberryblond">Strawberry Blond</option>
						<option value="red">Red</option>
						<option value="dyed">Dyed</option>
						<option value="bald">Bald</option>
					</select>
				</div>
			</div>

            <div class="row">
				<div class="col-md-4">
                    Skin tone
				</div>
				<div class="col-md-8 form-group">
					<select name="skintone" id="skintone" class="optionlist form-control">
						<option value="noValue"></option>
						<option value="vfair">Very Fair</option>
						<option value="fair">Fair</option>
						<option value="olive">Olive</option>
						<option value="sblack">Brown/Black</option>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					Body type
				</div>
				<div class="col-md-8 form-group">
					<select name="bodytype" id="bodytype" class="optionlist form-control">
						<option value="noValue"></option>
						<option value="slim">Slim</option>
						<option value="skinny">Skinny</option>
						<option value="athletic">Athletic</option>
						<option value="muscular">Muscular</option>
						<option value="large">Large</option>
						<option value="chubby">Chubby</option>
						<option value="average">Average</option>
						<option value="fit">Fit</option>
					</select>
				</div>
			</div>

			<div class="row">
                        <div class="col-md-4">
                            Height (cm)
                        </div>
			<div class="col-md-8 form-group">
                            <input class="form-control" type="number" name="height" id = "height">
                        </div>

                    	</div>-->

            <div class="row">
                <div class="col-md-4">
                    College
                </div>
				<div class="col-md-8 form-group">
					<select name="college" id="college" class="optionlist form-control">
						<option value="noValue"></option>
						<option value="UL">UL</option>
						<option value="LIT">LIT</option>
						<option value="UCC">UCC</option>
						<option value="UCD">UCD</option>
						<option value="DCU">DCU</option>
						<option value="CIT">CIT</option>
						<option value="DIT">DIT</option>
						<option value="GMIT">GMIT</option>
						<option value="UCG">UCG</option>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<button onclick="location.href = 'SearchResults.php?sPage=default';" class="btn btn-success index-btn" type="submit" name="search">Search</button>
				</div>
			</div>
		</div>
    </div>
	</form>

	<!-- jQuery file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>

</html>
