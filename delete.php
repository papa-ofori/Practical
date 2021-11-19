<?php
     require "database_credentials.php";
     // connect to database
     $conn = new mysqli(SERVER, USERNAME, PASSWORD,DATABASE);


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


// $id = $_GET['id'];  get id through query string
// sql to delete a record
$sql = "DELETE FROM practical_lab_table WHERE lab_id=3";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

