<?php

function connect_db() {
    $host = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'notes-db';

    // Establishing the connection
    $conn = mysqli_connect($host, $dbUser, $dbPass, $dbName);

    // Check connection
    if (!$conn) {
        die("Database Connection error: " . "<br>" . mysqli_connect_error());
    }
    else{
      echo "Database Connection" ;
    }

    return $conn;
}

function close_db($conn) {
    mysqli_close($conn);
}
?>