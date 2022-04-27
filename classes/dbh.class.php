<?php
class Dbh {

    protected function connect() {
        try {

            // LocalHost

            // $username = "root";
            // $password = "";
            // $dbh = new PDO('mysql:host=localhost; dbname=portfolio_data', $username, $password);
            

            // LocalHost

            $username = "epiz_31287009";
            $password = "jzI9jKLDjRx1BDK";
            $dbh = new PDO('mysql:host=sql103.epizy.com; dbname=epiz_31287009_portfolio_data', $username, $password);
            




            return $dbh;
        }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage(). "<br/>";
            die();
        }
        
    }
    
}