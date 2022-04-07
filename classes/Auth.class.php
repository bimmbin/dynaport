<?php


class Auth extends Dbh {



    protected function ipBelow5($ipadd) {
        $sql = "SELECT * FROM auth WHERE ip_address = ?;";
        $stmt = $this->connect()->prepare($sql);
    
        if(!$stmt->execute(array($ipadd))) {
            $stmt = null;
            header("location: index.php?error=stmtfailed");
            exit();
        }
    
        
        if($stmt->rowCount() <= 7 || $stmt->rowCount() == 0) {
            return true;
        } else {
            return false;
        }
    }

    protected function ipGreater5($ipadd) {
        $sql = "SELECT * FROM auth WHERE ip_address = ?;";
        $stmt = $this->connect()->prepare($sql);
    
        if(!$stmt->execute(array($ipadd))) {
            $stmt = null;
            header("location: index.php?error=stmtfailed");
            exit();
        }
    
        if($stmt->rowCount() > 7) {
            return true;
        } else {
            return false;
        }
    }

}