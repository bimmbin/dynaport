<?php


class UpdateDel extends Dbh {


    
    
    protected function delProj($projId) {
        $sql = "DELETE FROM project WHERE project_id = ?;";
        $stmt = $this->connect()->prepare($sql);


        if($stmt->execute(array($projId))) {

            $sql1 = "DELETE FROM project_feat WHERE project_id = ?;";
            $stmt1 = $this->connect()->prepare($sql1);

            $bul1 = $stmt1->execute(array($projId));

            $sql2 = "DELETE FROM project_tech WHERE project_id = ?;";
            $stmt2 = $this->connect()->prepare($sql2);

            $bul2 = $stmt2->execute(array($projId));

            $sql3 = "DELETE FROM project_img WHERE project_id = ?;";
            $stmt3 = $this->connect()->prepare($sql3);

            $bul3 = $stmt3->execute(array($projId));



            if ($bul1&&$bul2&&$bul3) {
                header("location: ../index.php?error=none#projects");
                exit();
            }
        }

    }



}