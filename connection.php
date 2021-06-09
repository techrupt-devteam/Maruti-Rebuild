<?php 
$servername = "localhost";

 $username = "marutise_seva_new";  //marutise_new_sev

// $password = "9sBAOYro4e5y";
$password  = "HQX2BOQZ2PBO";

$dbname    = "marutise_seva_updated";
 $conn     = new mysqli($servername, $username, $password, $dbname);

        // Check connection

        if ($conn->connect_error) {

          die("Connection failed: " . $conn->connect_error);

        }
        
        $conn->query("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''))") or die("Error: (".$conn->errno.") ".$conn->error);
?>