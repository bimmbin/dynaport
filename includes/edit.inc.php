<?php



if(isset($_POST["update"])) {

    // Grabbing the data
    $proj_name = $_POST["proj_name"];
    $update_id = $_POST["update_id"];
    $tech_used = $_POST["tech_used"];
    $app_feat = $_POST["app_feat"];

    $github_url = $_POST["github_url"];
    $live_url = $_POST["live_url"];
    $proj_desc = $_POST["proj_desc"];
    $preview = $_FILES["preview"];
    $files = $_FILES["files"];
    // Instantiate Contr class
    include 'inloader.inc.php';
    $update = new UpdateCtrl($proj_name, $tech_used, $app_feat, $github_url, $live_url, $proj_desc, $files, $preview, $update_id);
    
    $update->updateProject();
    
    // print_r($preview);
    
    // Going to back to front page
    header("location: ../index.php?error=none#projects");

}