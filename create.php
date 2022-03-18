<?php
 include 'header.php';
?>

    <title>Create Project</title>
</head>
<body>

<!-- header -------------->



<div class="container">
    <div class="create-container">
        <form action="includes/create.inc.php" method="post" enctype="multipart/form-data">
            <h1>Create Project</h1>
            <div class="flex">
                <div class="create-1">
                    <p>Project Name</p>
                    <input type="text" name="proj_name">
                    <p>Tech Used</p>
                    <textarea name="tech_used" id=""  rows="3"></textarea>
                    <p>App Feature</p>
                    <textarea name="app_feat" id=""  rows="3"></textarea>
                </div>
                <div class="create-2">
                    <p>Github Repo Link</p>
                    <input type="text" name="github_url">
                    <p>Live Website Link</p>
                    <input type="text" name="live_url">
                    <p>Front Preview Image</p>
                    <input type="file" accept=".png, .jpg, .jpeg" name="preview">
                    <p>Upload preview images</p>
                    <input type="file" accept=".png, .jpg, .jpeg" name="files[]" multiple>
                </div>
            </div>
            <div class="create-3">
                <p>Project Description</p>
                <textarea name="proj_desc" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="btn-create">
                <input class="clickable" type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
</div>






<!-- footer -------------->


<?php
 include 'footer.php';
?>