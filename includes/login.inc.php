<?php


if(isset($_POST["submit"])) {

    // Grabbing the data
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    // Instantiate SignupContr class
    include 'inloader.inc.php';
    $login = new LoginCtrl($username, $pwd);

    // Running error handlers and user signup
    $login->loginUser();

    // Going to back to front page
    header("location: ../index.php?error=none");

}
