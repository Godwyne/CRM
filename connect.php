<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "crm_system";

    //create connection
    $connection = new mysqli($servername, $username, $password, $database);

    // Check connection
    if (!$connection) {
        die("Connection Failed: ". mysqli_error($connection));
    }

    
?>