<?php
 include 'header.php';



 if(isset($_POST["edit"])) {

    // Grabbing the data
    $proj_id = $_POST["editId"];

    // echo $proj_id;

    $fetchProj = new CreateView();

    $editProj = $fetchProj->fetchSingleId('project', $proj_id);

    $editTech = $fetchProj->showFetch('tech_name','project_tech', $proj_id);
    $editFeat = $fetchProj->showFetch('feat_name','project_feat', $proj_id);
    
    $techString = implode(", ",$editTech[0]); //assoc array to string conversion
    $featString = implode(", ",$editFeat[0]);

    $tech_used = str_replace(" ", ", ", $techString);
    $feat_used = str_replace(" ", ", ", $featString);
    // print_r($editProj);
?>

    <title>Edit Project</title>
</head>
<body>

<!-- header -------------->



<div class="container">
    <div class="create-container">
        <form action="includes/edit.inc.php" method="post" enctype="multipart/form-data">
            <h1>Edit Project</h1>
            <div class="flex">
                <div class="create-1">
                    <p>Project Name</p>
                    <input type="text" name="proj_name" value="<?php echo $editProj['0']['project_name']; ?>">
                    <p>Tech Used</p>
                    <textarea name="tech_used" id=""  rows="3"><?php echo $tech_used; ?></textarea>
                    <p>App Feature</p>
                    <textarea name="app_feat" id=""  rows="3"><?php echo $feat_used; ?></textarea>
                </div>
                <div class="create-2">
                    <p>Github Repo Link</p>
                    <input type="text" name="github_url" value="<?php echo $editProj['0']['github_url']; ?>">
                    <p>Live Website Link</p>
                    <input type="text" name="live_url" value="<?php echo $editProj['0']['live_url']; ?>">
                    <p>Front Preview Image</p>
                    <input type="file" accept=".png, .jpg, .jpeg" name="preview">
                    <p>Upload preview images</p>
                    <input type="file" accept=".png, .jpg, .jpeg" name="files[]" multiple>
                </div>
            </div>
            <div class="create-3">
                <p>Project Description</p>
                <textarea name="proj_desc" id="" cols="30" rows="10"><?php echo $editProj['0']['project_desc']; ?></textarea>
            </div>
            <div class="btn-create">
                <input class="clickable" type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
</div>




<!-- footer -------------->


<?php

} else {
    header("location: index.php");
}

 include 'footer.php';
?>