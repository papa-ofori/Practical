<?php
if (isset($_POST["create"])) {

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;

 
   }

   $name = validate($_POST["username"]);
   $email = validate($_POST["userEmail"]);
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>   
<body>
<?php 
    //  if(isset($_POST["username"])) echo "Welcome  " .$_POST["username"];
     echo "</br>";
     echo "</br>";
     // if(isset($_POST["userEmail"])) echo $_POST["userEmail"];
  
     require "database_credentials.php";
     // connect to database
     $conn = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    
    $sql = "INSERT INTO users(username,userEmail) Values('$name','$email')";
    $results = mysqli_query($conn, $sql);
    if ($results) {
        echo "You have sucessfully created an row in your database";
    }else {
        echo "error";
    }
    
 ?>
 
    
</body>
</html>