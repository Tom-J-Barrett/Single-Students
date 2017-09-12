<?php
include 'LoginCheck.php';
forHomeAndRegister();
?>
<html>

<head>
    <meta charset="utf-8">
    <title>Register | Single Students</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleReg.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/index.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="js/validate.js"></script>
    <link rel="icon" type="image/ico" href="favicon.ico" />

</head>

<body background="images/Couple.jpg">
    <!-- Reference: https://donpnz.files.wordpress.com/2013/03/couple_crop-0023.jpg -->
    <div class="container">
        <div class="row">
            <div class="headtext col-lg-12">
                <img src="images/Logo.png" alt="Single Students" />
            </div>
        </div>
        <div class="signuptext container">
            <div class="row">
                <h2 id="subtitle">
                        Register now<br/>to meet new students today!
                </h2>
            </div>


            <form action="RegisterUser.php" method="POST" onsubmit="return validation()" id="inputs">

                <div class="row">
                    <div class="col-md-3">
                        Forename
                    </div>
                    <div class="col-md-9 form-group">
                        <input class="form-control" type="text" name="forename" id="forename" placeholder="John" >
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-3">
                        Surname
                    </div>
                    <div class="col-md-9 form-group">
                        <input class="form-control" type="text" name="surname" id="surname" placeholder="Doe" >
                    </div>
                </div>
                <div id="warning-area-name">

                </div>

                <div class="row">
                    <div class="col-md-3">
                        Username
                    </div>
                    <div class="col-md-9 form-group">
                        <input class="form-control" type="text" name="username" id="username" placeholder="JohnDoe100" >
                    </div>
                </div>
                <div id="warning-area-username">

                </div>

                <div class="row">
                    <div class="col-md-3">
                        Password
                    </div>
                    <div class="col-md-9 form-group">
                        <input class="form-control" type="password" name="password" id="password" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        Confirm Password
                    </div>
                    <div class="col-md-9 form-group">
                        <input class="form-control" type="password" name="password2" id="password2" >
                    </div>
                </div>
                <div id="warning-area-password">

                </div>

                <div class="row">
                    <div class="col-md-3">
                        Student Email
                    </div>
                    <div class="col-md-9 form-group">
                        <input class="form-control" type="email" name="email" id="email" placeholder="studentNum@example.ie" >
                    </div>
                </div>
                <div id="warning-area-email">

                </div>

                <!-- <div class="row">
                    <div class="col-md-3">
                        Upload Photo
                    </div>
                    <div class="col-md-9 form-group">
                        <form action="demo_form.asp">
                            <input type="file" name="image" id="image" accept="image/*">
                        </form>
                    </div>
                </div> -->

                <h4>Personal Info</h4>
                <div class="row">
                    <div class="col-md-3">
                        I am
                    </div>
                    <div class="form-group col-xs-9">
                        <select class="form-control" id="sex" name="sex">
                            <option value="Male">a man</option>
                            <option value="Female">a woman</option>
                        </select>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        Looking for
                    </div>
                    <div class="form-group col-xs-9">
                        <select class="form-control" id="preference" name="preference">
                            <option value="Male">a man</option>
                            <option value="Female">a woman</option>
                        </select>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        I was born on
                    </div>
                    <div class="form-group col-xs-3">
                        <select class="form-control" id="day" name="day">
                            <option value="" disabled selected>Day</option>
                            <option value="01">1</option>
                            <option value="02">2</option>
                            <option value="03">3</option>
                            <option value="04">4</option>
                            <option value="05">5</option>
                            <option value="06">6</option>
                            <option value="07">7</option>
                            <option value="08">8</option>
                            <option value="09">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>

                        </select>

                    </div>
                    <div class="form-group col-xs-3">
                        <select class="form-control" id="month" name="month">
                            <option value="" disabled selected>Month</option>
                            <option value="1">Jan</option>
                            <option value="2">Feb</option>
                            <option value="3">Mar</option>
                            <option value="4">Apr</option>
                            <option value="5">May</option>
                            <option value="6">Jun</option>
                            <option value="7">Jul</option>
                            <option value="8">Aug</option>
                            <option value="9">Sep</option>
                            <option value="10">Oct</option>
                            <option value="11">Nov</option>
                            <option value="12">Dec</option>
                        </select>

                    </div>
                    <div class="form-group col-xs-3">
                        <select class="form-control" id="year" name="year">
                            <option value="" disabled selected>Year</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                            <option value="1979">1979</option>
                            <option value="1978">1978</option>
                            <option value="1977">1977</option>
                            <option value="1976">1976</option>
                            <option value="1975">1975</option>
                            <option value="1974">1974</option>
                            <option value="1973">1973</option>
                            <option value="1972">1972</option>
                            <option value="1971">1971</option>
                            <option value="1970">1970</option>
                            <option value="1969">1969</option>
                            <option value="1968">1968</option>
                            <option value="1967">1967</option>
                            <option value="1966">1966</option>
                            <option value="1965">1965</option>
                            <option value="1964">1964</option>
                            <option value="1963">1963</option>
                            <option value="1962">1962</option>
                            <option value="1961">1961</option>
                            <option value="1960">1960</option>
                            <option value="1959">1959</option>
                            <option value="1958">1958</option>
                            <option value="1957">1957</option>
                            <option value="1956">1956</option>
                            <option value="1955">1955</option>
                            <option value="1954">1954</option>
                            <option value="1953">1953</option>
                            <option value="1952">1952</option>
                            <option value="1951">1951</option>
                            <option value="1950">1950</option>

                        </select>

                    </div>
                </div>
                <div id="warning-area-date">

                </div>

                <h4>College and Location</h4>
                <div class="row">
                    <div class="col-md-3">
                        College
                    </div>
                    <div class="col-md-9 form-group">
                        <select name="college" id="college" class="optionlist form-control" >
                            <option value="" disabled selected>Pick a College</option>
                            <option value="ul">UL</option>
                            <option value="lit">LIT</option>
                            <option value="ucc">UCC</option>
                            <option value="ucd">UCD</option>
                            <option value="dcu">DCU</option>
                            <option value="cit">CIT</option>
                            <option value="dit">DIT</option>
                            <option value="gmit">GMIT</option>
                            <option value="ucg">UCG</option>
                            <option value="other">other</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        County
                    </div>
                    <div class="col-md-9 form-group">
                        <select name="county" id="county" class="optionlist form-control" >
                            <option value="" disabled selected>Pick a County</option>
                            <option value="antrim">Antrim</option>
                            <option value="armagh">Armagh</option>
                            <option value="carlow">Carlow</option>
                            <option value="cavan">Cavan</option>
                            <option value="clare">Clare</option>
                            <option value="cork">Cork</option>
                            <option value="derry">Derry</option>
                            <option value="donegal">Donegal</option>
                            <option value="down">Down</option>
                            <option value="dublin">Dublin</option>
                            <option value="fermanagh">Fermanagh</option>
                            <option value="galway">Galway</option>
                            <option value="kerry">Kerry</option>
                            <option value="kildare">Kildare</option>
                            <option value="kilkenny">Kilkenny</option>
                            <option value="laois">Laois</option>
                            <option value="leitrim">Leitrim</option>
                            <option value="limerick">Limerick</option>
                            <option value="longford">Longford</option>
                            <option value="louth">Louth</option>
                            <option value="mayo">Mayo</option>
                            <option value="meath">Meath</option>
                            <option value="monaghan">Monaghan</option>
                            <option value="offaly">Offaly</option>
                            <option value="roscommon">Roscommon</option>
                            <option value="sligo">Sligo</option>
                            <option value="tipperary">Tipperary</option>
                            <option value="tyrone">Tyrone</option>
                            <option value="waterford">Waterford</option>
                            <option value="westmeath">Westmeath</option>
                            <option value="wexford">Wexford</option>
                            <option value="wicklow">Wicklow</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        Town
                    </div>
                    <div class="col-md-9 form-group">
                        <input class="form-control" type="text" name="town" id="town" >
                    </div>
                </div>
                <div id="warning-area-town">

                </div>

                <h4>Credit Card Details</h4>

                <div class="row">
                    <div class="col-md-3">
                        Name on card
                    </div>
                    <div class="col-md-9 form-group">
                        <input class="form-control" type="text" name="cardName" id="cardName" placeholder="John Doe" >
                    </div>
                </div>
                <div id="warning-area-nameoncard">

                </div>

                <div class="row">
                    <div class="col-md-3">
                        Card Number
                    </div>
                    <div class="col-md-9 form-group">
                        <input class="form-control" type="text" name="cardNum" id="cardNum" >
                    </div>
                </div>
                <div id="warning-area-cardnumber">

                </div>

                <div class="row">
                    <div class="col-md-3">
                        CVV
                    </div>
                    <div class="col-md-9 form-group">
                        <input class="form-control" type="text" name="cvv" id="cvv" >
                    </div>
                </div>
                <div id="warning-area-cvv">

                </div>

                <div class="row">
                    <div class="col-md-3">
                        Type
                    </div>
                    <div class="col-md-9 form-group">
                        <select class="form-control" id="type" name="type">
                            <option value="" disabled selected>Select your card type</option>
                            <option value="visa">Visa</option>
                            <option value="mastercard">MasterCard</option>
                            <option value="laser">Laser</option>
                            <option value="maestro">Maestro</option>
                        </select>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        Expiry Date
                    </div>

                    <div class="form-group col-xs-4">
                        <select class="form-control" id="cardMonth" name="cardMonth">
                            <option value="" disabled selected>Month</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>

                    </div>

                    <div class="form-group col-xs-4">
                        <select class="form-control" id="cardYear" name="cardYear">
                            <option value="" disabled selected>Year</option>
                            <option value="16">2016</option>
                            <option value="17">2017</option>
                            <option value="18">2018</option>
                            <option value="19">2019</option>
                            <option value="20">2020</option>
                            <option value="21">2021</option>
                            <option value="22">2022</option>
                            <option value="23">2023</option>
                            <option value="24">2024</option>
                            <option value="25">2025</option>
                            <option value="26">2026</option>
                        </select>

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

                <button type="submit"  class="btn btn-success index-btn" id="submit" name="submit">Join Now</button>
                <!-- Not sure what the [onclick="location.href = 'RegisterUser.php';"] is about so I kept it but removed it
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Button cannot be put inside this row, POST doesn't work otherwise
                        <!-- Going to patch this, since right now I doesn't run the PHP and instead runs only the JS.
                            -Will


                    </div>
                </div>-->
            </form>
        </div>
    </div>

    <!-- jQuery file -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>

</html>
