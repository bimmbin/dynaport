<?php
include_once '../includes/inloader.inc.php';

class Update extends Dbh {


    
    protected function deleteImg($colName, $tbName, $proj_id){

        $fetchProj = new CreateView();

        $projImages = $fetchProj->showFetch($colName, $tbName, $proj_id); 

        $pathView = "../uploads/".$projImages['0'][$colName];
        unlink($pathView);
    }

    protected function updateProj($colName, $colVal, $projId) {
        $sql = "UPDATE project SET $colName = ? WHERE project_id = ?";
        $stmt = $this->connect()->prepare($sql);


        if(!$stmt->execute(array($colVal, $projId))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
    }
    protected function updateInsidePictures($colVal, $projId) {
        $sql = "INSERT INTO project_img(img_name, project_id) VALUES (?, ?);";
        $stmt = $this->connect()->prepare($sql);

        if(!$stmt->execute(array($colVal, $projId))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
    }
    protected function updatePrevImg($colName, $tbName, $preview, $projId) {
  
        $fileName = $preview['name'];
        $fileTmpName = $preview['tmp_name'];
    
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $uniqueId = uniqid();
    
        $fileNameNew = $uniqueId.".".$fileActualExt;
        $fileDestination = '../uploads/'.$fileNameNew;
    
        if (move_uploaded_file($fileTmpName, $fileDestination)) {
            if(!empty($fileNameNew)) {
                $this->deleteImg($colName, $tbName, $projId);
                $this->updateProj('project_imgfeat', $fileNameNew, $projId);
            } 
        }
    }
    protected function updateInsideImg($preview, $projId) {
  
        $count = count($preview['name']);

        for ($i=0; $i < $count; $i++) {  

            $fileName = $preview['name'][$i];
            $fileTmpName = $preview['tmp_name'][$i];
        
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
            $uniqueId = uniqid();
        
            $fileNameNew = $i.$projId.$uniqueId.".".$fileActualExt;
            $fileDestination = '../uploads/'.$fileNameNew;
        
        
            if (move_uploaded_file($fileTmpName, $fileDestination)) {
                if(!empty($fileNameNew)) {
                    $this->updateInsidePictures($fileNameNew, $projId);
                } 
            }
        }
    }
    protected function deleteImgData($projId) {
        $sql = "DELETE FROM project_img WHERE project_id = ?;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array($projId));
    }
    protected function deleteTech($projId) {   
        $sql = "DELETE FROM project_tech WHERE project_id = ?;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array($projId));
    }
    protected function deleteFeat($projId) {
        $sql = "DELETE FROM project_feat WHERE project_id = ?;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute(array($projId));
    }

    protected function updateTech($arrayTech, $proj_id) {
        foreach ($arrayTech as $tech) {
            $sql = "INSERT INTO project_tech(tech_name, project_id) VALUES (?, ?);";
            $stmt = $this->connect()->prepare($sql);
            
            if(!$stmt->execute(array($tech, $proj_id))) {
                $stmt = null;
                header("location: ../create.php?error=stmtfailed");
                exit();
            }
            $stmt = null;
        }
    }
    protected function updateFeat($arrayFeat, $proj_id) {
        foreach ($arrayFeat as $feat) {
            $sql = "INSERT INTO project_feat(feat_name, project_id) VALUES (?, ?);";
            $stmt = $this->connect()->prepare($sql);
            
            if(!$stmt->execute(array($feat, $proj_id))) {
                $stmt = null;
                header("location: ../create.php?error=stmtfailed");
                exit();
            }
            $stmt = null;
        }
    }

    protected function updateProjFeat($colName, $colVal, $projId) {
        $sql = "UPDATE project_feat SET ? = '?' WHERE project_id = ?";
        $stmt = $this->connect()->prepare($sql);


        if(!$stmt->execute(array($colName, $colVal, $projId))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
    }

    



}