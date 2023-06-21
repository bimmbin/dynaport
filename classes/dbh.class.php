<?php
class Dbh {

    protected function connect() {
        try {

            // LocalHost

            // $username = "root";
            // $password = "";
            // $dbh = new PDO('mysql:host=localhost; dbname=portfolio_data', $username, $password);
            

            // LocalHost

            $username = "u280963573_bimbinn";
            $password = "=lYx6b3+M";
            $dbh = new PDO('mysql:host=localhost; dbname=u280963573_portfolio_data', $username, $password);
            




            return $dbh;
        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage(). "<br/>";
            die();
        }
        
    }
    
}