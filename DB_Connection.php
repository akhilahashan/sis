<?php
require_once 'database_credentials.php';

// Create connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}





?>
