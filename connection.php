<?php 
  $servername = "localhost";

  $username = "root"; 
 
  $password  = "";

  $dbname    = "marutiseva_new";
  $conn     = new mysqli($servername, $username, $password, $dbname);

        // Check connection

        if ($conn->connect_error) {

          die("Connection failed: " . $conn->connect_error);

        }
        
        $conn->query("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''))") or die("Error: (".$conn->errno.") ".$conn->error);
?>