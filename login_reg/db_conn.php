<?php
    $name = "localhost";
    $user = "root";
    $dbpass = "";
    $dbName = "pokemon";

    $conn = mysqli_connect($name, $user, $dbpass, $dbName); 

    if (!$conn) {
        die("Something went wrong");
    }

?>