<?php
if (isset($_POST["create"])) {

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;

 
   }

  
   $searchTerm	 = validate($_POST["Search_term"]);
 
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
  
     require "database_credentials.php";
     // connect to database
     $conn = new mysqli(SERVER, USERNAME, PASSWORD,DATABASE);
    
    $sql = "INSERT INTO practical_lab_table(Search_term) Values('$searchTerm')";
    $results = mysqli_query($conn, $sql);
    if ($results) {
        echo "Search term added sucessfully";
    }else {
        echo "error";
    }
    
 ?>
 
    
</body>
</html>