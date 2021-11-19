<?php

require "database_credentials.php";
// connect to database
$conn = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE practical_lab_table set lab_id='" . $_POST['lab_id'] . "', Search_term ='" . $_POST['Search_term]  "');
    $message = "Record Modified Successfully";
    }
$result = mysqli_query($conn,"SELECT * FROM practical_lab_table WHERE lab_id='" . $_GET['lab_id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
    <div><?php if(isset($message)) { echo $message; } ?>
</div>

<div style="padding-bottom:5px;">
    <a href="select.php">Employee List</a>
</div>
Search term: <br>
<input type="hidden" name="userid" class="txtField" value="<?php echo $row['lab_id']; ?>">
<input type="text" name="userid"  value="<?php echo $row['lab_id']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>