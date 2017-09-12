function validation() {

    var forename = document.getElementById("forename").value;
    var surname = document.getElementById("surname").value;
    var town = document.getElementById("town").value;
    /* To reset the warnings the error of one test is deleted in the next test.
    *
    *
    *This should prevent the PHP from running by using an onsubmit attribute in the HTML form.
    *If JS is disabled, that isn't a problem either.
    **/
    cleanError();
    if (!chkName(forename)) {
        document.getElementById('warning-area-name').innerHTML = '<div class="alert alert-danger">First names may only contain alphabetic characters.</div>';
        return false;
    } else if (!chkName(surname)) {
        document.getElementById('warning-area-name').innerHTML = '<div class="alert alert-danger">Surnames may only contain alphabetic characters.</div>';
        return false;
    } else if (!chkUsername()) {
        document.getElementById('warning-area-username').innerHTML = '<div class="alert alert-danger">Username must be under 15 characters long.</div>';
        return false;
    } else if (!chkPass()) {
        document.getElementById('warning-area-password').innerHTML = '<div class="alert alert-danger">Passwords must match and must be 8 characters long.</div>';
        return false;
    } else if (!chkEmail()) {
        document.getElementById('warning-area-email').innerHTML = '<div class="alert alert-danger">Email in incorrect format.</div>';
        return false;
    } else if (!chkDate()) {
        document.getElementById('warning-area-date').innerHTML = '<div class="alert alert-danger">Incorrent date format, please enter a correct date</div>';
        return false;
    } else if (!chkName(town)) {
        document.getElementById('warning-area-town').innerHTML = '<div class="alert alert-danger">Town name may only contain alphabetic characters.</div>';
        return false;
    } else if (!chkCardName()) {
        document.getElementById('warning-area-nameoncard').innerHTML = '<div class="alert alert-danger">Name on credit card may only contain alphabetic characters and cannot be blank</div>';
        return false;
    } else if (!chkCVV()) {
        document.getElementById('warning-area-cvv').innerHTML = '<div class="alert alert-danger">CVV in incorrect format</div>';
        return false;
    } else if ((!chkCard())) {
        document.getElementById('warning-area-cardnumber').innerHTML = '<div class="alert alert-danger">Card Number is incorrect</div>';
        return false;
    } else {
        return true;

    }

}

function cleanError(){
    document.getElementById('warning-area-name').innerHTML = '';
    document.getElementById('warning-area-username').innerHTML = '';
    document.getElementById('warning-area-password').innerHTML = '';
    document.getElementById('warning-area-email').innerHTML = '';
    document.getElementById('warning-area-date').innerHTML = '';
    document.getElementById('warning-area-town').innerHTML = '';
    document.getElementById('warning-area-nameoncard').innerHTML = '';
    document.getElementById('warning-area-cardnumber').innerHTML = '';
    document.getElementById('warning-area-cvv').innerHTML = '';
}

function chkEmail() {
    var emailAddr = document.getElementById("email").value;
    var emailPattern = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
    // The /pattern/ is denoted by the two slashes

    if (!emailAddr) {
        return false;
    }
    return emailPattern.test(emailAddr);
}

function chkDate() {
    var date = document.getElementById("day").value;
    var month = document.getElementById("month").value;
    var year = document.getElementById("year").value;

    var leapYear = false;

    //Number of days for each month
    var ListofDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

    if (!date || !month || !year) {
        return false;
    }
    if (month === 1 || month > 2) {
        if (date > ListofDays[month - 1]) {
            return false;
        }
    }
    //Checking in the case of a leap year
    if (month == 2) {
        if ((year % 4 === 0 && (year % 100 !== 0)) || (year % 400 === 0)) {
            leapYear = true;
        }

        if ((leapYear === false) && (date >= 29)) {
            //Insert the X
            return false;
        }

        if ((leapYear === true) && (date > 29)) {
            //Insert the X
            return false;
        }
    }
    return true;
}

function chkPass() {
    var pwd = document.getElementById("password").value;
    var pwd2 = document.getElementById("password2").value;

    if (pwd.length < 7 || pwd2.length < 7) {
        return false;
    }
    if (pwd == pwd2) {
        return true;
    } else {
        return false;
    }

}

function chkName(name) {
    // For Name, Surname, Name on Card.
    var namePattern = /^[a-zA-Z\s'.-]*$/;

    if (name === '' || name === null) {
        return false;
    } else if (!namePattern.test(name)) {
        return false;
    } else {
        return true;
    }
    // This is instead checking for any non alphabetic characters
    // And return true if none found as opposed to false.

}


function chkCardName() {
    // For Name, Surname, Name on Card.
    var name = document.getElementById("cardName").value;
    var namePattern = /^[a-zA-Z][a-zA-Z]\s*$/;

    if (name === '' || name === null) {
        return false;
    } else if (namePattern.test(name)) {
        return false;
    } else {
        return true;
    }
    // This is instead checking for any non alphabetic characters
    // And return true if none found as opposed to false.

}

function chkUsername() {
    var uname = document.getElementById("username").value;
    var userPattern = /[a-zA-Z1-9_-]/;
    if (userPattern.test(uname)==false) {
        return false;
    }
	if(uname.length>15)
		return false;
    return userPattern.test(uname);

}

function chkCVV() {

    var cvv = document.getElementById("cvv").value;
    var cvvPattern = /[0-9]{3}/;
    if (!cvv) {
        return false;
    }
    return cvvPattern.test(cvv);
}

function chkCard() {
    var cardType = document.getElementById("type").value;
    var cardNum = document.getElementById("cardNum").value;
    var cardPattern;

    if (!cardNum) {
        return false;
    }

    switch (cardType) {
        case 'visa':
            cardPattern = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
            return cardNum.value.match(cardPattern);

        case 'mastercard':
            cardPattern = /^(?:5[1-5][0-9]{14})$/;
            return cardNum.value.match(cardPattern);

        case 'laser':
            cardPattern = /^(?:(6304|6706|6709|6771)[0-9]{12,15})$/;
            return cardNum.value.match(cardPattern);

        case 'maestro':
            cardPattern = /^(?:(5018|5020|5038|6304|6759|6761|6763)[0-9]{8,15}?)$/;
            return cardNum.value.match(cardPattern);
    }
    return false;

}
