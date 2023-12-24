<?php

// session_start();//
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "myshop";

    $conn = new mysqli($servername, $username, $password, $database);
    if(!$conn){
        die(mysqli_error($conn));
    }

?>