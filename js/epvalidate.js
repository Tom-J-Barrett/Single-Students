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
        document.getElementById('warning-area-name').innerHTML = '<div class="alert alert-danger">Names may only contain alphabetic characters.</div>';
        return false;
    } else if (!chkName(surname)) {
        document.getElementById('warning-area-name').innerHTML = '<div class="alert alert-danger">Names may only contain alphabetic characters.</div>';
        return false;
    } else if (!chkPass()) {
        document.getElementById('warning-area-password').innerHTML = '<div class="alert alert-danger">Passwords must match and cannot be blank</div>';
        return false;
    } else if (!chkName(town)) {
        document.getElementById('warning-area-town').innerHTML = '<div class="alert alert-danger">Town name may only contain alphabetic characters.</div>';
        return false;
    } else if (!chkHeight()) {
        document.getElementById('warning-area-height').innerHTML = '<div class="alert alert-danger">Town name may only contain alphabetic characters.</div>';
        return false;
    } else {
        return true;

    }

}

function cleanError(){
    document.getElementById('warning-area-name').innerHTML = '';
    document.getElementById('warning-area-password').innerHTML = '';
    document.getElementById('warning-area-town').innerHTML = '';
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
    var namePattern = /^[a-zA-Z]\s'\.-]*$/;

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

function chkHeight(){
    var height = document.getElementById("height").value;
    //HTML5 checks if number
    if (height > 240 || height < 100 ) {
        return false;
    }
    return true;
}
