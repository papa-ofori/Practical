<?php

require "database_credentials.php";
// connect to database
$conn = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
// check connection
if($conn ->connect_error) {
    die("Connection Failed: ".$conn->connect_error);
    echo "Connection Failed";
}

else{
    echo "Connection is successful";
}

$conn->close();
?>