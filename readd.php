<?php
   require "database_credentials.php";
   // connect to database
   $conn = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
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

<h2>Details</h2>

<table border="2">
  <tr>
    <td>id</td>
    <td>Name</td>
    <td>Email</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php


$records = mysqli_query($conn,"select * users"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['username']; ?></td>
    <td><?php echo $data['userEmail']; ?></td>    
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>