<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "pawcare";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if (!$connect) {
        die ("Connection failed");
    }
    
 
?>
