<?php


if(isset($_POST["submit"])) {

    // Grabbing the data
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    // Instantiate SignupContr class
    include 'inloader.inc.php';
    $signup = new SignupCtrl($username, $pwd, $pwdrepeat, $email);

    // Running error handlers and user signup
    $signup->signupUser();

    // Going to back to front page
    header("location: ../index.php?error=none");

}
