<?php
require "database_credentials.php";
// connect to database
$conn = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
// check connection

if ($conn == false) {
	die("ERROR: Could not connect. "
				.mysqli_connect_error());
}

$sql = "SELECT * FROM practical_lab_table";
if ($res = mysqli_query($conn, $sql)) {
	if (mysqli_num_rows($res) > 0) {
		echo "<table>";
		echo "<tr>";
		echo "<th>ID</th>";
		echo "<th>Search Term</th>";
		echo "</tr>";
		while ($row = mysqli_fetch_array($res)) {
			echo "<tr>";
			
            echo "<td>".$row['lab_id']."</td>";
			echo "<td>".$row['Search_term']."</td>";
			 ?>
            <td><a href="update.php">Update</a></td>
            <td><a href="delete.php">Delete</a></td>
            <?php
			echo "</tr>";
            
		}
		echo "</table>";
		
	}
	else {
		echo "No matching records are found.";
	}
}
else {
	echo "ERROR: Could not able to execute $sql. "
		.mysqli_error($conn);
}
mysqli_close($conn);
?>
