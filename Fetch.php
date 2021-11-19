<?php

require "database_credentials.php";
// connect to database
$conn = new mysqli(SERVER, USERNAME, PASSWORD,DATABASE);
    if(!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Employee Details</h2>

<table border="2">
  <tr>
    <td>Lab ID</td>
    <td>Search Term</td>
    
  </tr>

<?php



$records = mysqli_query($conn,"select * from lab_practical_table where lab_id = 3 "); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['lab_id']; ?></td>
    <td><?php echo $data['Search_term']; ?></td>

  </tr>	
<?php
}
?>
</table>

<?php mysqli_close($conn); // Close connection ?>

</body>
</html>