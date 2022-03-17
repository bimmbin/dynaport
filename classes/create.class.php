<?php


class Create extends Dbh {


    
    protected function getProj($projName, $githubUrl) {
        $sql = "SELECT project_id FROM project WHERE project_name = ? or github_url = ?;";
        $stmt = $this->connect()->prepare($sql);


        if(!$stmt->execute(array($projName, $githubUrl))) {
            $stmt = null;
            header("location: ../create.php?error=stmtfailed");
            exit();
        }

        $proj_id = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $projId = implode(', ', $proj_id[0]);

        return $projId;
    }
    protected function setProj($projName, $githubUrl, $liveUrl, $projDesc) {
        $sql = "INSERT INTO project(project_name, project_desc,
        github_url, live_url) VALUES (?, ?, ?, ?);";
        $stmt = $this->connect()->prepare($sql);


        if(!$stmt->execute(array($projName, $projDesc, $githubUrl, $liveUrl))) {
            $stmt = null;
            header("location: ../create.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function setProjTech($projName, $projUrl, $techName) {

        $projId = $this->getProj($projName, $projUrl);

        foreach ($techName as $tech) {
            $sql = "INSERT INTO project_tech(tech_name, project_id) VALUES (?, ?);";
            $stmt = $this->connect()->prepare($sql);


            if(!$stmt->execute(array($tech, $projId))) {
                $stmt = null;
                header("location: ../create.php?error=stmtfailed");
                exit();
            }
            $stmt = null;
        }
    }

    protected function setProjFeat($projName, $projUrl, $featName) {

        $projId = $this->getProj($projName, $projUrl);

        foreach ($featName as $feat) {
            $sql = "INSERT INTO project_feat(feat_name, project_id) VALUES (?, ?);";
            $stmt = $this->connect()->prepare($sql);


            if(!$stmt->execute(array($feat, $projId))) {
                $stmt = null;
                header("location: ../create.php?error=stmtfailed");
                exit();
            }
            $stmt = null;
        }
    }

    protected function fileName($file, $count, $projName, $projUrl) {


        $projId = $this->getProj($projName, $projUrl);

        for ($i=0; $i < $count; $i++) {         
            $fileName = $file['name'][$i];
            $fileTmpName = $file['tmp_name'][$i];
        
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
        
        
            $fileNameNew = $projId.$fileName.".".$fileActualExt;
            $fileDestination = '../uploads/'.$fileNameNew;
        
        
            if (move_uploaded_file($fileTmpName, $fileDestination)) {
                if(!empty($fileNameNew)) {
                    $this->uploadImg($fileNameNew, $projId);
                } 
            }
        }
    }

    protected function uploadImg($fileName, $proj_id) {
        $sql = "INSERT INTO project_img(img_name, project_id) VALUES (?, ?);";
        $stmt = $this->connect()->prepare($sql);


        if(!$stmt->execute(array($fileName, $proj_id))) {
            $stmt = null;
            header("location: ../create.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }


    protected function fetchEm($tbName) {
        $sql = "SELECT * FROM projects WHERE id=?"; // SQL with parameters
        $stmt = $this->connect()->prepare($sql); 
        $stmt->bind_param("s", $tbName);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC); // get the mysqli result
        $user = $result->fetch_assoc(); // fetch data   

        return $result;
    }
}