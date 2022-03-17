<?php



if(isset($_POST["submit"])) {

    // Grabbing the data
    $proj_name = $_POST["proj_name"];
    $tech_used = $_POST["tech_used"];
    $app_feat = $_POST["app_feat"];

    $github_url = $_POST["github_url"];
    $live_url = $_POST["live_url"];
    $proj_desc = $_POST["proj_desc"];
    $files = $_FILES["files"];
    // Instantiate Contr class
    include 'inloader.inc.php';
    $create = new CreateCtrl($proj_name, $tech_used, $app_feat, $github_url, $live_url, $proj_desc, $files);
    
    $create->insertProj();
    
    
    // Going to back to front page
    header("location: ../index.php?error=none#projects");

}