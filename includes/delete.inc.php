<?php



if(isset($_POST["delete"])) {

    // Grabbing the data
    $proj_id = $_POST["delId"];

    // echo $proj_id;
    // Instantiate Contr class
    include 'inloader.inc.php';
    $delete = new DeleteCtrl($proj_id);
    
    $delete->deleteThis();
    
    // print_r($preview);
    
    // Going to back to front page
    header("location: ../index.php?error=none#projects");

}