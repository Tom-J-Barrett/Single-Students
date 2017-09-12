<?php

function loggedIn() {
    if(!isset($_SESSION))
    {
        session_start();
    }
    if (!isset($_SESSION['username'])) {
        header("Location: Home.php");
    }
}

function checkAdmin(){
    if(!isset($_SESSION))
    {
        session_start();
    }
    if (!isset($_SESSION['admin'])) {
        if (!isset($_SESSION['username'])) {
            header("Location: Home.php");
        } else {
            header("Location: UserProfile.php");
        }
    }
}

function checkUser() {
    if(!isset($_SESSION))
    {
        session_start();
    }
    if (isset($_SESSION['username'])) {
        if (isset($_SESSION['admin'])) {
            header("Location: AdminPage.php");
        }
    } else {
        header("Location: Home.php");
    }
}

function forHomeAndRegister() {
    if(!isset($_SESSION))
    {
        session_start();
    }
    if(isset($_SESSION['username'])) {
        if(isset($_SESSION['admin'])) {
            header("Location: AdminPage.php");
        } else {
            header("Location: UserProfile.php");
        }
    }
}

function checkOwnUser() {
    if(!isset($_SESSION))
    {
        session_start();
    }
    if ($_SESSION['username'] == $_SESSION['otherUsername']) {
        header("Location: UserProfile.php");
    }
}